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
                <h3 class="text-center">Manejo del DOM</h3>
                <p>
                    El DOM es una interfaz que representa cada uno de los elementos que conforman una pagina web. Cada
                    elemento es considerado una etiqueta HTML que representa una sección, titulo, párrafo, entre otros, los
                    cuales en conjunto forman el DOM o interfaz de la página. JavaScript es un lenguaje enfocado propiamente
                    al desarrollo de aplicaciones web y principalmente al manejo visual de una pagina web, por lo que con
                    este lenguaje se pueden crear, eliminar, o cambiar elementos de la página, así como también cambiar
                    propiedades y agregar estilos según se requiera.
                </p>
            </div>
            <div class="col-lg-6 bottom-50" id="section-image">
                <div class="img-section">
                    <img src="{{ asset('imagenes/dom/dom.png') }}" class="ml-lg-3 ml-md-0" alt="imagen">
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
                        {{-- <h3>Html</h3> --}}
                        <div class="imagen">
                            <img src="{{ asset('imagenes/dom/htmllogo.png') }}" alt="for-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('html') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto tarjeta">
                        {{-- <h3>CSS</h3> --}}
                        <div class="imagen">
                            <img src="{{ asset('imagenes/dom/csslogo.png') }}" alt="for-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('functions') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-md-3 mx-auto tarjeta">
                        {{-- <h3>JavaScript</h3> --}}
                        <div class="imagen">
                            <img src="{{ asset('imagenes/dom/jslogo.png') }}" alt="for-img">
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
