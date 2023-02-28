<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class People extends Migration
{
    public function up()
    {
          $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'edad' => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'   => true,
            ],

            'name' => [
                'type'      =>'VARCHAR',
                'constraint'=>'255',
            ],


            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('people');

    }

    public function down()
    {
        $this->forge->dropTable('people');
    }
}
