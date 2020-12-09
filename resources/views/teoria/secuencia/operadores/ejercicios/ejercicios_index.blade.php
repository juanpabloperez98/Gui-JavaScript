@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejemplos.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="ej-main">
        <div class="row mx-auto mt-md-5">
            <div class="col-lg-12">
                <h3 class="text-md-center font-weight-bold my-md-4">Ejercicios Operadores</h3>
                <p class="my-md-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic eveniet eos optio pariatur tempore neque, natus dolores voluptate ut, ducimus eius magni dolore voluptatibus.
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
                    <div class="col-lg-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejercicio # 2</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejercicio1') }}" class="btn">Ir al ejercicio</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejercicio # 3</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejercicio1') }}" class="btn">Ir al ejercicio</a>
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