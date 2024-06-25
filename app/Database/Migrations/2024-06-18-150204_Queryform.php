<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Queryform extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'query' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('queryform');
    }

    public function down()
    {
        $this->forge->dropTable('queryform');
    }
}
