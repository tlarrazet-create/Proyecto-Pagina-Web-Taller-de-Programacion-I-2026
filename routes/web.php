<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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