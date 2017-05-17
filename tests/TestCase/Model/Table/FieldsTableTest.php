<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FieldsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FieldsTable Test Case
 */
class FieldsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FieldsTable
     */
    public $Fields;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fields',
        'app.cities',
        'app.events',
        'app.event_types',
        'app.weathers',
        'app.teams',
        'app.equipments',
        'app.players',
        'app.positions',
        'app.legs',
        'app.tracks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fields') ? [] : ['className' => 'App\Model\Table\FieldsTable'];
        $this->Fields = TableRegistry::get('Fields', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fields);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
