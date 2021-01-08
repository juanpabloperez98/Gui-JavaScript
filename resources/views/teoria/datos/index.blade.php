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
                <h3 class="text-center">Estructuras de datos</h3>
                <p>
                    Las estructuras de datos son una forma organizada de almacenar la información que se va a utilizar a la
                    hora de realizar un programa o software, no son mas que un medio para manejar grandes cantidades de
                    información de una manera rápida y fácil. A través que se ha ido avanzando en este software se ha
                    presenciado lo que son las variables y su función de almacenar en ellas datos, así mismo las estructuras
                    de datos permiten organizar dichas variables (o datos) en un orden defino por conceptos que se
                    presentaran a continuación.
                </p>
            </div>
            <div class="col-lg-6 bottom-50" id="section-image">
                <div class="img-section mt-lg-2">
                    <img src="{{ asset('imagenes/estructuras_datos/estructura_datos.png') }}" class="ml-lg-3 ml-md-0"
                        alt="imagen">
                </div>
            </div>
        </div>
    </main>

    <section class="secciones">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-12 bottom-50">
                <h3 id="title-themes">Temas</h3>
                <p>
                    Al hablar de estructuras de datos, se esta hablando principalmente de tres elementos que son: Lista,
                    Matrices, y Objetos, cada uno de estos elementos son se mostraran a continuación con sus respectivos
                    ejemplos y ejercicios
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto" class="themes">
                    <div class="col-lg-4 mx-auto tarjeta">
                        <h3>Lista</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_datos/lista.png') }}" alt="for-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('lista') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0 mx-auto tarjeta">
                        <h3>Matrices</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_datos/matrices.png') }}" alt="secuencia-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('whileindex') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-5 mt-lg-5 mx-auto tarjeta">
                        <h3>Objetos</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_datos/objetos.png') }}" alt="secuencia-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('dowhileindex') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
