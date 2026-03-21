<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{

    // Definimos las propiedades de la clase ClienteModel
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $returnType = 'array';
    protected $allowedFields = ["apellidos", "nombres", "dni", "telefono"];


}