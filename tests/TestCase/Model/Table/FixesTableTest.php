<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FixesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FixesTable Test Case
 */
class FixesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FixesTable
     */
    public $Fixes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fixes',
        // 'app.trackpoints'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fixes') ? [] : ['className' => 'App\Model\Table\FixesTable'];
        $this->Fixes = TableRegistry::get('Fixes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fixes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
