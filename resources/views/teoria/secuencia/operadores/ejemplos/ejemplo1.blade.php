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
                <h4 class="font-weight-bold">Ejemplo # 1</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Juanito es un niño de 11 años el cual tiene la curiosidad de saber cual sería la edad de su hermano dentro de 10 años, sabiendo que el hermano de juanito tiene el doble de la edad de juanito menos 1, ¿Cuál seria la edad del hermano de juanito dentro de 10 años?
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var edad_juanito = 11,
           edad_hermano = (edad_juanito*2) - 1,
           edad_futura = edad_hermano + 10
    console.log("La edad del hermano de juanito dentro de 10 años sera: " + edad_futura)
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        La edad del hermano de juanito dentro de 10 años sera: 31
                    </p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se declara una variable llamada edad_juanito, y se iguala a la edad de juanito que es 11 años
    Luego, se declara la variable edad_hermano, la cual el enunciado dice que es el doble de la edad de juanito menos 1
    Después, se declara una variable llamada edad_futura, esta se iguala al valor que haya en la variable edad_hermano y se le suman los 10 años del enunciado del problema
    Por último, se imprime por pantalla el resultado de la edad del hermano de juanito
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
            $('#result').toggle('explode')
            $('#ejecutar').toggle('explode')
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
