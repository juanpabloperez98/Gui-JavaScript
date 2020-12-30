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
                <h3 class="text-center">Estructuras de condición</h3>
                <p>
                    Las estructuras condicionales como su nombre lo indican, son estructuras que sirven para la comparación
                    de dos variables, constantes u objetos. Una estructura condicional compara un valor con otro, para que,
                    en base al resultado de esa comparación, se siga un curso de acción dentro de un programa. Existen 3
                    tipos de estructuras condicionales que se verán en este software, las simples, las dobles, y las
                    múltiples.
                </p>
            </div>
            <div class="col-lg-6 bottom-50" id="section-image">
                <div class="img-section">
                    <img src="{{ asset('imagenes/estructuras_condicion/main.png') }}" class="ml-lg-3 ml-md-0" alt="imagen">
                </div>
            </div>
        </div>
    </main>

    <section class="secciones">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-12 bottom-50">
                <h3 id="title-themes">Temas</h3>
                <p>
                    A continuación, se mostrarán tres temas a tratar, estructuras de comparación simples, dobles, y múltiples. En cada tema se busca explicar como es su sentencia, y como usar cada uno de ellas.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto" class="themes">
                    <div class="col-lg-4 mx-auto tarjeta">
                        <h3>Estructuras simples y dobles (if-else)</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_condicion/simples.png') }}" alt="secuencia-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('simplesydobles') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0 mx-auto tarjeta">
                        <h3>Estructuras múltiples (switch)</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_condicion/multiples.png') }}" alt="secuencia-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('multiples') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
