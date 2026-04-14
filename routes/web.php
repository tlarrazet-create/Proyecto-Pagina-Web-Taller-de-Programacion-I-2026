<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/terminos-y-uso', function () {
    return view('terminos-y-uso');
});

Route::get('/catalogos', function () {
    return view('catalogos');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::post('/consultas', [ConsultaController::class, 'procesar']);

Route::get('/exito', function () {
    return view('exito');
});