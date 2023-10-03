<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Addresses extends AbstractMigration
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
        $addressesTable = $this->table('addresses', ['id' => false, 'primary_key' => ['id']]);
        $addressesTable
              ->addColumn('id', 'biginteger', [
                'autoIncrement' => true
              ])
              ->addColumn('foreign_table', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true
              ])
              ->addColumn('foreign_id', 'biginteger', [
                'default' => null,
                'null' => true
              ])
              ->addColumn('postal_code', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => false
              ])
              ->addColumn('state', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true
              ])
              ->addColumn('city', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true
              ])
              ->addColumn('sublocality', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true
              ])
              ->addColumn('street', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true
              ])->addColumn('street_number', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false
              ])
              ->addColumn('complement', 'string', [
                'default' => '',
                'limit' => 200,
                'null' => true
              ])
              ->addIndex(['foreign_table', 'foreign_id'], ['unique' => true])
              ->create();
    }
}
