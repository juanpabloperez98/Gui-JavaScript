@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/baseteoria.css') }}">
@endsection

@section('header')
    @include('layouts.header_main')
@endsection

@section('content')

<main id="main-secuencia">
    <div class="row mx-auto">
        <div class="col-lg-6 bottom-50" id="section-explain">
            <h3 class="text-center">Estructuras de secuencia</h3>
            <p>
                Las estructuras de secuencias en programación, son aquellas estructuras o algoritmos los cuales son
                secuenciales, es decir que el resultado de una acción depende totalmente de la anterior, en este módulo
                se encontrara todo lo relacionada con declaración de variables, tipos de datos, y operadores tanto
                aritméticos como lógicos.
            </p>
        </div>
        <div class="col-lg-6 bottom-50" id="section-image">
            <div class="img-section">
                <img src="{{ asset('imagenes/estructuras_secuencia/main2.png') }}" alt="imagen">
            </div>
        </div>
    </div>
</main>

<section class="secciones">
    <div class="row mx-auto" style="max-width: 1111px">
        <div class="col-lg-12 bottom-50">
            <h3 id="title-themes">Temas</h3>
            <p>
                En este módulo se presentarán dos temas a tratar, los tipos de datos y lo operadores, en los tipos de
                datos se explicará sobre cuáles son los tipos de datos que existen y se manejan en JavaScript, también
                como declarar una variable, y las palabras reservadas o funciones que tiene JavaScript para imprimir un
                dato o pedir un dato por pantalla. El tema de operadores, busca enseñar que tipos de operadores maneja
                JavaScript (Lógicos, Matemáticos) y mostrar ejemplos de cómo aplicarlos.
            </p>
        </div>
        <div class="col-lg-12">
            <div class="row mx-auto" class="themes">
                <div class="col-lg-4 mx-auto tarjeta">
                    <h3>Tipos de datos</h3>
                    <div class="imagen">
                        <img src="{{ asset('imagenes/estructuras_secuencia/TiposDatos.png') }}" alt="secuencia-img">
                    </div>
                    
                    <div class="boton">
                        <a href="{{ route('tipodatos') }}" class="btn">Vamos aprender</a>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto mt-5 mt-md-5 mt-lg-0 tarjeta">
                    <h3>Operadores</h3>
                    <div class="imagen">
                        <img src="{{ asset('imagenes/estructuras_secuencia/Operadores.png') }}" alt="secuencia-img">
                    </div>
                    
                    <div class="boton">
                        <a href="{{ route('operadores') }}" class="btn">Vamos aprender</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection


{{-- <main id="main-secuencia">
    <div class="row mx-auto">
        <div class="col-lg-6 bottom-50">
            <h3>Estructuras de secuencia</h3>
            <p>
                Las estructuras de secuencias en programación, son aquellas estructuras o algoritmos los cuales son
                secuenciales, es decir que el resultado de una acción depende totalmente de la anterior, en este módulo
                se encontrara todo lo relacionada con declaración de variables, tipos de datos, y operadores tanto
                aritméticos como lógicos.
            </p>
        </div>
        <div class="col-lg-6 bottom-50" id="section-image">
            <div class="img-section">
                <img src="{{ asset('imagenes/estructuras_secuencia/main2.png') }}" alt="imagen">
            </div>
        </div>
    </div>
</main>

<section class="secciones">
    <div class="row mx-auto" style="max-width: 1111px">
        <div class="col-lg-12 bottom-50">
            <h3 id="title-themes">Temas</h3>
            <p>
                En este módulo se presentarán dos temas a tratar, los tipos de datos y lo operadores, en los tipos de
                datos se explicará sobre cuáles son los tipos de datos que existen y se manejan en JavaScript, también
                como declarar una variable, y las palabras reservadas o funciones que tiene JavaScript para imprimir un
                dato o pedir un dato por pantalla. El tema de operadores, busca enseñar que tipos de operadores maneja
                JavaScript (Lógicos, Matemáticos) y mostrar ejemplos de cómo aplicarlos.
            </p>
        </div>
        <div class="col-lg-12">
            <div class="row mx-auto" class="themes">
                <div class="col-lg-4 mx-auto tarjeta">
                    <h3>Tipos de datos</h3>
                    <div class="imagen">
                        <img src="{{ asset('imagenes/estructuras_secuencia/TiposDatos.png') }}" alt="secuencia-img">
                    </div>
                    
                    <div class="boton">
                        <a href="{{ route('tipodatos') }}" class="btn">Vamos aprender</a>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto tarjeta">
                    <h3>Operadores</h3>
                    <div class="imagen">
                        <img src="{{ asset('imagenes/estructuras_secuencia/Operadores.png') }}" alt="secuencia-img">
                    </div>
                    
                    <div class="boton">
                        <a href="{{ route('operadores') }}" class="btn">Vamos aprender</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}