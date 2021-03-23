<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatsArtigosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatsArtigosTable Test Case
 */
class CatsArtigosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatsArtigosTable
     */
    protected $CatsArtigos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CatsArtigos',
        'app.Artigos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CatsArtigos') ? [] : ['className' => CatsArtigosTable::class];
        $this->CatsArtigos = $this->getTableLocator()->get('CatsArtigos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CatsArtigos);

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
}
