<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreateEvents extends AbstractMigration
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
        $table = $this->table('events');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('time', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('event_type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('weather_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('temperature', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('field_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('rival_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('start_fh', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_fh', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('start_sh', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_sh', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'UNIQUE_EVENT_NAME',
            'unique' => true,
        ]);
        $table->addIndex(['event_type_id']);
        $table->addForeignKey('event_type_id', 'event_types', 'id');
        $table->addIndex(['weather_id']);
        $table->addForeignKey('weather_id', 'weathers', 'id');
        $table->addIndex(['field_id']);
        $table->addForeignKey('field_id', 'fields', 'id');
        $table->addIndex(['rival_id']);
        $table->addForeignKey('rival_id', 'teams', 'id');
        $table->create();
    }
}
