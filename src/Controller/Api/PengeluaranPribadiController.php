<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use cake\View\JsonView;

/**
 * PengeluaranPribadi Controller
 *
 */
class PengeluaranPribadiController extends AppController
{
    // public function initialize(): void{
    //     parent::initialize();
    //     //$this->loadModel("RaihanPengeluaranpribadi");
    //     $this->loadComponent('RequestHandler');
    //     //$this->autoRender = false;
    // }

    public function viewClasses(): array{
        return [JsonView::class];
    }

    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadComponent('RequestHandler');
    // }

    public function index()
    {
        // Handle GET request
        //$data = $this->paginate($this->PengeluaranPribadi);
        //$data = $this->PengeluaranPribadi->find()->toArray();
        
        // $this->set(compact('data'));
        // $this->set([
        //     'status' => true,
        //     'message' => 'Data berhasil diambil',
        //     'data' => $data,
        //     '_serialize' => ['status', 'message', 'data']
        // ]);
    }

    public function add()
    {
        // Handle POST request
        $newData = $this->PengeluaranPribadi->newEmptyEntity();
        $newData = $this->PengeluaranPribadi->patchEntity($newData, $this->request->getData());
        
        if ($this->PengeluaranPribadi->save($newData)) {
            $this->set([
                'status' => true,
                'message' => 'Data berhasil ditambahkan',
                'data' => $newData,
                '_serialize' => ['status', 'message', 'data']
            ]);
        } else {
            // Handle save error
        }
    }

    public function edit($id)
    {
        // Handle PUT request
        try {
            $data = $this->PengeluaranPribadi->get($id);
            $data = $this->PengeluaranPribadi->patchEntity($data, $this->request->getData());
            
            if ($this->PengeluaranPribadi->save($data)) {
                $this->set([
                    'status' => true,
                    'message' => 'Data berhasil diubah',
                    'data' => $data,
                    '_serialize' => ['status', 'message', 'data']
                ]);
            } else {
                // Handle save error
            }
        } catch (RecordNotFoundException $exception) {
            // Handle record not found error
        }
    }

    public function delete($id)
    {
        // Handle DELETE request
        $data = $this->PengeluaranPribadi->get($id);
        
        if ($this->PengeluaranPribadi->delete($data)) {
            $this->set([
                'status' => true,
                'message' => 'Data berhasil dihapus',
                '_serialize' => ['status', 'message']
            ]);
        } else {
            // Handle delete error
        }
    }


    // public function listpengeluaran()
    // {
    //     $this->request->allowMethod(["GET"]);
    //     $parameter = $this->request->getQuery();
    //     $pengeluaran = '';

    //     if($this->request->getMethod() == "GET"){
    //         if(!empty($parameter)) $pengeluaran = $this->RaihanPengeluaranpribadi->find()->where($parameter);
    //         else $pengeluaran = $this->RaihanPengeluaranpribadi->find();

    //         $status = $this->response->getStatusCode();
    //     } else $status = 'Gunakan GET Method';

    //     $this->set([
    //         "status" => $status,
    //         "message" => "List Pengeluaran",
    //         "condition param(s)" => $parameter,
    //         "data" => $pengeluaran,
    //         "_serialize" => ['status', 'message', 'condition param(s)', 'data']
    //     ]);
    // }
}
