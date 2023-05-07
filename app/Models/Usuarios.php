<?php namespace App\Models;
    use CodeIgniter\Model;

    Class Usuarios extends Model{
        public function obtenerUsuario($data){
            $Usuario = $this->db->table('t_usuarios');
            $Usuario->where($data);
            return $Usuario->get()->getResultArray();
        }
    }