<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subscribe extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            
             
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('subscribe');
    }

    public function down()
    {
        $this->forge->dropTable('subscribe');
    }
}
