<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
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
                'type'       => 'Int',
                'constraint' => '12',
                'null'       => false,
            ],
            'created_at' => [
                'type'       => 'timestamp',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'timestamp',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'timestamp',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->addForeignKey('rol', 't_roles', 'id_rol', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('id_usuario', 'usuarios_info', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('t_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios');
    }
}
