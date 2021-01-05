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
                <h3 class="text-center">Estructuras de repetición</h3>
                <p>
                    Las estructuras de repetición, también conocidas como estructuras cíclicas, iterativas, o bucles. Son
                    estructuras que permiten ejecutar un conjunto de instrucciones de manera repetida (o cíclica) mientras
                    que se cumpla una expresión lógica evaluada. Estas estructuras pueden estar definidas por una expresión
                    lógica que determina una condición de parada, como también puede no tener ninguna condición de parada,
                    estas ultimas son conocidas como estructuras de repetición infinitas, o bucles infinitos.
                </p>
            </div>
            <div class="col-lg-6 bottom-50" id="section-image">
                <div class="img-section">
                    <img src="{{ asset('imagenes/estructuras_repetitivas/repetitivas.png') }}" class="ml-lg-3 ml-md-0"
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
                    Las estructuras de repetición se encuentran divididas en 3 grupos básicos, estos son los ciclos for, los
                    ciclos while, y los ciclos do-while. A continuación, se muestran los temas mencionados con sus
                    respectivos ejemplos y ejercicios.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto" class="themes">
                    <div class="col-lg-4 mx-auto tarjeta">
                        <h3>Ciclo For</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_repetitivas/for.png') }}" alt="for-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('forindex') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0 mx-auto tarjeta">
                        <h3>Ciclo While</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_repetitivas/while.png') }}" alt="secuencia-img">
                        </div>

                        <div class="boton">
                            <a href="{{ route('whileindex') }}" class="btn">Vamos aprender</a>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-5 mt-lg-5 mx-auto tarjeta">
                        <h3>Ciclo do while</h3>
                        <div class="imagen">
                            <img src="{{ asset('imagenes/estructuras_repetitivas/dowhile.png') }}" alt="secuencia-img">
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
