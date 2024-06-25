<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Oraclehardware extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'file_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'file_data' => [
                'type'       => 'longblob',
                'null' => true,
            ],
           'created_at' => [
                'type' => 'DATETIME',
                
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('oraclehardware');
    }

    public function down()
    {
        $this->forge->dropTable('oraclehardware');
    }
}
