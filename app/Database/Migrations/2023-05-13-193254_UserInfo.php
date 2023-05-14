<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserInfo extends Migration
{
    public function up()

    {

        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'rol' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'       => 'timestamp',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'timestamp',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->addForeignKey('id_usuario', 't_usuarios', 'id_usuario', 'CASCADE', 'Cascade');
        $this->forge->createTable('usuarios_info');
        
    }

    public function down()
    {
        $this->forge->dropTable('uausarios_info');
    }
}
