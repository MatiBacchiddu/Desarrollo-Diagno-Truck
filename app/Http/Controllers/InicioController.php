<?php

namespace App\Http\Controllers;

use DateTime;
use App\Noticia;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index()
    {
        $noticias = Noticia::all();
        return view('inicio.index')->with('noticias', $noticias);
    }
}
