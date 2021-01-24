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
                <h4 class="font-weight-bold">Ejemplo # 3</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Se tiene un objeto que tiene una clave llamada colores la cual contiene una lista con colores, se pide crear un programa que imprima cada uno de los elementos de la lista colores excluyendo los colores primarios.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var objeto = {
        nombre: 'Objeto',
        longitud:25,
        colores: ['rojo','verde','azul','amarillo','rosa','naranja','beis','negro','violeta','dorado']
    }
    list_colors = objeto['colores']
    for (var i = 0; i < list_colors.length; i++) {
        const color = list_colors[i];
        if(color != 'amarillo' && color != 'azul' && color != 'rojo'){
            console.log(color)
        }
    }
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
                    <code class="javascript">    Se crea el objeto llamado "objeto"
    Se declara una clave "nombre" que tiene como valor un nombre determinado
    Se declara una clave "longitud" que tiene como valor un número determinado
    Se declara una clave "colores" que tiene como valor una lista de colores
    Se cierra el objeto
    Se declara una variable "list_colors" y se iguala al valor de la clave "[colores]" del objeto
    Se declara un ciclo for que empieza en "i=0" y va hasta la longitud de la lista de colores 
    Dentro del ciclo, se declara la variable "color" y se iguala al valor que se obtenga de la lista de colores en la posición "[ i ]"
    Se valida si el valor de la variable "color" es diferente a amarillo, azul o rojo
    Si la condición anterior se cumple, entonces se imprime el color
    Se cierra el condicional if
    Se cierra el ciclo for
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
            texto = "verde <br>rosa <br>naranja <br>beis <br>negro <br>violeta <br>dorado"
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
