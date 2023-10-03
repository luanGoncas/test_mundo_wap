<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Stores extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $storesTable = $this->table('stores', ['id' => false, 'primary_key' => ['id']]);
        $storesTable
              ->addColumn('id', 'biginteger', [
                'autoIncrement' => true
              ])
              ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false
              ])
              ->create();
    }
}
