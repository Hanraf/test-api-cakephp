<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RaihanKategoripengeluaranFixture
 */
class RaihanKategoripengeluaranFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'raihan_kategoripengeluaran';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_kategori' => 'fab5e951-b26e-4973-9a82-d862e5ff9db9',
                'nama_kategori' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
