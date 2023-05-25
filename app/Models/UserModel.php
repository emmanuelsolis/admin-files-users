<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table      = 't_usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';

    protected $allowedFields = ['usuario', 'email', 'password', 'rol'];
}