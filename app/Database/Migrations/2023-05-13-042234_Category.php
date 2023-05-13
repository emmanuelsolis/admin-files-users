<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_category' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'cat_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'cat_image' => [
                'type'       => 'TEXT',
                'null'       => true,
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
        $this->forge->addKey('id_category', true);
        $this->forge->createTable('t_category');
    }

    public function down()
    {
          $this->forge->dropTable('t_category');
    }
}
