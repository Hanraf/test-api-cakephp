<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Api;

use App\Controller\Api\PengeluaranPribadiController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Api\PengeluaranPribadiController Test Case
 *
 * @uses \App\Controller\Api\PengeluaranPribadiController
 */
class PengeluaranPribadiControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PengeluaranPribadi',
    ];
}
