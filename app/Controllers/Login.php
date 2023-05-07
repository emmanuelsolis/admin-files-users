<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios;

class Login extends Controller
{
    public function index(){
        // $mensaje = session('mensaje');
        // $data['header'] = view('layout/header');
        // $data['footer'] = view('layout/footer');
        // return view('auth/login', ['mensaje'=>$mensaje, 'header'=>$data['header'], 'footer'=>$data['footer']]);
        return view('/entrar.php');
    }
}