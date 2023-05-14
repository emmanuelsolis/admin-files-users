<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Group extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_group' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'name_group' => [
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
        $this->forge->addKey('id_group', true);
        $this->forge->addForeignKey('id_group', 't_usuarios', 'rol', 'CASCADE', 'SET NULL');
        $this->forge->addUniqueKey('name_group');
        $this->forge->createTable('t_groups');
    }

    public function down()
    {
        $this->forge->dropTable('t_groups');
    }
}
