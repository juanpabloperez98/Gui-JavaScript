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
                    Realizar un programa que pida una serie de números al usuario y que indique si el número ingresado es positivo, negativo o cero. El programa deberá finalizar cuando la suma de los números ingresados es mayor a 20 (Se deberá mostrar por cada iteración en cuanto va el valor de la suma)
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var suma = 0
    do {
        var numero = parseInt(prompt("Ingrese un número: "))
            texto = ""
        if(numero > 0){
            texto = "El número es positivo"
        }else if(numero < 0){
            texto = "El número es negativo"
        }else{
            texto = "El número es cero"
        }
        suma += numero
        console.log(texto)
        console.log("La suma va en: " + suma)
    } while (suma < 20);
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white"></p>
                </div>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea una variable llamada "suma", esta se iguala a cero (Esta variable sirve para llevar la suma total de los números ingresados)
    Se declara el ciclo do while (Iniciando por el do)
    Dentro del ciclo, se declara la variable "numero" y se iguala al número ingresado por el usuario
    Se declara una variable "texto" y se iguala a un string vacío
    Se valida ahora si el valor de la variable "numero" es mayor a cero
    De cumplirse la condición, entonces se iguala la variable texto a un string que indique que el número es positivo
    Si la condición de la línea 5 no se cumple, entonces se valida ahora si la variable "numero" es menor a cero (Para saber si es negativo el número)
    Si la condición anterior se cumple, entonces se iguala la variable "texto" a un string que indique que el número es negativo
    Si ninguna de las condiciones anteriores se cumple
    Entonces se iguala la variable "texto" a un string que indique que el número es cero
    Se cierra el condicional de la línea 5
    La variable "suma" incrementa en el valor de la variable "numero" (Se lleva el conteo de la suma de los números ingresados)
    Se imprime el valor de la variable "texto"
    Se imprime el valor de la variable "suma" que va hasta el momento (Recordar que esta variable cambia cada vez que se repita el ciclo)
    Se utiliza la palabra reservada while, para validar el ciclo, el cual se ejecutará siempre que la variable "suma" sea diferente menor a 20
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
            placeholders_form1 = ['Ingrese un número: '],
            list_datas_form1 = [],
            suma = 0

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            lon = list_datas_form1.length
            retorno = false
            numero = parseInt(list_datas_form1[lon-1])
            texto = ""
            if(numero > 0){
                texto = "El número es positivo"
            }else if(numero < 0){
                texto = "El número es negativo"
            }else{
                texto = "El número es cero"
            } 
            suma += numero
            texto += "<br>La suma va en: " + suma
            if(suma > 20){ retorno = true }
            $('#resultado-operacion').html(texto)
            return retorno
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
                retorno = show_results()
                $('#result').removeClass('desactivate')
                $('#datos').css('margin-top',-13)
                if(retorno){
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
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
