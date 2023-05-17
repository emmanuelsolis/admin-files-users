<?php namespace App\Models;

use CodeIgniter\Model;

    class ProductModel extends Model{
        protected $table = 't_producto';
        protected $primaryKey = 'id_producto';
        protected $allowedFields = ['prod_name', 'prod_description', 'prod_image', 'fk_id_category'];
        protected $returnType = 'array';
    }
?>