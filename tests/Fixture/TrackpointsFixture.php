<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrackpointsFixture
 *
 */
class TrackpointsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'latitude' => ['type' => 'decimal', 'length' => 11, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'longitude' => ['type' => 'decimal', 'length' => 12, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'timestamp' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'miliseconds' => ['type' => 'decimal', 'length' => 3, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'fix_id' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'satellites' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'hdop' => ['type' => 'decimal', 'length' => 4, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'vdop' => ['type' => 'decimal', 'length' => 4, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'pdop' => ['type' => 'decimal', 'length' => 4, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'ageofgpsdata' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'speed' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'heading' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'satellites_in_view' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'distance' => ['type' => 'float', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'track_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'trackpoints_fix_id' => ['type' => 'index', 'columns' => ['fix_id'], 'length' => []],
            'trackpoints_track_id' => ['type' => 'index', 'columns' => ['track_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'trackpoints_fix_id' => ['type' => 'foreign', 'columns' => ['fix_id'], 'references' => ['fixes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'trackpoints_track_id' => ['type' => 'foreign', 'columns' => ['track_id'], 'references' => ['tracks', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'latitude' => 1.5,
            'longitude' => 1.5,
            'timestamp' => '02:25:00',
            'miliseconds' => 1.5,
            'fix_id' => 1,
            'satellites' => 1,
            'hdop' => 1.5,
            'vdop' => 1.5,
            'pdop' => 1.5,
            'ageofgpsdata' => 1,
            'speed' => 1,
            'heading' => 1,
            'satellites_in_view' => 1,
            'distance' => 1,
            'track_id' => 1
        ],
    ];
}
