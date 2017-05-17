<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreateFields extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('fields');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('city_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('altitude', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('photo_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('limit_1_lat', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_1_lon', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_2_lat', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_2_lon', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_3_lat', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_3_lon', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_4_lat', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('limit_4_lon', 'decimal', [
            'default' => null,
            'precision' => 10,  'scale' => '9',
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'UNIQUE_FIELD_NAME',
            'unique' => true,
        ]);
        $table->addIndex(['city_id']);
        $table->addForeignKey('city_id', 'cities', 'id');
        $table->create();
    }
}
