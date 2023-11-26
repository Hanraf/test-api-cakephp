<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * KategoriPengeluaran Controller
 *
 * @method \App\Model\Entity\KategoriPengeluaran[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KategoriPengeluaranController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void{
        parent::initialize();
        $this->loadModel("RaihanKategoripengeluaran");
    }
    
    public function listkategori()
    {
        $this->request->allowMethod(['GET']);
        $parameter = $this->request->getQuery();

        if (!empty($parameter)) $kategoriPengeluaran = $this->RaihanKategoripengeluaran->find()->where($parameter);
        else $kategoriPengeluaran = $this->RaihanKategoripengeluaran->find();

        $this->set([
            "data" => $kategoriPengeluaran,
            "_serialize" => "data"
        ]);

        //$this->set(compact('kategoriPengeluaran'));
    }

    /**
     * View method
     *
     * @param string|null $id Kategori Pengeluaran id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kategoriPengeluaran = $this->KategoriPengeluaran->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('kategoriPengeluaran'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kategoriPengeluaran = $this->KategoriPengeluaran->newEmptyEntity();
        if ($this->request->is('post')) {
            $kategoriPengeluaran = $this->KategoriPengeluaran->patchEntity($kategoriPengeluaran, $this->request->getData());
            if ($this->KategoriPengeluaran->save($kategoriPengeluaran)) {
                $this->Flash->success(__('The kategori pengeluaran has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategori pengeluaran could not be saved. Please, try again.'));
        }
        $this->set(compact('kategoriPengeluaran'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kategori Pengeluaran id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kategoriPengeluaran = $this->KategoriPengeluaran->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kategoriPengeluaran = $this->KategoriPengeluaran->patchEntity($kategoriPengeluaran, $this->request->getData());
            if ($this->KategoriPengeluaran->save($kategoriPengeluaran)) {
                $this->Flash->success(__('The kategori pengeluaran has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategori pengeluaran could not be saved. Please, try again.'));
        }
        $this->set(compact('kategoriPengeluaran'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kategori Pengeluaran id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kategoriPengeluaran = $this->KategoriPengeluaran->get($id);
        if ($this->KategoriPengeluaran->delete($kategoriPengeluaran)) {
            $this->Flash->success(__('The kategori pengeluaran has been deleted.'));
        } else {
            $this->Flash->error(__('The kategori pengeluaran could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}