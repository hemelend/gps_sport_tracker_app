<?php
use Migrations\AbstractMigration;

class CreateTracks extends AbstractMigration
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
        $table = $this->table('tracks');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 40,
            'null' => false,
        ]);
        $table->addColumn('event_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('equipment_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('player_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex(['event_id']);
        $table->addForeignKey('event_id', 'events', 'id');
        $table->addIndex(['equipment_id']);
        $table->addForeignKey('equipment_id', 'equipments', 'id');
        $table->addIndex(['player_id']);
        $table->addForeignKey('player_id', 'players', 'id');
        $table->create();
    }
}
