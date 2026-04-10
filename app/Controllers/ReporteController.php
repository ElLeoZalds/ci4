<?php

namespace App\Controllers; // ¿Dónde estará este controlador?

use App\Controllers\BaseController; // Super clase controlador
use App\Models\VehiculoModel; // Modelo del vehículo (getVehiculos())
use PhpParser\Node\Stmt\TryCatch;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use Spipu\Html2Pdf\Html2Pdf; // Generar el PDF
use Spipu\Html2Pdf\Exception\Html2PdfException; // Manejar excepciones del PDF

class ReporteController extends BaseController
{

    // Método para generar un reporte de todos los vehículos
    public function generarReporteVehiculo()
    {
        // 1. Obteniendo los datos
        $vehiculo = new VehiculoModel();
        $listaVehiculos = $vehiculo->obtenerVehiculos();

        // 2. Enviar los datos a la plantilla (contenedor) Views/Reports/vehiculos-todos.php
        $html = view('Reports/vehiculos-todos', ['vehiculos' => $listaVehiculos]);

        // 3. Generar el PDF
        try {
            // 4. Objeto HTML2PDF = P = PORTRAIT, L = LANDSCAPE
            $html2pdf = new Html2Pdf('P', 'A4', 'es');

            // 5. Estableciendo fuente predeterminada (opcional)
            $html2pdf->setDefaultFont('Arial');

            // 6. Sincronizar los datos
            $html2pdf->writeHTML($html);

            // 7. Mostrar el PDF
            // I = Vista previa, D = Descargar, F = Guardar servidor, S = Retornar como cadena
            $html2pdf->output('Reporte.pdf', 'I');

            // Forma 1 = Especificar "cabeceras de binario"
            $this->response->setHeader('Content-Type', 'application/pdf');

            // Forma 2
            // exit();
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            throw new \RuntimeException($e->getMessage());
        }
    }
}
