<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 *
 */
class EventsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'name' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'date' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'time' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'event_type_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'weather_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'temperature' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'field_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'rival_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'start_fh' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'end_fh' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'start_sh' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'end_sh' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'events_event_type_id' => ['type' => 'index', 'columns' => ['event_type_id'], 'length' => []],
            'events_weather_id' => ['type' => 'index', 'columns' => ['weather_id'], 'length' => []],
            'events_field_id' => ['type' => 'index', 'columns' => ['field_id'], 'length' => []],
            'events_rival_id' => ['type' => 'index', 'columns' => ['rival_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'unique_event_name' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
            'events_event_type_id' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'events_field_id' => ['type' => 'foreign', 'columns' => ['field_id'], 'references' => ['fields', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'events_rival_id' => ['type' => 'foreign', 'columns' => ['rival_id'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'events_weather_id' => ['type' => 'foreign', 'columns' => ['weather_id'], 'references' => ['weathers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'date' => '2017-05-10',
            'time' => '02:24:56',
            'event_type_id' => 1,
            'weather_id' => 1,
            'temperature' => 1,
            'field_id' => 1,
            'rival_id' => 1,
            'start_fh' => '02:24:56',
            'end_fh' => '02:24:56',
            'start_sh' => '02:24:56',
            'end_sh' => '02:24:56'
        ],
    ];
}
