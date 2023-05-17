<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
// use App\Entities\User;
use App\Models\Usuarios;

class Register extends Controller
{
    public function construct(){
        helper('url');
    }
    public function index(){
        $user = new Usuarios();
        d($user);
        $mensaje = session('mensaje');
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('auth/register', ['mensaje'=>$mensaje, 'header'=>$data['header'], 'footer'=>$data['footer']]);
    }
}