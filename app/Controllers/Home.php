<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view(name: 'senati');
    }

    /**
     * El dashboard requiere de 2 partes esenciales: HEADER Y FOOTER
     * @return string
     */
    public function dashboard(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('dashboard', $data );
    }
}
