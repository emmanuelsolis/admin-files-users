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
        /* Validamos que las contraseñas sean iguales  */
        $password = $this->request->getVar('password');
        $confirmpassword = $this->request->getVar('confirmpassword');
        if ($password != $confirmpassword) {
            /* imprimimos un lerta de que las contraseñas no coinciden */
            $mensaje = "Las contraseñas no coinciden";
            $session = session();
            $session->setFlashdata('mensaje', $mensaje);

        }
        /* Validamos que el usuario no exista */
        $usuario = new UserModel();
        $existeUsuario = $usuario->where('usuario', $this->request->getVar('usuario'))->first();
        if ($existeUsuario != null) {
            return $this->response->redirect(site_url('/register'));
        }
        /* Validamos que el email no exista */  
        $existeEmail = $usuario->where('email', $this->request->getVar('email'))->first();
        if ($existeEmail != null) {
            return $this->response->redirect(site_url('/register'));
        }
        /* Guardamos el usuario */

        $data = [
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'rol' => 'cliente'
        ];
        
        $usuario->insert($data);
        /* creamos la sesion y la establecemos */
        $session = session();
        $session->set('usuario', $this->request->getVar('usuario'));
        $session->set('rol', 'cliente');

        return $this->response->redirect(site_url('lista-productos'));
    }

}