<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreatePlayers extends AbstractMigration
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
        $table = $this->table('players');
        $table->addColumn('first_name', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('birth_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('height', 'decimal', [
            'default' => null,
            'precision' => 3,  'scale' => '1',
            'null' => false,
        ]);
        $table->addColumn('strong_leg_id', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('position_id', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('photo_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addIndex(['position_id']);
        $table->addForeignKey('position_id', 'positions', 'id');
        $table->addIndex(['strong_leg_id']);
        $table->addForeignKey('strong_leg_id', 'legs', 'id');
        $table->create();
    }
}
