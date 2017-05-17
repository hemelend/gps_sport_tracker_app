<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FieldsFixture
 *
 */
class FieldsFixture extends TestFixture
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
        'city_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'altitude' => ['type' => 'integer', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'photo_url' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'limit_1_lat' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_1_lon' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_2_lat' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_2_lon' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_3_lat' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_3_lon' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_4_lat' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        'limit_4_lon' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 9, 'unsigned' => null],
        '_indexes' => [
            'fields_city_id' => ['type' => 'index', 'columns' => ['city_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'unique_field_name' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
            'fields_city_id' => ['type' => 'foreign', 'columns' => ['city_id'], 'references' => ['cities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'city_id' => 1,
            'altitude' => 1,
            'photo_url' => 'Lorem ipsum dolor sit amet',
            'limit_1_lat' => 1.5,
            'limit_1_lon' => 1.5,
            'limit_2_lat' => 1.5,
            'limit_2_lon' => 1.5,
            'limit_3_lat' => 1.5,
            'limit_3_lon' => 1.5,
            'limit_4_lat' => 1.5,
            'limit_4_lon' => 1.5
        ],
    ];
}
