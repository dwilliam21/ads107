<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function exibir(): string
    {
        return view('exibir');
    }

    public function pagina(): string
    {
        return view('pagina');
    }
    public function dwilliam(): string
    {
        return view('dwilliam');
    }
}
?>