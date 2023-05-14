<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    
    {
        $this->forge->addField([
            'id_rol' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'rol_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
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
        ]);
        $this->forge->addKey('id_rol', true);
        $this->forge->addForeignKey('id_rol', 't_usuarios', 'rol', 'CASCADE', 'SET NULL');
        $this->forge->addUniqueKey('rol_name');
        $this->forge->createTable('t_roles');
    }

    public function down()
    {
        $this->forge->dropTable('t_roles');
    }
}
