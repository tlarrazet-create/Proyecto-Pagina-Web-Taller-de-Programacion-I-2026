<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    // Este es el método que la guía te pide crear
    public function procesar(Request $request) 
    { 
        // Capturamos los datos que viajan en el $request
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $mensaje = $request->input('mensaje'); // Nota: se agregaron las comillas a 'mensaje'

        // Retornamos la vista de éxito pasando un arreglo con los datos
        return view('exito', [ 
            'nombre' => $nombre, 
            'email' => $email 
    ]); 
    }
}