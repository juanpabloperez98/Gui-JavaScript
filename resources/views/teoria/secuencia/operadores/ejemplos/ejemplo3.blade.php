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
                    Realice un programa que, dado dos puntos de una recta, calcule su pendiente
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var x1 = parseInt(prompt("Ingrese x1: ")),
           y1 = parseInt(prompt("Ingrese y1: ")),
           x2 = parseInt(prompt("Ingrese x2: ")),
           y2 = parseInt(prompt("Ingrese y2: "))
    var pendiente = (y2 - y1) / (x2 - x1)
    alert("La pendiente de la recta es: " + pendiente) 
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato" placeholder="Ingrese x1">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato2" placeholder="Ingrese y1">
                        </div>
                        <input type="submit" class="btn submit" id="submit2" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato3" placeholder="Ingrese x2">
                        </div>
                        <input type="submit" class="btn submit" id="submit3" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato4" placeholder="Ingrese y2">
                        </div>
                        <input type="submit" class="btn submit" id="submit4" value="Siguiente">
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
                    <code class="javascript">    Se declara la variable "x1", y se iguala a lo que ingrese el usuario por teclado convertido a entero, utilizando la función parseInt
    Se declara la variable "y1", y se iguala a lo que ingrese el usuario por teclado convertido a entero, utilizando la función parseInt
    Se declara la variable "x2", y se iguala a lo que ingrese el usuario por teclado convertido a entero, utilizando la función parseInt
    Se declara la variable "y2", y se iguala a lo que ingrese el usuario por teclado convertido a entero, utilizando la función parseInt
    Luego se declara una variable nueva llamada "pendiente" y se iguala al resultado de la operación de la pendiente 
    Por último, se imprime el valor de la pendiente (<span style="color: rgba(244, 219, 79, 1);">NOTA</span>: alert es una función de JavaScript que permite mostrar datos a través de una ventana emergente)
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

        var dato1 = 0,
            dato2 = 0,
            dato3 = 0,
            dato4 = 0

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
                dato1 = parseInt(valor)
                $('#formulario').toggle('explode')
                $('#formulario2').toggle('explode')
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
        })

        $('#formulario2').submit((e) => {
            e.preventDefault()
            var valor = $('#dato2').val()
            if(validar(valor)){
                dato2 = parseInt(valor)
                $('#formulario2').toggle('explode')
                $('#formulario3').toggle('explode')
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
        })

        $('#formulario3').submit((e) => {
            e.preventDefault()
            var valor = $('#dato3').val()
            if(validar(valor)){
                dato3 = parseInt(valor)
                $('#formulario3').toggle('explode')
                $('#formulario4').toggle('explode')
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
        })

        $('#formulario4').submit((e) => {
            e.preventDefault()
            var valor = $('#dato4').val()
            if(validar(valor)){
                dato4 = parseInt(valor)
                //$('#formulario').toggle('explode')
                var pendiente = (dato4 - dato2) / (dato3 - dato1)
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                $('#resultado-operacion').text('La pendiente de la recta es: ' + pendiente)
                alert('La pendiente de la recta es: ' + pendiente)
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
