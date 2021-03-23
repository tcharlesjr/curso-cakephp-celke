<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtigosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtigosTable Test Case
 */
class ArtigosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtigosTable
     */
    protected $Artigos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artigos',
        'app.CatsArtigos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Artigos') ? [] : ['className' => ArtigosTable::class];
        $this->Artigos = $this->getTableLocator()->get('Artigos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artigos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
