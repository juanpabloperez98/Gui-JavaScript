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
                    Realizar un programa que muestre la tabla de multiplicar de un número ingresado por el usuario desde el 1 hasta al 9, el resultado de estas operaciones se debe mostrar desde el mayor hasta el menor
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var numero = parseInt(prompt("Ingresa número: "))
    for (var i = 9; i >= 1; i--) {
        resultado = numero*i
        console.log(numero +" x "+i+" = "+resultado)
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
                    <code class="javascript">    Se crea la variable "numero" y se iguala a lo ingresado por el usuario convertido a entero
    Se declara la sentencia for, donde la variable de iteración será "i", esta variable empezará en 9 e ira hasta 1, por lo que el operador deberá ser un operador de decremento
    Se declara una variable resultado y se iguala al resultado de multiplicar la variable "numero" por la variable "i" (La variable "i" es la que itera entre 9 y 1)
    Se imprime el resultado de la multiplicación
    Por último, se cierra el ciclo for de la línea 2
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
            max_inputs = 1, 
            cont = 0,
            placeholders_form1 = ['Ingrese numero: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var numero = parseInt(list_datas_form1[0]),
            texto = ""
            for (var i = 9; i >= 1; i--) {
                resultado = numero*i
                texto += numero +" x "+i+" = "+resultado + '<br>'
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
            $('#datos').toggle('explode')
            $('#ejecutar').toggle('explode')
            $('#sig').toggle('explode')
            placeholder_set_inputs()
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                cont ++
                if(cont < max_inputs){
                    placeholder_set_inputs()
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    show_results()
                }
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
