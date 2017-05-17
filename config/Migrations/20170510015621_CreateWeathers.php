<?php
use Migrations\AbstractMigration;

class CreateWeathers extends AbstractMigration
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
        $table = $this->table('weathers');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'UNIQUE_WEATHER_NAME',
            'unique' => true,
        ]);
        $table->create();
    }
}
