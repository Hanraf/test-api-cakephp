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
        $this->request->allowMethod(["GET"]);
        $parameter = $this->request->getQuery();

        if(!empty($parameter)) $pengeluaran = $this->RaihanPengeluaranpribadi->find()->where($parameter);
        else $pengeluaran = $this->RaihanPengeluaranpribadi->find();

        $this->set([
            "status" => true,
            "message" => "List Pengeluaran",
            "condition param(s)" => $parameter,
            "data" => $pengeluaran,
            "_serialize" => ['status', 'message', 'condition param(s)', 'data']
        ]);
    }
}
