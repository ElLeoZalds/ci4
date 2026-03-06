<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "apellidos" => "Contreras Pachas",
                "nombres" => "Carolina",
                "dni" => "44556677",
                "telefono" => "956124536"
            ],
            [
                "apellidos" => "Peñaloza Mejía",
                "nombres" => "Gabriela",
                "dni" => "77441100",
                "telefono" => "923254784"
            ],
            [
                "apellidos" => "Salvatierra Mendoza",
                "nombres" => "Esther",
                "dni" => "74757876",
                "telefono" => "963852741"
            ]
        ]; //Fin $data

        $this->db->table("clientes")->insertBatch($data);
    }
}
