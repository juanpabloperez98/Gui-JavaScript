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
                <h4 class="font-weight-bold">Ejemplo # 4</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Dado 3 números ingresados por el usuario, mostrar por pantalla true, si los 3 números son iguales o false, dado el caso de que no lo sean.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var num1 = parseInt(prompt("Ingrese numero 1: ")),
           num2 = parseInt(prompt("Ingrese numero 2: ")),
           num3 = parseInt(prompt("Ingrese numero 3: "))
           console.log(num1 == num2 && num1 == num3)
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
                    <form action="" class="text-center desactivate" id="formulario3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato3" placeholder="Ingrese numero 3">
                        </div>
                        <input type="submit" class="btn submit" id="submit3" value="Siguiente">
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
                    <code class="javascript">    Se declara una variable llamada "num1" y se iguala a lo ingresado por el usuario convertido a entero usando la función parseInt
    Se declara una variable llamada "num2" y se iguala a lo ingresado por el usuario convertido a entero usando la función parseInt
    Se declara una variable llamada "num3" y se iguala a lo ingresado por el usuario convertido a entero usando la función parseInt
    Por último, se imprime lo que retorne la operación de comparar "num1" con "num2" y "num1" con "num3" (<span style="color: rgba(244, 219, 79, 1);">NOTA</span>: de ser iguales los números retornara un true, de no ser iguales retornara false)
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
            dato3 = 0

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
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                $('#resultado-operacion').text(dato1 == dato2 && dato1 == dato3)
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
