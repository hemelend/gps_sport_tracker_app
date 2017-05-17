<?php
use Migrations\AbstractMigration;

class CreateEquipments extends AbstractMigration
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
        $table = $this->table('equipments');
        $table->addColumn('serial_number', 'string', [
            'default' => null,
            'limit' => 17,
            'null' => false,
        ]);
        $table->addIndex([
            'serial_number',
        ], [
            'name' => 'UNIQUE_EQUIPMENT_SERIAL_NUMBER',
            'unique' => true,
        ]);
        $table->create();
    }
}
