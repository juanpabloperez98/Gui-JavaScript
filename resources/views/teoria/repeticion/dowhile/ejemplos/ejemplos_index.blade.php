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
                <h3 class="text-md-center font-weight-bold my-md-4">Ejemplos Do-While</h3>
                <p class="my-md-3">
                    A continuación, se presentan una serie de ejemplos acerca de Do-While en JavaScript, en estos ejemplos podrá visualizar unos problemas planteados y la solución a estos con su respectiva explicación.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row mx-auto">
                    <div class="col-lg-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 1</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo1') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 2</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo2') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 3</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo3') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 4</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo4') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 5</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo5') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 6</h5>
                            </div>
                            <div class="cardboton">
                                <a href="{{ route('dowhile-ejemplo6') }}" class="btn">Ir al ejemplo</a>
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