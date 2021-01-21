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
                <h3 class="text-center">Funciones</h3>
                <p>
                    A continuación, se mostrarán todo lo relacionado con las funciones en JavaScript, el concepto de
                    funciones es muy común en programación y no es raro, puesto que las funciones permiten la reutilización
                    de código y hacen que se disminuya significativamente el desarrollo de un programa en cuanto a líneas de
                    código
                </p>
            </div>
            <div class="col-lg-6 bottom-50" id="section-image">
                <div class="img-section mt-lg-2">
                    <img src="{{ asset('imagenes/funciones/funciones.png') }}" class="ml-lg-3 ml-md-0"
                        alt="imagen">
                </div>
            </div>
        </div>
    </main>

    <section class="secciones">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-12 bottom-50">
                <h3 id="title-themes">Temas</h3>
                {{-- <p>
                    Al hablar de estructuras de datos, se esta hablando principalmente de tres elementos que son: Lista,
                    Matrices, y Objetos, cada uno de estos elementos son se mostraran a continuación con sus respectivos
                    ejemplos y ejercicios
                </p> --}}
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto" class="themes">
                    <div class="col-lg-4 mx-auto tarjeta">
                        <h3>Funciones</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/funciones/funciones_.png') }}" alt="for-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('functions') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
