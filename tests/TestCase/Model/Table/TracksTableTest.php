<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TracksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TracksTable Test Case
 */
class TracksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TracksTable
     */
    public $Tracks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.equipments',
        'app.events',
        'app.event_types',
        'app.weathers',
        'app.fields',
        'app.cities',
        'app.teams',
        'app.players',
        'app.legs',
        'app.positions',
        'app.trackpoints',
        'app.fixes',
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
        $config = TableRegistry::exists('Tracks') ? [] : ['className' => 'App\Model\Table\TracksTable'];
        $this->Tracks = TableRegistry::get('Tracks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tracks);

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
