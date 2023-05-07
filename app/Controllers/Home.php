<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios;
use App\Models\UserModel;

class Home extends Controller
{
    public function construct(){
        helper('url');
    }
    public function index(){
        $mensaje = session('mensaje');
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('auth/login', ['mensaje'=>$mensaje, 'header'=>$data['header'], 'footer'=>$data['footer']]);
    }
    public function inicio()
    {
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer'); 
        return view('inicio', $data);
    }
    public function login()
    {
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer'); 
       
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
    
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (!empty($datosUsuario) && count($datosUsuario) > 0 && 
			password_verify($_POST['password'], $datosUsuario[0]['password'])) {

			$data = [
						'usuario' => $datosUsuario[0]['usuario'],
						'rol' => $datosUsuario[0]['rol']
					];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/inicio'))->with('mensaje','1');

		} else {
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}
	}
    public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}