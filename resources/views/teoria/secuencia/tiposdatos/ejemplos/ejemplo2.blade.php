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
                <h4 class="font-weight-bold">Ejemplo # 2</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    En JavaScript para pedir un dato por pantalla se utiliza una función o palabra reservada llamada
                            prompt, la cual le permite al usuario ingresar un dato, pero este dato ingresado por el usuario
                            es retornado como un String. Se pide realizar un programa que le permita ingresar un numero al
                            usuario y convierta lo que retorna la función prompt a entero.

                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var dato = prompt("Ingrese un dato")
    console.log("tipo de dato antes: ")
    console.log(typeof(dato))
    dato = parseInt(dato)
    console.log("tipo de dato despues: ")
    console.log(typeof(dato))
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato" placeholder="Ingrese un dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        tipo de dato antes: <br>
                        <span style="color: red">string</span> <br>
                        tipo de dato despues:  <br>
                        <span style="color: red">number</span> <br>
                    </p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se utiliza la función prompt para pedirle datos al usuario, el valor ingresado será almacenado en la variable dato
    Se imprime un mensaje por consola
    Luego se imprime el tipo de dato que tenga almacenado la variable dato (en este caso un string)
    Luego se convierte a entero el valor de la variable dato utilizando la función parseInt, luego se actualiza la variable dato al nuevo valor
    Se imprime un mensaje por consola
    Luego se imprime el tipo de dato que tenga almacenado la variable dato (ahora un int)
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

        var dato_ = 0

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codigo').toggle('explode')
        })


        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#datos').toggle('explode')
            $('#ejecutar').toggle('explode')
            $('#sig').toggle('explode')
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato_ = parseInt(valor)
                $('#formulario').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
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
