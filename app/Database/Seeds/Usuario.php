<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()

    {
        $usuario = "admin";
        $pasword = password_hash('123', PASSWORD_DEFAULT);
        $email = "admin@hotmail.com";
        $rol = "admin";

        $data = [
            'usuario' => $usuario,
            'email'    => $email,
            'password' => $pasword,
            'rol'      => $rol
        ];

       

        // Using Query Builder
        $this->db->table('t_usuarios')->insert($data);
    }
}
