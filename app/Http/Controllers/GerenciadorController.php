<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenciadorController extends Controller
{
    public function gerenciador()
    {
        return view ('index');
    }
}
