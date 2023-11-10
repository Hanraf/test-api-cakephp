<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PengeluaranPribadi Controller
 *
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PengeluaranPribadiController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

     public function initialize(): void
     {
         parent::initialize();
         $this->loadModel("RaihanPengeluaranpribadi");
     }
    public function index()
    {
        //$pengeluaranPribadi = $this->paginate($this->RaihanPengeluaranpribadi);
        $this->request->allowMethod(["get"]);
        $Data = $this->RaihanPengeluaranpribadi->find()->toList();
        //$raihanData = $this->RaihanPengeluaranpribadi->find('all');
        $this->set([
            'status' => TRUE,
            'data' => $Data,
            // '_serialize' => 'data',
        ]);

        $this->viewBuilder()->setOption("serialize", ["data"]);

        // $this->set(compact('RaihanPengeluaranpribadi'));
    }

    /**
     * View method
     *
     * @param string|null $id Pengeluaran Pribadi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pengeluaranPribadi = $this->PengeluaranPribadi->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pengeluaranPribadi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pengeluaranPribadi = $this->PengeluaranPribadi->newEmptyEntity();
        if ($this->request->is('post')) {
            $pengeluaranPribadi = $this->PengeluaranPribadi->patchEntity($pengeluaranPribadi, $this->request->getData());
            if ($this->PengeluaranPribadi->save($pengeluaranPribadi)) {
                $this->Flash->success(__('The pengeluaran pribadi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pengeluaran pribadi could not be saved. Please, try again.'));
        }
        $this->set(compact('pengeluaranPribadi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pengeluaran Pribadi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pengeluaranPribadi = $this->PengeluaranPribadi->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pengeluaranPribadi = $this->PengeluaranPribadi->patchEntity($pengeluaranPribadi, $this->request->getData());
            if ($this->PengeluaranPribadi->save($pengeluaranPribadi)) {
                $this->Flash->success(__('The pengeluaran pribadi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pengeluaran pribadi could not be saved. Please, try again.'));
        }
        $this->set(compact('pengeluaranPribadi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pengeluaran Pribadi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pengeluaranPribadi = $this->PengeluaranPribadi->get($id);
        if ($this->PengeluaranPribadi->delete($pengeluaranPribadi)) {
            $this->Flash->success(__('The pengeluaran pribadi has been deleted.'));
        } else {
            $this->Flash->error(__('The pengeluaran pribadi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
