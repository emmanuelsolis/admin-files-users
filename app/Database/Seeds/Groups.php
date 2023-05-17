<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Groups extends Seeder
{
    public function run()
    {
        $faker = Factory::create('es_ES');

        for($i = 0; $i < 3; $i++){
            $data = [
                'name_group' => $faker->unique()->randomElement(['admin', 'user', 'guest', 'recusos humanos', 'ventas', 'compras', 'contabilidad', 'gerencia', 'marketing', 'sistemas']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ];
            $this->db->table('t_groups')->insert($data);
        }
       
    }
}
