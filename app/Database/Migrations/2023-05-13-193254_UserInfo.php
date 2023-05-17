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
            'fk_rol' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'null'           => true,
            ],
            'fk_productos' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'null'           => true,
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
        $this->forge->addForeignKey('id_usuario', 't_usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('fk_rol', 't_groups', 'id_group', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('fk_productos', 't_productos', 'id_producto', 'CASCADE', 'SET NULL');
        $this->forge->addUniqueKey('usuario');
        $this->forge->createTable('usuarios_info');
        
    }

    public function down()
    {
        $this->forge->dropTable('usuarios_info');
    }
}
