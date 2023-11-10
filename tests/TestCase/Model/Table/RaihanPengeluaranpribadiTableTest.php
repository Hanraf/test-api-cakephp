<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaihanPengeluaranpribadiTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaihanPengeluaranpribadiTable Test Case
 */
class RaihanPengeluaranpribadiTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RaihanPengeluaranpribadiTable
     */
    protected $RaihanPengeluaranpribadi;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.RaihanPengeluaranpribadi',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RaihanPengeluaranpribadi') ? [] : ['className' => RaihanPengeluaranpribadiTable::class];
        $this->RaihanPengeluaranpribadi = $this->getTableLocator()->get('RaihanPengeluaranpribadi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RaihanPengeluaranpribadi);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RaihanPengeluaranpribadiTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
