<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1)
    {
        $title = "listado de mis peliculas";
        return view('pelicula.index', [
            'title' => $title,
            'page' => $pagina
        ]);
    }

    public function detalle()
    {
        return view('pelicula.detalle');
    }

    public function redirigir()
    {
        return redirect()->action('PeliculaController@detalle');
    }

    public function formulario()
    {
        return view('pelicula.formulario');
    }

    public function  recibir(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        echo "El nombre es: ".$name. " y el correo es: ".$email;
//        var_dump($name);
//        die();
    }
}
