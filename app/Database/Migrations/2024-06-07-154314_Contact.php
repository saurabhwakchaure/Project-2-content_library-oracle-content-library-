<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'phone_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'service' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
            'email' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contact');
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
