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
    public function index()
    {
		$id = $this->request->session()->read(['Auth','User','id']);
        $this->paginate = [
            'conditions' => ['Diaries.users_id' => $id],
            'order' => ['Diaries.created' => 'DESC']
        ];
        $diaries = $this->paginate($this->Diaries);

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
        if ($this->request->is('post')) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);

            $diary->id=$this->request->data['id'];
            $diary->users_id=$id_user; //declare new data and Update data
            $diary->status='posted';
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

    public function ajaxSaveDiary() {
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
                    'status' => 'success',
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
        if ($this->Diaries->delete($diary)) {
            $this->Flash->success(__('The diary has been deleted.'));
        } else {
            $this->Flash->error(__('The diary could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
