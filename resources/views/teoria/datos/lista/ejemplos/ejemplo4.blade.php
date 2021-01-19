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
                    Se necesita crear un programa que clasifique número y los almacene en una lista dependiendo de:
                    <ul class="container">
                        <li>Si el número es negativo se almacenará en una lista llamada num_negativos</li>
                        <li>Si el número es positivo y es par, se almacenará en una lista llamada num_pares</li>
                        <li>Si el número es positivo y NO es par, se almacenará en una lista llamada num_NOpares</li>
                    </ul>
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var num_negativos = [],
        num_pares = [],
        num_NOpares = []
    for (var i = 0; i < 5; i++) {
        var numero = parseInt(prompt("Ingrese número: "))
        if(numero < 0){
            num_negativos.push(numero)
        }else if(numero > 0 && numero%2 == 0){
            num_pares.push(numero)
        }else{
            num_NOpares.push(numero)
        }
    }
    console.log(num_negativos)
    console.log(num_pares)
    console.log(num_NOpares)
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
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se declara la variable "num_negativos" y se iguala a una lista vacía
    Se declara la variable "num_pares" y se iguala a una lista vacía
    Se declara la variable "num_NOpares" y se iguala a una lista vacía
    Se declara un ciclo for que ira desde un "i=0" hasta "i < 5" e ira aumentando de 1 en 1
    Dentro del ciclo se declara una variable "numero" y se iguala a lo que ingrese el usuario por pantalla
    Se valida si "numero" es menor a cero
    De cumplirse la condición entonces a la lista "num_negativos" se le agrega el número ingresado por el usuario
    De no cumplirse la condición de la línea 6, entonces se valida ahora si la variable "numero" es mayor a cero y además su modulo entre 2 es igual a cero
    De cumplirse la condición entonces a la lista "num_pares" se le agrega el número ingresado por el usuario
    Si no se cumple ninguna de las condiciones anteriores
    A la lista "num_NOpares" se le agrega el número ingresado por el usuario
    Se cierra el condicional de la línea 6
    Se cierra el ciclo de la línea 4
    Se imprime la lista "num_negativos"
    Se imprime la lista "num_pares"
    Se imprime la lista "num_NOpares"
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
            cont = 0,
            placeholders_form1 = ['Ingrese número: '],
            list_datas_form1 = [],
            num_negativos = [],
            num_pares = [],
            num_NOpares = []


        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {

            var retorno = false,
                texto = "",
                lon = list_datas_form1.length

            cont ++
            if(cont == 5){
                for (var i = 0; i < 5; i++) {
                    var numero = parseInt(list_datas_form1[i])
                    if(numero < 0){
                        num_negativos.push(numero)
                    }else if(numero > 0 && numero%2 == 0){
                        num_pares.push(numero)
                    }else{
                        num_NOpares.push(numero)
                    }
                }
                retorno = true
                texto = num_negativos + "<br>"
                texto += num_pares + "<br>"
                texto += num_NOpares
            }
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
            alert("Día "+dias[cont]+": ")
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                retorno = show_results()
                if(retorno){
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
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
