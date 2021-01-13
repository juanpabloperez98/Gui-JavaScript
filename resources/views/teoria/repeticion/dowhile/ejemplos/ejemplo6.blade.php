@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejemplos.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="ej-main">
        <div class="row mx-auto">
            <div class="col-lg-12 p-md-3">
                <h4 class="font-weight-bold">Ejemplo # 6</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Los padres de una niña le prometieron darle 10 dólares cuando cumpliera 12 años de edad y duplicar el regalo en cada cumpleaños subsiguiente hasta que el regalo excediera 1000 dólares. Escriba un programa para determinar qué edad tendrá la niña cuando se le dé la última cantidad y la cantidad total recibida. 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var edad = 12, dinero = 10, total = 10
    do {
        dinero *= 2
        total += dinero
        edad ++
    } while (total < 1000)
    console.log("Edad: "+edad)
    console.log("Última cantidad: "+dinero)
    console.log("Total recibido: "+total)      
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white">
                        Edad: 18  <br>
                        Última cantidad: 640  <br>
                        Total recibido: 1270 <br>
                    </p>
                </div>
                {{-- <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div> --}}
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crean las variables "edad" que se iguala a 12, "dinero" que se iguala a 10 (Los 10 dólares iniciales), y "total" que se iguala a 10
    Se declara el ciclo do while (Iniciando por el do)
    Dentro del ciclo, la variable "dinero" se duplica utilizando el operador "*="
    La variable "total" aumenta en el valor de la variable "dinero"
    La variable edad aumenta en 1 utilizando el operador "+="
    Se utiliza la palabra reservada while, para validar el ciclo, el cual se ejecutará siempre que la variable "total" sea menor a 1000
    Se imprime la edad 
    Se imprime la última cantidad de dinero recibida (Se encuentra almacenada en la variable "dinero")
    Se imprime el total del dinero recibido
                    </code>
                </pre>
                <div class="text-md-center">
                    <a href="#" class="btn" id="reiniciar">Reiniciar</a>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('scripts')

    <script>

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codigo').toggle('explode')
        })

        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#ejecutar').toggle('explode')
            $('#result').removeClass('desactivate')
            $('#exp').toggle('explode')
        })

        $('#exp').on('click', (e) => {
            e.preventDefault()
            $('#exp').toggle('explode')
            $('#code-explain').toggle('explode')
        })

        $('#reiniciar').on('click', (e) => {
            e.preventDefault()
            location.reload()
        })  


    </script>

@endsection
