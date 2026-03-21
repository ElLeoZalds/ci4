<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{

    // Definimos las propiedades de la clase ProductoModel
    protected $table = "productos";
    protected $primaryKey = "id";
    protected $returnType = 'array';
    protected $allowedFields = ["tipo", "descripcion", "precio", "stock"];
}
