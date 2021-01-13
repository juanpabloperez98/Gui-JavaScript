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
                    Realizar un programa que lea una serie de números hasta que el usuario ingres un número 0, se debe mostrar el mayor de los números ingresados
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var num_mayor = 0
    do {
        var numero = parseInt(prompt("Ingrese un número: "))
        console.log("Número ingresado "+ numero)
        num_mayor < numero ? num_mayor = numero : null
    } while (numero != 0);
    console.log("Número mayor: "+ num_mayor)     
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
                    <code class="javascript">    Se crea la variable "num_mayor" y se iguala a cero (Esta variable se ira actualizando a medida que el usuario va ingresando números)
    Se crea el ciclo do while (Iniciando por el do)
    Dentro del ciclo se crea una variable llamada "numero" y se iguala al número ingresado por el usuario
    Se imprime el número ingresado
    Utilizando una condición ternaria, se valida si la variable "num_mayor" es menor al número ingresado por el usuario, de ser así la variable "num_mayor" se actualiza al valor de la variable "numero", de no ser así entonces no se hace nada y se utiliza un null
    Se utiliza la palabra reservada while, para validar el ciclo, el cual se ejecutará siempre que la variable "numero" sea diferente de cero, de ser igual a cero se saldrá del ciclo do while
    Se imprime por pantalla el valor de "num_mayor"
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
            placeholders_form1 = ['Ingrese numero'],
            list_datas_form1 = [],
            num_mayor = 0

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
            dato = parseInt(list_datas_form1[lon-1])
            texto = "Número ingresado: " + list_datas_form1[lon-1] 
            if(list_datas_form1[lon-1] == 0){ retorno = true }
            num_mayor < dato ? num_mayor = dato : null
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
                    document.getElementById('resultado-operacion').innerHTML += "<br>Número mayor: "+ num_mayor
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
