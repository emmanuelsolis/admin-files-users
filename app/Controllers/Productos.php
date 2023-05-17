<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Productos extends Controller 
{
    public function index(){
        $producto = new ProductModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        $data['productos'] = $producto->orderBy('id_producto', 'ASC')->findAll();

        return view('/productos/panel-listar', $data);
    }
    public function crear(){
        $producto = new ProductModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('/productos/crear-producto', $data);
    }
    public function guardar(){
        
        $name = $this->request->getVar('prod_name');
        print_r($name);
        // $producto = new ProductModel();
      
        // $data = [
        //     'prod_name' => $this->request->getVar('prod_name'),
        //     'prod_description' => $this->request->getVar('prod_description'),
        //     'prod_image' => $this->request->getVar('prod_image'),
        //     'fk_id_category' => $this->request->getVar('fk_id_category'),
        // ];
        // $producto->insert($data);
        // print_r($producto);

        // return $this->response->redirect(site_url('/productos/panel-listar'));

    }
}