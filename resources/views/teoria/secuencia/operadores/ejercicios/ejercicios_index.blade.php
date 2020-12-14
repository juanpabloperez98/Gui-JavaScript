@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejemplos.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="ej-main">
        <div class="row mx-auto pt-5">
            <div class="col-lg-12 mt-4">
                <h3 class="text-md-center font-weight-bold my-md-4">Ejercicios Operadores</h3>
                <p class="my-md-3">
                    A continuación, se presentan una serie de ejercicios acerca de los operadores en JavaScript, en estos ejercicios usted deberá completar unos problemas planteados completando algunas líneas de códigos faltantes.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto">
                    <div class="col-lg-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejercicio # 1</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejercicio1') }}" class="btn">Ir al ejercicio</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejercicio # 2</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejercicio2') }}" class="btn">Ir al ejercicio</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejercicio # 3</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejercicio3') }}" class="btn">Ir al ejercicio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    
@endsection

@section('scripts')
@endsection