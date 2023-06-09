<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Productos extends Controller
{
    public function index()
    {
        $producto = new ProductModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        $data['productos'] = $producto->orderBy('id_producto', 'ASC')->findAll();

        return view('/productos/panel-listar', $data);
    }
    public function crear()
    {
        $producto = new ProductModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        return view('/productos/crear-producto', $data);
    }
    public function guardar()
    {
        // $name = $this->request->getVar('prod_name');
        // print_r($name);
        $producto = new ProductModel();
        if ($imagen = $this->request->getFile('prod_image')) {
            $newName = $imagen->getRandomName();
            $imagen->move('../public/uploads', $newName);
            $datos = [
                'prod_name' => $this->request->getVar('prod_name'),
                'prod_description' => $this->request->getVar('prod_description'),
                'prod_image' => $newName,
                'fk_id_category' => $this->request->getVar('fk_id_category')
            ];

            $producto->insert($datos);
        }
        echo "Producto ingresado correctamente a la base de datos";
        return $this->response->redirect(site_url('lista-productos'));
    }
    public function borrar($id = null)
    {

        echo "Borrar registro con id: " . $id;
        echo "<br>";
        $producto = new ProductModel();
        $datosProducto = $producto->where('id_producto', $id)->first();
        if ($datosProducto) {
            $ruta = '../public/uploads/' . $datosProducto['prod_image'];
            d($ruta);
            if (file_exists($ruta)) {
                unlink($ruta);
                $producto->where('id_producto', $id)->delete($id);
                return $this->response->redirect(site_url('/lista-productos'));
                echo "Archivo eliminado correctamente";
            } else {
                // $producto->where('id_producto', $id)->delete($id);
                return $this->response->redirect(site_url('/lista-productos'));
                echo "No se pudo eliminar el archivo";
                echo "No se encontro el archivo";
            }
        } else {
            echo "No se encontro el producto";
        }
    }
    public function editar($id = null)
    {
        $producto = new ProductModel();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');
        $data['producto'] = $producto->where('id_producto', $id)->first();
        return view('/productos/editar-producto', $data);
    }
    public function actualizar($id)
    {
        $producto = new ProductModel();
        $prod_item= $producto->find($id);
        // echo $prod_item['prod_image'];
        $file = $this->request->getFile('prod_image');

        if($file->isValid() && !$file->hasMoved()) 
        {
            $old_img_name = $prod_item['prod_image'];
            $route = "uploads/".$old_img_name;
            if(file_exists($route)){
                unlink($route);
            }
            $newName = $file->getRandomName();
            $file->move('../public/uploads', $newName);
        }

        $datos = [
            'prod_name' => $this->request->getVar('prod_name'),
            'prod_description' => $this->request->getVar('prod_description'),
            'prod_image' => $newName,
            'fk_id_category' => $this->request->getVar('fk_id_category')
        ];

        $producto->update($id, $datos);
        return $this->response->redirect(site_url('lista-productos'));
    
    }

}
