<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreateTrackpoints extends AbstractMigration
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
        $table = $this->table('trackpoints');
        $table->addColumn('latitude', 'decimal', [
            'default' => null,
            'precision' => 11,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('longitude', 'decimal', [
            'default' => null,
            'precision' => 12,  'scale' => '9',
            'null' => false,
        ]);
        $table->addColumn('timestamp', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('miliseconds', 'decimal', [
            'default' => null,
            'precision' => 3,  'scale' => '0',
            'null' => false,
        ]);
        $table->addColumn('fix_id', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('satellites', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('hdop', 'decimal', [
            'default' => null,
            'precision' => 4,  'scale' => '2',
            'null' => false,
        ]);
        $table->addColumn('vdop', 'decimal', [
            'default' => null,
            'precision' => 4,  'scale' => '2',
            'null' => false,
        ]);
        $table->addColumn('pdop', 'decimal', [
            'default' => null,
            'precision' => 4,  'scale' => '2',
            'null' => false,
        ]);
        $table->addColumn('ageofgpsdata', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('speed', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('heading', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('satellites_in_view', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('distance', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('track_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex(['fix_id']);
        $table->addForeignKey('fix_id', 'fixes', 'id');
        $table->addIndex(['track_id']);
        $table->addForeignKey('track_id', 'tracks', 'id');
        $table->create();
    }
}
