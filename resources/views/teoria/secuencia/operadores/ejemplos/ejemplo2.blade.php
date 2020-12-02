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
                    Realice un programa el cual le pida dos datos al usuario e imprima el residuo de los dos números ingresados
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var num1 = prompt("Ingrese numero 1: "),
           num2 = prompt("Ingrese numero 2: "),
           residuo = 0
    num1 = parseInt(num1)
    num2 = parseInt(num2)
    residuo = num1 % num2
    console.log("El residuo de los numeros es: "+ residuo)
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato" placeholder="Ingrese numero 1">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato2" placeholder="Ingrese numero 2">
                        </div>
                        <input type="submit" class="btn submit" id="submit2" value="Siguiente">
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
                    <code class="javascript">    Se comienza declarando la variable "num1" y se iguala a lo que ingrese el usuario por pantalla
    Igual que la línea anterior se declara la variable "num2" y se iguala a lo que ingrese el usuario por pantalla
    Luego se declara la variable residuo y se iguala a cero 
    Se convierte la variable "num1" en entero usando la función parseInt, el valor convertido a entero se iguala a la misma variable "num1"
    Se convierte la variable "num2" en entero usando la función parseInt, el valor convertido a entero se iguala a la misma variable "num2"
    La variable "residuo" se iguala al resultado de la operación de modulo entre "num1" y "num2"
    Por último, se imprime por pantalla el resultado (<span style="color: rgba(244, 219, 79, 1);">NOTA</span>: al utilizar el operador "+" con un string y un entero, este concatena al string el entero especificado) 
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
            dato2 = 0

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
                //$('#exp').toggle('explode')
                //$('#result').toggle('explode')
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
                //$('#formulario').toggle('explode')
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                $('#resultado-operacion').text('El residuo de los numeros es: ' + (dato1%dato2))
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
