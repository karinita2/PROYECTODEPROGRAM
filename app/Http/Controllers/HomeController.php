<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Crear una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Mostrar el panel de la aplicación.
     *
     * @return \Illuminate\Http\Response
     */

    /*
     * La funcion index muestra la pantalla inicial
     * al iniciar sesion en el sistema.
     * */
    public function index()
    {

        return view('home');
    }

}
