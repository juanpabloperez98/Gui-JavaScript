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
                    Hacer un programa que inicialice una lista de números con valores aleatorios (10 valores), y posterior ordene los elementos de menor a mayor.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var lista = []
    for (var i = 0; i < 10; i++) {
        var numero = parseInt(Math.random() * 101) 
        lista.push(numero)
    }
    lista.sort()
    console.log(lista)
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white"></p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea la variable "lista" y se iguala a una lista vacía
    Se crea un ciclo for, este ciclo inicia con  "i=0" y va hasta "i < 10", su incremento es de 1 en 1
    Dentro del ciclo, se crea una variable llamada "numero", esta variable se iguala a lo que devuelva la función Math.random() multiplicada por 101 (Recordar que esta función genera números aleatorios, al multiplicarlo por 101, es para generar datos entre 0 y 100)
    Se agrega a la variable "lista" el número generado
    Se cierra el ciclo for
    La variable "lista" tiene un método que permite ordenar sus elementos de manera ordenada, este método es el método "sort" por lo que, al hacer el llamado a ese método, ya quedaría ordenado los elementos de la lista
    Por último, se imprime la lista ordenada
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
            texto = ""
            var lista = []
            for (var i = 0; i < 10; i++) {
                var numero = parseInt(Math.random() * 101) 
                lista.push(numero)
            }
            lista.sort()
            for (let i = 0; i < lista.length; i++) {
                i == lista.length - 1 ? texto += lista[i] : texto += lista[i] + " - " 
            }
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
