<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreateTeams extends AbstractMigration
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
        $table = $this->table('teams');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('emblem', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('field_id', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'UNIQUE_TEAM_NAME',
            'unique' => true,
        ]);
        $table->addIndex(['field_id']);
        $table->addForeignKey('field_id', 'fields', 'id');
        $table->create();
    }
}
