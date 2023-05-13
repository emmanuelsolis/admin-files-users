<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Producto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'prod_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'prod_image' => [
                'type'       => 'TEXT',
                'null'       => true,
            ], 
            'prod_description' => [
                'type'       => 'varchar',
                'constraint' => '350',
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
            'fk_id_category' => [
                'type'       => 'INT',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_producto', true);
        $this->forge->createTable('t_producto');
    }

    public function down()
    {
        $this->forge->dropTable('t_producto');
    }
}
