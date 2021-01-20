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
                <h4 class="font-weight-bold">Ejemplo # 5</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Crear una matriz de orden 3x3 con datos aleatorios. Luego se deberá sacar la suma de sus dos diagonales. Diagonal 1: [0,0][1,1][2,2], diagonal 2: [0,2][1,1][2,0]
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   matriz = []
    for (var i = 0; i < 3; i++) {
        var fila = []
        for (var j = 0; j < 3; j++) {
            num = parseInt(Math.random() * 11)
            fila.push(num)
        }
        matriz.push(fila)
    }
    // Primera diagonal
    var i=0,j=0,
        sum1 = 0
    while(i!=3 && j!=3){
        sum1 += matriz[i][j]
        i++
        j++
    }
    // Segunda diagonal
    i=0,j=2
    var sum2 = 0
    while(i!=3 && j > -1){
        sum2 += matriz[i][j]
        i++
        j--
    }
    console.log(matriz)
    console.log("Suma de sus diagonales: " + (sum1+sum2))
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
                    <code class="javascript">    Se crea la variable "matriz" y se iguala a una lista vacía
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un número aleatorio entre 0 y 10
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz de números aleatorios), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se crea un comentario que indica que se va a realizar el recorrido de la primera diagonal
    Se crean dos variables "i" y "j", las dos variables se igualan a cero
    Y se crea una variable llamada "sum1" esta variable servirá para llevar la suma de la primera diagonal
    Se declara un ciclo while, que se ejecutara mientras que "i" sea diferente de 3 y "j" también sea diferente de 3
    Dentro de este ciclo, se aumenta la variable "sum1" en el valor que se encuentre en la matriz en la posición "[ i ][ j ]"
    Se aumenta la variable "i" en 1
    Se aumenta la variable "j" en 1
    Se cierra el ciclo while
    Se crea un comentario que indica que se va a realizar el recorrido de la segunda diagonal
    Se actualizan los valores de "i" y "j" en 0 y 2 respectivamente
    Y se crea una variable llamada "sum2" esta variable servirá para llevar la suma de la segunda diagonal
    Se declara un ciclo while, que se ejecutara mientras que "i" sea diferente de 3 y "j" sea mayor a -1
    Dentro de este ciclo, se aumenta la variable "sum2" en el valor que se encuentre en la matriz en la posición "[ i ][ j ]"
    Se aumenta la variable "i" en 1
    Se disminuye la variable "j" en 1
    Se cierra el ciclo while
    Se imprime la matriz creada
    Se imprime la suma de sus diagonales, sumando las variables "sum1+sum2"
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
            matriz = [],
            texto = ""
            for (var i = 0; i < 3; i++) {
                var fila = []
                for (var j = 0; j < 3; j++) {
                    num = parseInt(Math.random() * 11)
                    fila.push(num)
                }
                matriz.push(fila)
            }
            // Primera diagonal
            var i=0,j=0,
                sum1 = 0
            while(i!=3 && j!=3){
                sum1 += matriz[i][j]
                i++
                j++
            }
            // Segunda diagonal
            i=0,j=2
            var sum2 = 0
            while(i!=3 && j > -1){
                sum2 += matriz[i][j]
                i++
                j--
            }
            // console.log(matriz)
            for (let i = 0; i < 3; i++) {
                for (let j = 0; j < 3; j++) {
                    texto += matriz[i][j] + "     "
                }
                texto += "<br>"
            }
            texto += "<br>"
            texto+= "Suma de sus diagonales: " + (sum1+sum2)
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
