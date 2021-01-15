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
                    Realizar un programa que genera la lista de los N primeros números primos, N es el dato de entrada
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingrese un número: "))
   for (var i = 2; i < n; i++) {
        var isprime = true
        for (var j = 2; j < i; j++) {
            if (i % j == 0) {
                isprime = false
                break
            }
        }
        isprime == true ? console.log(i) : null
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
                    <code class="javascript">    Se declara la variable "n" y se iguala al valor que ingrese el usuario convertido a entero
    Luego se crea la sentencia for, donde la variable de iteración será "i", la cual empieza en 2 y va hasta "n" (El número ingresado por el usuario)
    Se declara una variable llamada "isprime" y se iguala a true (Esta variable sirve para verificar más adelante si un número es primo o no)
    Se crea otra sentencia for (ciclo interno), para recorrer los números desde el 2 hasta el valor de la variable del ciclo superior "i" (Este ciclo es el que permite recorrer todos los números desde el 2 hasta el valor de la variable "i" que se encuentre en iteración)
    Se valida si el valor de la operación módulo entre "i" y "j" es igual a cero
    Si la condición se cumple, significa que el número no es primo (Porque hay más de un divisor diferentes al 1 y al mismo número), entonces se iguala la variable "isprime" a false
    Se rompe el ciclo for con un break (Se utiliza el break para romper el ciclo porque ya no es necesario seguir recorriendo los números comprendidos entre 2 y la variable "i", pues ya se sabe que el número no es primo)
    Se cierra la condicional de la línea 5
    Se cierra el ciclo inferior de la línea 4
    Ahora utilizando una condición ternaria, se valida si la variable "isprime" es igual a true, de ser cierto, entonces se imprime la variable "i", de lo contrario no se hace nada utilizando la palabra reservada null
    Se cierra el ciclo superior de la línea 2
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
            var n = parseInt(list_datas_form1[0]),
            texto = ""
            
            for (var i = 2; i < n; i++) {
                var isprime = true
                for (var j = 2; j < i; j++) {
                    if (i % j == 0) {
                        isprime = false
                        break
                    }
                }
                isprime == true ? texto += i+" " : null
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
