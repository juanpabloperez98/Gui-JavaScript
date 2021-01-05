@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/baseteoria.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="tp-main">
        <div class="row mx-auto p-md-4">
            <div class="col-lg-11 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.3.1</span>Ciclo Do While</h3>
                <p class="mt-3">
                    La estructura do while, es una estructura repetitiva que se caracteriza porque ejecuta un bloque de
                    sentencias sin realizar previamente la evaluación de la expresión relacional y/o lógica. Esto garantiza
                    que utilizando el ciclo do while por los menos una vez se a ejecutar el bloque de sentencias
                    correspondiente. Similar al ciclo while, el ciclo do while tiene una condición a evaluar solo que esta
                    vez se evalúa al final del bloque de sentencias.
                </p>
            </div>
            <div class="col-lg-5 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.3.2</span>Sintaxis Do While</h3>
                <p class="mt-3">
                    El ciclo do while, consta de dos palabras reservadas para su implementación, las cuales son:
                    <ul class="container">
                        <li>Do: Hacer</li>
                        <li>While: Mientras</li>
                    </ul>
                </p>
                <pre>
                                        <code class="javascript">   do{
        <span style="color: greenyellow;">Bloque de instrucciones</span>                                        
    }while( <span style="color: blue; font-weight: bold;">condicion</span> )
                                        </code>
                                    </pre>
                <p>Primeramente, se escribe la palabra reservada do, luego dentro de esta se implementa el bloque de instrucciones que se desea ejecutar, por ultimo se utiliza la palabra reservada while la cual se le pasa una variable como condición o una expresión que devuelva un valor booleano (true o false)</p>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.3.4</span>Diagrama de Do While</h3>
                <div class="imagen text-center">
                    <img class="mt-5 w-100" src="{{ asset('imagenes/estructuras_repetitivas/dowhile.png') }}" alt="">
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.3.3</span>Ejemplo Do While</h3>
                <p class="mt-3">
                    Supóngase que se debe realizar un menú para un banco, el cual le genera una serie de opciones para que el usuario pueda ingresar cual solicitud desea realizar, se debe presentar la opción de salir del menú, si se escoge otra opción diferente a la de salir, entonces se volverá a mostrar el menú 
                </p>
                <pre>
                    <code class="javascript">   var op
    do{
        console.log("1) Opción 1")
        console.log("2) Opción 2")
        console.log("3) Opción 3")
        console.log("4) Opción 4")
        console.log("0) Salir")
        op = 0
    }while(op!=0)
                    </code>
                    </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                1) Opción 1<br>
                                2) Opción 2<br>
                                3) Opción 3<br>
                                4) Opción 4<br>
                                0) Salir<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La variable <span style="color: blue; font-weight: bold;">op</span>, es la variable utilizada para la condición donde se valida que el ciclo se ejecutara siempre y cuando <span style="color: blue; font-weight: bold;">op</span> sea diferente de cero. En la línea 8 se iguala la variable <span style="color: blue; font-weight: bold;">op</span>  a cero, es por eso que con el do while, se esta garantizando que al menos una vez se muestra el menú
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>

        </div>


        <div class="row mx-auto p-md-4" id="ejemplos">
            <div class="col-lg-11 text-center mx-auto bg-light columna-principal">
                <h4 class="text-center mb-md-5 font-weight-bold">Ejemplos y practica</h4>

                <div class="card-personalizada">
                    <div class="cardheader">
                        <h5>Ejemplos</h5>
                    </div>

                    <div class="cardboton">
                        <a href="{{ route('simplesydobles-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>

                    <div class="cardboton">
                        <a href="{{ route('simplesydobles-ejercicios-index') }}" class="btn">Ir a los Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        var status1 = 0,
            status2 = 0,
            status3 = 0,
            status4 = 0,
            status5 = 0



        $('#boton-probar1').on('click', (e) => {
            e.preventDefault()
            $('#result1').toggle('fold')
            if (status1 == 0) {
                $('#boton-probar1').text('X')
                status1 = 1
            } else {
                $('#boton-probar1').text('Probar')
                status1 = 0
            }
        })

        $('#boton-probar2').on('click', (e) => {
            e.preventDefault()
            $('#result2').toggle('fold')
            if (status2 == 0) {
                $('#boton-probar2').text('X')
                status2 = 1
            } else {
                $('#boton-probar2').text('Probar')
                status2 = 0
            }
        })

        $('#boton-probar3').on('click', (e) => {
            e.preventDefault()
            $('#result3').toggle('fold')
            if (status3 == 0) {
                $('#boton-probar3').text('X')
                status3 = 1
            } else {
                $('#boton-probar3').text('Probar')
                status3 = 0
            }
        })

        $('#boton-probar4').on('click', (e) => {
            e.preventDefault()
            $('#result4').toggle('fold')
            if (status4 == 0) {
                $('#boton-probar4').text('X')
                status4 = 1
            } else {
                $('#boton-probar4').text('Probar')
                status4 = 0
            }
        })

        $('#boton-probar5').on('click', (e) => {
            e.preventDefault()
            $('#result5').toggle('fold')
            if (status5 == 0) {
                $('#boton-probar5').text('X')
                status5 = 1
            } else {
                $('#boton-probar5').text('Probar')
                status5 = 0
            }
        })

    </script>
@endsection
