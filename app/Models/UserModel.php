<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'password'];
}