<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Http\Client;
use Cake\Routing\Router;
use Cake\ORM\Marshaller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([
			  'add'
			, 'success'
			, 'googleLogin'
			, 'googleCallback'
			, 'index'
			, 'accessToken'
			, 'account'
            , 'view'
            , 'noaccount'
		]);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id=null)
    {
		$req_par = $this->request->query;
		if (isset($req_par) && $req_par) {
			$token = $this->request->query('tk');
			$user = $this->Users->find('all',[
				'conditions' => ['Users.token' => $token]
				])->first();
			$this->request->data['email'] = $user->email;
			$this->request->data['username'] = $user->username;
			$this->request->data['password'] = $user->password;
			$this->request->data['status'] = 'verified';
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Your Account Has been Verified', ['key' => 'verified']);
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
	        $this->set(compact('user'));
	        $this->set('_serialize', ['user']);
		} else {
			$this->redirect(['action' => 'login']);
		}
	}
	public function login()
    {
		if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user) {
				if ($user['status']=='not_verified') {
					$this->Flash->error('Need to verified your account, please check your email', [
						'key' => 'user_not_verified']
					);
					$this->redirect('/users/login');
				} else {
		            $this->Auth->setUser($user);
					if ($user['first_name']==null) {
		            	return $this->redirect('/users/account');
					} else {
						return $this->redirect('/users/timeline');
					}
				}
	        }
			$this->Flash->error('Wrong Username or Password', [
				'key' => 'error_login']
			);
	    }
    }

	public function googleLogin() {
	    // GoogleのOAuth設定で生成された値
	    $client_id = '487749713247-hci8p168bpnpumkm9hk5qea8p4r6mkvc.apps.googleusercontent.com';
	    // コールバックURL
	    $callback = Router::url(['action'=>'googleCallback'], true);
	    // スコープ
	    $scopes = array(
	        'https://www.googleapis.com/auth/userinfo.profile',
	        'https://www.googleapis.com/auth/userinfo.email',
	    );
	    // Google+のログイン画面へリダイレクト
	    $url = sprintf('https://accounts.google.com/o/oauth2/auth?scope=%s&redirect_uri=%s&response_type=code&client_id=%s',
	        urlencode(implode(' ', $scopes)),
	        urlencode($callback),
	        $client_id
	    );
	    return $this->redirect($url);
	}

	/**
	 *
	 *  Google+ callback
	 *
	 */
	public function googleCallback() {
	    // GoogleのOAuth設定で生成された値
	    $client_id = '487749713247-hci8p168bpnpumkm9hk5qea8p4r6mkvc.apps.googleusercontent.com';
	    $client_secret = 'NyMD--BPiUSpaOpVLBL_NI6X';
		// debug($callback);exit;
	    // コールバックURL
	    $callback = Router::url(['action'=>'googleCallback'], true);
	    // URLパラメータの取得
	    $code = $this->request->query('code');
	    // アクセストークンを取得する
	    $http = new Client();
	    $response = $http->post('https://accounts.google.com/o/oauth2/token', [
	        'code' => $code,
	        'client_id' => $client_id,
	        'client_secret' => $client_secret,
	        'redirect_uri' => $callback,
	        'grant_type' => 'authorization_code'
	    ]);
	    $json_token = json_decode($response->body);
	    $access_token = $json_token->access_token;
	    // ユーザ情報の取得
	    $http = new Client();
	    $response = $http->get('https://www.googleapis.com/oauth2/v1/userinfo', [
	        'access_token' => $access_token
	    ]);
	    $user = json_decode($response->body);
		debug($user);exit;
	}

	public function logout()
	{
	    return $this->redirect($this->Auth->logout());
	}
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

	public function timeline()
    {

    }
	public function account($id=null)
    {
		$id = $this->request->session()->read(['Auth', 'User', 'id']);
		$user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			$this->request->data['id'] = $user->id;
			if (isset($this->request->data['picture']) && $this->request->data['picture']['name']=='') {
				$this->request->data['picture'] = $user->picture;
			}
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Your Profile has been saved.', [
					'key' => 'successEditProfile'
				]);
                return $this->redirect(['action' => 'account']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    public function view()
    {
        $username = $this->request->params['username'];
        $user = $this->Users->find('all', [
            'conditions' => ['Users.username' => $username]
        ])->first();

        if ($user==null) {
            return $this->redirect('/noaccount');
        }

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    public function noaccount()
    {

    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Conratulation, Your Registration was successful, Please Check Your Email to Verify your account', [
    				'key' => 'success']
				);
                return $this->redirect(['action' => 'success']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
	public function success()
    {

    }
	public function home()
    {

    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
