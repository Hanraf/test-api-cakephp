<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaihanKategoripengeluaranTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaihanKategoripengeluaranTable Test Case
 */
class RaihanKategoripengeluaranTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RaihanKategoripengeluaranTable
     */
    protected $RaihanKategoripengeluaran;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.RaihanKategoripengeluaran',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RaihanKategoripengeluaran') ? [] : ['className' => RaihanKategoripengeluaranTable::class];
        $this->RaihanKategoripengeluaran = $this->getTableLocator()->get('RaihanKategoripengeluaran', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RaihanKategoripengeluaran);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RaihanKategoripengeluaranTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
