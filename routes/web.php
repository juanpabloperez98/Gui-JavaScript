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
    return view('welcome', [
        'page' => 'welcome'
    ]);
})->name('welcome');


// Estructuras de secuencia
Route::prefix('estructuras-secuencia/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.secuencia.index', [
            'page' => 'secuencia'
        ]);
    })->name('secuencia');

    // Tipos de datos
    Route::get('tipos-datos/', function () {
        return view('teoria.secuencia.tiposdatos.index', [
            'page' => 'tipodatos'
        ]);
    })->name('tipodatos');

    Route::get('tipos-datos/ejemplo1', function () {
        return view('teoria.secuencia.tiposdatos.ejemplos.ejemplo1', [
            'page' => 'tipodatos-ejemplos'
        ]);
    })->name('tipodatos-ejemplo1');

    Route::get('tipos-datos/ejemplo2', function () {
        return view('teoria.secuencia.tiposdatos.ejemplos.ejemplo2', [
            'page' => 'tipodatos-ejemplos'
        ]);
    })->name('tipodatos-ejemplo2');

    // Operadores
    Route::get('operadores/', function () {
        return view('teoria.secuencia.operadores.index', [
            'page' => 'operadores'
        ]);
    })->name('operadores');


    //Ir a la practica / Ir a ejemplos
    Route::get('operadores/ejemplos', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplos_index', [
            'page' => 'operadores-ejemplos-index'
        ]);
    })->name('operadores-ejemplo-index');

    Route::get('operadores/practica', function () {
        return view('teoria.secuencia.operadores.ejercicios.ejercicios_index', [
            'page' => 'operadores-ejemplos-index'
        ]);
    })->name('operadores-ejercicios-index');


    // Ir a los ejemplos
    Route::get('operadores/ejemplo1', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo1', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo1');

    Route::get('operadores/ejemplo2', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo2', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo2');

    Route::get('operadores/ejemplo3', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo3', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo3');

    Route::get('operadores/ejemplo4', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo4', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo4');

    Route::get('operadores/ejemplo5', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo5', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo5');

    Route::get('operadores/ejemplo6', function () {
        return view('teoria.secuencia.operadores.ejemplos.ejemplo6', [
            'page' => 'operadores-ejemplos'
        ]);
    })->name('operadores-ejemplo6');

    Route::get('operadores/ejercicio1', function () {
        return view('teoria.secuencia.operadores.ejercicios.ejercicio1', [
            'page' => 'operadores-ejercicios'
        ]);
    })->name('operadores-ejercicio1');

    Route::get('operadores/ejercicio2', function () {
        return view('teoria.secuencia.operadores.ejercicios.ejercicio2', [
            'page' => 'operadores-ejercicios'
        ]);
    })->name('operadores-ejercicio2');

    Route::get('operadores/ejercicio3', function () {
        return view('teoria.secuencia.operadores.ejercicios.ejercicio3', [
            'page' => 'operadores-ejercicios'
        ]);
    })->name('operadores-ejercicio3');
});
// Estructuras de condición
Route::prefix('estructuras-condicion/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.condicion.index', [
            'page' => 'condicion'
        ]);
    })->name('condicion');

    Route::get('simplesydobles/', function () {
        return view('teoria.condicion.simplesydobles.index', [
            'page' => 'simplesydobles'
        ]);
    })->name('simplesydobles');

    Route::get('simplesydobles/ejemplos', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplos_index', [
            'page' => 'simplesydobles-ejemplos-index'
        ]);
    })->name('simplesydobles-ejemplo-index');

    // Ir a los ejemplos
    Route::get('simplesydobles/ejemplo1', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo1', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo1');

    Route::get('simplesydobles/ejemplo2', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo2', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo2');

    Route::get('simplesydobles/ejemplo3', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo3', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo3');

    Route::get('simplesydobles/ejemplo4', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo4', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo4');

    Route::get('simplesydobles/ejemplo5', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo5', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo5');

    Route::get('simplesydobles/ejemplo6', function () {
        return view('teoria.condicion.simplesydobles.ejemplos.ejemplo6', [
            'page' => 'simplesydobles-ejemplos'
        ]);
    })->name('simplesydobles-ejemplo6');

    Route::get('simplesydobles/practica', function () {
        return view('teoria.condicion.simplesydobles.ejercicios.ejercicios_index', [
            'page' => 'simplesydobles-ejemplos-index'
        ]);
    })->name('simplesydobles-ejercicios-index');

    Route::get('simplesydobles/ejercicio1', function () {
        return view('teoria.condicion.simplesydobles.ejercicios.ejercicio1', [
            'page' => 'simplesydobles-ejercicios'
        ]);
    })->name('simplesydobles-ejercicio1');

    Route::get('simplesydobles/ejercicio2', function () {
        return view('teoria.condicion.simplesydobles.ejercicios.ejercicio2', [
            'page' => 'simplesydobles-ejercicios'
        ]);
    })->name('simplesydobles-ejercicio2');

    Route::get('simplesydobles/ejercicio3', function () {
        return view('teoria.condicion.simplesydobles.ejercicios.ejercicio3', [
            'page' => 'simplesydobles-ejercicios'
        ]);
    })->name('simplesydobles-ejercicio3');

    Route::get('multiples/', function () {
        return view('teoria.condicion.multiples.index', [
            'page' => 'multiples'
        ]);
    })->name('multiples');

    Route::get('multiples/ejemplos', function () {
        return view('teoria.condicion.multiples.ejemplos.ejemplos_index', [
            'page' => 'multiples-ejemplos-index'
        ]);
    })->name('multiples-ejemplo-index');

    Route::get('multiples/ejemplo1', function () {
        return view('teoria.condicion.multiples.ejemplos.ejemplo1', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo1');

    Route::get('multiples/ejemplo2', function () { 
        return view('teoria.condicion.multiples.ejemplos.ejemplo2', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo2');

    Route::get('multiples/ejemplo3', function () { 
        return view('teoria.condicion.multiples.ejemplos.ejemplo3', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo3');

    Route::get('multiples/ejemplo4', function () { 
        return view('teoria.condicion.multiples.ejemplos.ejemplo4', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo4');

    Route::get('multiples/ejemplo5', function () { 
        return view('teoria.condicion.multiples.ejemplos.ejemplo5', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo5');

    Route::get('multiples/ejemplo6', function () { 
        return view('teoria.condicion.multiples.ejemplos.ejemplo6', [
            'page' => 'multiples-ejemplos'
        ]);
    })->name('multiples-ejemplo6');

    Route::get('multiples/practica', function () {
        return view('teoria.condicion.multiples.ejercicios.ejercicios_index', [
            'page' => 'multiples-ejemplos-index'
        ]);
    })->name('multiples-ejercicios-index');

    Route::get('multiples/ejercicio1', function () {
        return view('teoria.condicion.multiples.ejercicios.ejercicio1', [
            'page' => 'multiples-ejercicios'
        ]);
    })->name('multiples-ejercicio1');

    Route::get('multiples/ejercicio2', function () {
        return view('teoria.condicion.multiples.ejercicios.ejercicio2', [
            'page' => 'multiples-ejercicios'
        ]);
    })->name('multiples-ejercicio2');

});
// Estructuras de repetición
Route::prefix('estructuras-repeticion/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.repeticion.index', [
            'page' => 'repeticion'
        ]);
    })->name('repeticion');

    // For
    Route::get('for/', function () {
        return view('teoria.repeticion.for.index', [
            'page' => 'for'
        ]);
    })->name('forindex');

    Route::get('for/ejemplos', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplos_index', [
            'page' => 'for-ejemplos-index'
        ]);
    })->name('for-ejemplo-index');

    Route::get('for/ejemplo1', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo1', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo1');

    Route::get('for/ejemplo2', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo2', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo2');

    Route::get('for/ejemplo3', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo3', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo3');

    Route::get('for/ejemplo4', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo4', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo4');

    Route::get('for/ejemplo5', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo5', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo5');

    Route::get('for/ejemplo6', function () {
        return view('teoria.repeticion.for.ejemplos.ejemplo6', [
            'page' => 'for-ejemplos'
        ]);
    })->name('for-ejemplo6');

    // While
    Route::get('while/', function () {
        return view('teoria.repeticion.while.index', [
            'page' => 'while'
        ]);
    })->name('whileindex');

    Route::get('while/ejemplos', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplos_index', [
            'page' => 'while-ejemplos-index'
        ]);
    })->name('while-ejemplo-index');

    Route::get('while/ejemplo1', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo1', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo1');

    Route::get('while/ejemplo2', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo2', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo2');

    Route::get('while/ejemplo3', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo3', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo3');

    Route::get('while/ejemplo4', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo4', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo4');

    Route::get('while/ejemplo5', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo5', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo5');

    Route::get('while/ejemplo6', function () {
        return view('teoria.repeticion.while.ejemplos.ejemplo6', [
            'page' => 'while-ejemplos'
        ]);
    })->name('while-ejemplo6');
    
    Route::get('dowhile/', function () {
        return view('teoria.repeticion.dowhile.index', [
            'page' => 'dowhile'
        ]);
    })->name('dowhileindex');

    Route::get('dowhile/ejemplos', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplos_index', [
            'page' => 'dowhile-ejemplos-index'
        ]);
    })->name('dowhile-ejemplo-index');

    Route::get('dowhile/ejemplo1', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo1', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo1');

    Route::get('dowhile/ejemplo2', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo2', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo2');

    Route::get('dowhile/ejemplo3', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo3', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo3');

    Route::get('dowhile/ejemplo4', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo4', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo4');

    Route::get('dowhile/ejemplo5', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo5', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo5');

    Route::get('dowhile/ejemplo6', function () {
        return view('teoria.repeticion.dowhile.ejemplos.ejemplo6', [
            'page' => 'dowhile-ejemplos'
        ]);
    })->name('dowhile-ejemplo6');
});
// Estructuras de Datos
Route::prefix('estructuras-datos/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.datos.index', [
            'page' => 'datos'
        ]);
    })->name('datos');

    // Listas
    Route::get('listas/', function () {
        return view('teoria.datos.lista.index', [
            'page' => 'lista'
        ]);
    })->name('lista');

    Route::get('listas/ejemplos', function () {
        return view('teoria.datos.lista.ejemplos.ejemplos_index', [
            'page' => 'lista-ejemplos-index'
        ]);
    })->name('lista-ejemplo-index');

    Route::get('listas/ejemplo1', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo1', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo1');

    Route::get('listas/ejemplo2', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo2', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo2');

    Route::get('listas/ejemplo3', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo3', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo3');

    Route::get('listas/ejemplo4', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo4', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo4');

    Route::get('listas/ejemplo5', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo5', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo5');

    Route::get('listas/ejemplo6', function () {
        return view('teoria.datos.lista.ejemplos.ejemplo6', [
            'page' => 'lista-ejemplos'
        ]);
    })->name('lista-ejemplo6');

    Route::get('matrices/', function () {
        return view('teoria.datos.matrices.index', [
            'page' => 'matrices'
        ]);
    })->name('matrices');

    Route::get('matrices/ejemplos', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplos_index', [
            'page' => 'matrices-ejemplos-index'
        ]);
    })->name('matrices-ejemplo-index');

    Route::get('matrices/ejemplo1', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo1', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo1');

    Route::get('matrices/ejemplo2', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo2', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo2');

    Route::get('matrices/ejemplo3', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo3', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo3');

    Route::get('matrices/ejemplo4', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo4', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo4');

    Route::get('matrices/ejemplo5', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo5', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo5');

    Route::get('matrices/ejemplo6', function () {
        return view('teoria.datos.matrices.ejemplos.ejemplo6', [
            'page' => 'matrices-ejemplos'
        ]);
    })->name('matrices-ejemplo6');

    Route::get('objetos/', function () {
        return view('teoria.datos.objetos.index', [
            'page' => 'objetos'
        ]);
    })->name('objetos');
});
// Funciones
Route::prefix('funciones/')->group(function () {
    Route::get('index/', function () {
        return view('teoria.funciones.index', [
            'page' => 'funciones'
        ]);
    })->name('funciones');

    // funciones
    Route::get('functions/', function () {
        return view('teoria.funciones.funciones.index', [
            'page' => 'functions'
        ]);
    })->name('functions');
});