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
                    Para comenzar con el aprendizaje con JavaScript, la universidad tecnológica de Pereira le
                    pide realizar un programa en el cual se declaren 3 variables, luego se debe guardar en otras
                    tres variables los tipos de datos correspondientes a las variables creadas. Imprimir los tipos
                    de datos.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var variable1 = 20,
        variable2 = {},
        variable3
    var tipo1 = typeof(variable1),
        tipo2 = typeof(variable2),
        tipo3 = typeof(variable3)
    console.log(tipo1,tipo2,tipo3)
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        number object undefined
                    </p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se declara la variable “variable1” y se le asigna un valor
    Se declara la variable “variable2” y se le asigna un valor
    Se declara la variable “variable3” y no se le asigna ningún valor
    Luego se declara la variable tipo1, y se le asigna el tipo de dato de “variable1” utilizando la palabra reservada typeof
    Igual que la línea anterior, se declara la variable tipo2, y se le asigna el tipo de dato de “variable2”
    Igual que la línea anterior, se declara la variable tipo3, y se le asigna el tipo de dato de “variable3”
    Por último, se imprime utilizando el console.log los valores almacenados en las variables “tipo1”, “tipo2”, “tipo3”
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
