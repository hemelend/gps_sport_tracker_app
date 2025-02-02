<?php
use Migrations\AbstractMigration;

class CreateEventTypes extends AbstractMigration
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
        $table = $this->table('event_types');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'UNIQUE_EVENT_TYPE_NAME',
            'unique' => true,
        ]);
        $table->create();
    }
}
