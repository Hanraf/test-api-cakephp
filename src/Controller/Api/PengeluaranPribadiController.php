<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * PengeluaranPribadi Controller
 *
 */
class PengeluaranPribadiController extends AppController
{
    public function initialize(): void{
        parent::initialize();
        $this->loadModel("RaihanPengeluaranpribadi");
    }

    public function listpengeluaran()
    {
        $this->request->allowMethod(["get"]);

        

        $pengeluaran = $this->RaihanPengeluaranpribadi->find('all');
        // ->toList();

        $this->set([
            "status" => true,
            "message" => "List Pengeluaran",
            "data" => $pengeluaran,
            "_serialize" => ['status', 'message', 'data']
        ]);

        //$this->viewBuilder()->setOption("serialize", ["data"]);
    }
}
