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
                    En una escuela primaria, se desea enseñar a los jóvenes de 5 primaria como hallar la hipotenusa dado los catetos adyacente y opuesto. Para ello se pide realizar un programa que, dado los catetos opuestos y adyacentes ingresados por el usuario, muestre como resultado la hipotenusa. 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var co = parseInt(prompt("Ingrese cateto opuesto: ")),
           ca = parseInt(prompt("Ingrese cateto adyacente: "))
           h = Math.sqrt((co**2) + (ca**2))
           console.log("La hipotenusa es: " + h)
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato" placeholder="Ingrese cacateto opuesto">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato2" placeholder="Ingrese cacateto adyacente">
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
                    <code class="javascript">    Se empieza declarando la variable "co" y se iguala a lo que ingresa el usuario convertido a entero
    Luego se declara la variable "ca" y se iguala a lo que ingresa el usuario convertido a entero
    Terceramente, se declara la variable "h", y se iguala a la raíz cuadrada de los catetos elevados al cuadrado (<span style="color: rgba(244, 219, 79, 1);">NOTA</span>: Math.sqrt es una función de la librería Math que representa la raíz cuadrada de un valor)
    Finalmente, se imprime el valor de la hipotenusa 
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
                var r = Math.sqrt((dato1**2) + (dato2**2))
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                $('#resultado-operacion').text("La hipotenusa es: " + r)
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
