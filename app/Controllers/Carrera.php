<?php

namespace App\Controllers;

class Carrera extends BaseController
{

    /**
     * Retorna la vista de la Web de Ingeniería de Software
     */
    public function showIngenieria(): string
    {
        //Los métodos de los controladores pueden realizar operaciones completas
        //Una de estas tareas es enviar datos al frontend (Views)
        $lista = array("Javascript", "Python", "Java", "PHP", "SQL");
        return view('ingenieria', ["desarrollador" => "Palacios Gonzales Leonardo Alexander", "lenguajes" => $lista]);
    }

    /**
     * Retorna la vista de la Web de Diseño Gráfico Digital
     */
    public function showDesign(): string
    {
        $aplicaciones = array("Photoshop", "Premier", "Corel Draw", "Figma", "SoundBox");
        return view('design', ["aplicaciones" => $aplicaciones]);
    }
}
