<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diaries Controller
 *
 * @property \App\Model\Table\DiariesTable $Diaries
 */
class DiariesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($keyword=null)
    {

        if (isset($this->request->query['key'])) {
            $keyword = $this->request->query['key'];
        }
		$id = $this->request->session()->read(['Auth','User','id']);
        $this->paginate = [
            'conditions' => [
                    'Diaries.users_id' => $id, 
                    'Diaries.title LIKE' => '%'.$keyword.'%'
                ],
            'order' => ['Diaries.created' => 'DESC']
        ];
        $diaries = $this->paginate($this->Diaries);

        // IS ACTION
        if ($this->request->is(['patch', 'post', 'put'])) {

            foreach($this->request->data['select'] as $key => $data) {
                $this->Diaries->id = $data;
                $uid = $this->Diaries->id;

                if ($this->request->data['status']=='delete_permanently') {
                    // THIS BULK DELETE
                    $diary = $this->Diaries->get($uid);
                    $this->Diaries->delete($diary);
                    $this->redirect(['action' => 'index']);

                } elseif ($this->request->data['status']=='move_to_draft') {
                    // THIS BULK DRAFT
                    $diary = $this->Diaries->get($uid, [
                        'contain' => []
                    ]);
                    $diary->status = 'draft';
                    $this->Diaries->save($diary);
                    $this->redirect(['action' => 'index']);
                    
                } else {
                    // THIS BULK POST
                    $diary = $this->Diaries->get($uid, [
                        'contain' => []
                    ]);
                    $diary->status = 'posted';
                    $this->Diaries->save($diary);
                    $this->redirect(['action' => 'index']);
                }
            
            }
            $this->Flash->success('Your Selected Diary success to update', [
                'key' => 'succes_bulk_update'
            ]);
        }
        // END OF IS ACTION

        $this->set(compact('diaries'));
        $this->set('_serialize', ['diaries']);
    }

    /**
     * View method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diary = $this->Diaries->get($id, [
            'contain' => []
        ]);
        
        $this->set('diary', $diary);
        $this->set('_serialize', ['diary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $id_user = $this->request->session()->read(['Auth','User','id']);
        $diary = $this->Diaries->newEntity();

        $this->set(compact('diary'));
        $this->set('_serialize', ['diary']);
    }

    public function ajaxSaveDiary() 
    {
        $json = ['status' => 'error'];

        $id_user = $this->request->session()->read(['Auth','User','id']);
        $diary = $this->Diaries->newEntity();
        if ($this->request->is('ajax')) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);

            $diary->users_id=$id_user; //declare new data and Update data
            if ($this->request->data['id']=='') {
               
            } else {
                $diary->id = $this->request->data['id'];
            }
            if ($this->Diaries->save($diary)) {
                $json = [
                    'status' => $diary->status,
                    'id' => $diary->id
                ];
            }
        }
        $this->set(compact('diary'));
        $this->set('_serialize', ['diary']);
        echo json_encode($json);

        exit;
    }

    /**
     * Edit method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diary = $this->Diaries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);
            if ($this->Diaries->save($diary)) {
                $this->Flash->success(__('The diary has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diary could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('diary'));
        $this->set('_serialize', ['diary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diary = $this->Diaries->get($id);
        // debug($diary);exit;
        if ($this->Diaries->delete($diary)) {
            $this->Flash->success(__('The diary has been deleted.'));
        } else {
            $this->Flash->error(__('The diary could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
