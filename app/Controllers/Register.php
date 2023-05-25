<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
// use App\Entities\User;
use App\Models\UserModel;

class Register extends Controller
{
    public function construct(){
        helper('url');
    }
    public function index(){
        $user = new UserModel();
        $mensaje = session('mensaje');
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('auth/register', ['mensaje'=>$mensaje, 'header'=>$data['header'], 'footer'=>$data['footer']]);
    }
    public function guardar()
    {
        $usuario = new UserModel();
        $data = [
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'rol' => 'cliente'
        ];
        
        $usuario->insert($data);
        return $this->response->redirect(site_url('lista-productos'));
    }

}