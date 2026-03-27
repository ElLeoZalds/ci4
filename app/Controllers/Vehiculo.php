<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VehiculoModel;

class Vehiculo extends BaseController
{
    // Retorna la vista para administrar vehículos
    public function index()
    {
        // Los datos se pueden enviar a la vista utilizando un ARREGLO
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];

        return view("Modulos/vehiculos/index", $data);
    }

    // El controlador "SERVIRÁ" resultados asincrónicos, por lo tanto se requiere:
    // 1. El código del servidor https://developer.mozilla.org/es/docs/Web/HTTP/Reference/Status
    // 2. Resultado en formato JSON
    public function getVehiculos()
    {
        // Se require del modelo
        $vehiculo = new VehiculoModel();
        return $this->response->setJSON($vehiculo->obtenerVehiculos());
    }

    public function registrarVehiculo()
    {
        $vehiculo = new VehiculoModel();

        // Todos los campos requeridos, deberán ser enviados en un JSON
        // REQUEST = SOLICITUD
        // RESPONSE = RESPUESTA
        $data = $this->request->getJSON();
        // return $this->response->setJSON($data); // Depuración

        if ($vehiculo->insert($data)) {
            return $this->response->setJSON([
                "success" => true,
                "message" => "Registrado correctamente"
            ]);
        }

        return $this->response->setJSON([
            "success" => false,
            "message" => "Error al registrar"
        ]);
    }
}
