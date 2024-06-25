<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
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
            'password' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'repassword' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('register');
    }

    public function down()
    {
        $this->forge->dropTable('register');
    }
}
