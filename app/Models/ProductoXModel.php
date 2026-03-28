<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductoXModel extends Model
{
    protected $table = "productos";
    protected $primaryKey = "id";
    protected $returnType = 'array';
    protected $allowedFields = ["tipo", "descripcion", "precio", "stock"];
}