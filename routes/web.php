<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'page' => 'welcome'
    ]);
});


// Estructuras de secuencia
Route::prefix('estructuras-secuencia/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.secuencia.index',[
            'page' => 'secuencia'
        ]);
    })->name('secuencia');


    // Tipos de datos
    Route::get('tipos-datos/', function () {
        return view('teoria.secuencia.tiposdatos.index',[
            'page' => 'tipodatos'
        ]);
    })->name('tipodatos');

    Route::get('tipos-datos/ejemplo1', function () {
        return view('teoria.secuencia.tiposdatos.ejemplos.ejemplo1',[
            'page' => 'tipodatos-ejemplos'
        ]);
    })->name('tipodatos-ejemplo1');

    Route::get('tipos-datos/ejemplo2', function () {
        return view('teoria.secuencia.tiposdatos.ejemplos.ejemplo2',[
            'page' => 'tipodatos-ejemplos'
        ]);
    })->name('tipodatos-ejemplo2');

    // Operadores
    Route::get('operadores/', function () {
        return view('teoria.secuencia.operadores.index',[
            'page' => 'operadores'
        ]);
    })->name('operadores');

    Route::get('operadores/ejemplo1', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo1',[
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo1');

    Route::get('operadores/ejemplo2', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo2',[
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo2');

    Route::get('operadores/ejemplo3', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo3',[
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo3');
});