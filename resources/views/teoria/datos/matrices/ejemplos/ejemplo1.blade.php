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
                    Crear una matriz de 3×3 con los números del 1 al 9. Mostrar por pantalla, tal como aparece en la matriz.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var matriz = [],
        n = 1
    for (var i = 0; i < 3; i++) {
        var fila = []
        for (var j = 0; j < 3; j++) {
            fila.push(n)
            n++
        }
        matriz.push(fila)
    }
    console.log(matriz)        
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white"></p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea la variable "matriz" y se iguala a una lista vacía (Esta representara toda la matriz completa)
    Luego se declara una variable "n" y se iguala a 1 (Esta variable representara los datos agregar en la matriz)
    Se declara una variable for que va desde "i=0" hasta "i < 3", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "filas", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < 3" y su incremento será de 1 en 1
    Ahora a la lista "fila" se le agrega el valor de la variable "n" (Esta variable ira cambiando cada vez que se repita el ciclo interno)
    Se aumenta en 1 la variable n como se comentó anteriormente
    Se cierra el ciclo for interno 
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz completa), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Por último, se imprime la variable "matriz"
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

        const show_results = () => {
            var texto = ""
            texto = "1 2 3"
            texto += "<br>4 5 6"
            texto += "<br>7 8 9"
            $('#resultado-operacion').html(texto)
        }

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codigo').toggle('explode')
        })

        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#ejecutar').toggle('explode')
            $('#sig').toggle('explode')
            $('#exp').toggle('explode')
            $('#result').toggle('explode')
            show_results()
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
