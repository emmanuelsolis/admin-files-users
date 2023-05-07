<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class UserController extends Controller{

  

    public function index(){
        $usuario = new UserModel();
        $data['usuarios'] = $usuario->orderBy('id', 'ASC')->findAll();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        
        return view('usuario/listar', $data);
    }
    public function crear(){
        $usuario = new UserModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('usuario/create', $data);
    }
    public function guardar(){
        $usuario = new UserModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];
        $usuario->insert($data);
        return $this->response->redirect(site_url('/listar'));
    }
    public function borrar($id = null){
        $usuario = new UserModel();
        $data['usuario'] = $usuario->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
    }
    public function edit($id=null){
        $usuario = new UserModel();
        $data['usuario'] = $usuario->where('id', $id)->first();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('usuario/edit', $data);
    }
    public function actualizar($id=null){
        $usuario = new UserModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];
        $id = $this->request->getvar('id');
        // echo "ID";
        $usuario->where('id', $id)->update($id, $data);
        return redirect()->to(site_url('listar'));
    }

}