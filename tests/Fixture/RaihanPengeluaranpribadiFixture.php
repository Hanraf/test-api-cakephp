<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RaihanPengeluaranpribadiFixture
 */
class RaihanPengeluaranpribadiFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'raihan_pengeluaranpribadi';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_pengeluaran' => '6a2f2ec8-5b2f-48e2-954d-c8cbc823f6a7',
                'tanggal' => '2023-11-09',
                'deskripsi' => 'Lorem ipsum dolor sit amet',
                'kategori' => 'Lorem ipsum dolor sit amet',
                'jumlah_pengeluaran' => 1,
                'metode_pembayaran' => 'Lorem ipsum dolor sit amet',
                'tanggal_input' => 1699526763,
            ],
        ];
        parent::init();
    }
}
