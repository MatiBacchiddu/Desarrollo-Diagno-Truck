<?php

namespace App\Http\Controllers;

use App\Consulta;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    //
    public function __construct()
    {
        $this->middleware('auth'); // proteger autenticacion
    }


    //
    public function index()
    {
        //
        return view('admin.index');
    }

    public function consultas()
    {
        $consultas = Consulta::all();

        return view('consultasAdmin.index')->with('consultas', $consultas);
    }

    public function servicios()
    {
        return view('serviciosAdmin.index');
    }

    public function store(Request $request)

    {


    }
}
