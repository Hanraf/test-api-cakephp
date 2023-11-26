<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\Exception\RecordNotFoundException;
use cake\View\JsonView;
use PHPUnit\Framework\Constraint\IsEmpty;

/**
 * RaihanPengeluaranpribadi Controller
 *
 * @property \App\Model\Table\RaihanPengeluaranpribadiTable $RaihanPengeluaranpribadi
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RaihanPengeluaranpribadiController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    // public function initialize(): void{
    //     parent::initialize();
    //     $this->loadComponent('Security');
    //     $this->Security->setConfig([
    //         'unlockedActions' => ['delete', 'post', 'put'],
    //     ]);
    // }

    public function viewClasses(): array{
        return [JsonView::class];
    }
    public function index($id = null)
    {
        switch($this->request->getMethod()){
            case 'GET':
                if (empty($id)) $raihanPengeluaranpribadi = $this->paginate($this->RaihanPengeluaranpribadi);
                else $this->view($id);
                break;
            case 'POST':
                $this->add();
                break;
            case 'PUT':
                $this->edit($id);
                break;
            case 'DELETE':
                $this->delete($id);
                break;
        }
        
        $this->set(compact('raihanPengeluaranpribadi'));
        $this->set([
            'data' => $raihanPengeluaranpribadi,
            '_serialize' => 'data' 
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Raihan Pengeluaranpribadi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id, [
            'contain' => [],
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->newEmptyEntity();
        if ($this->request->is('post')) {
            $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->patchEntity($raihanPengeluaranpribadi, $this->request->getData());
            if ($this->RaihanPengeluaranpribadi->save($raihanPengeluaranpribadi)) {
                $this->Flash->success(__('The raihan pengeluaranpribadi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raihan pengeluaranpribadi could not be saved. Please, try again.'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Raihan Pengeluaranpribadi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->patchEntity($raihanPengeluaranpribadi, $this->request->getData());
            if ($this->RaihanPengeluaranpribadi->save($raihanPengeluaranpribadi)) {
                $this->Flash->success(__('The raihan pengeluaranpribadi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raihan pengeluaranpribadi could not be saved. Please, try again.'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Raihan Pengeluaranpribadi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $raihanPengeluaranpribadi = $this->RaihanPengeluaranpribadi->get($id);
        if ($this->RaihanPengeluaranpribadi->delete($raihanPengeluaranpribadi)) {
            $this->Flash->success(__('The raihan pengeluaranpribadi has been deleted.'));
        } else {
            $this->Flash->error(__('The raihan pengeluaranpribadi could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
    }
}