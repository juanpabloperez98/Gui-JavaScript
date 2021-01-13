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
                    Pedir al usuario un número y mostrar todos los números comprendidos entre el número ingresado hasta 1 de manera descendente utilizando el ciclo while
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var sum = 0
    do {   
        var n = parseInt(prompt("Ingrese número: "))
        console.log("Número ingresado "+ n)
        sum += n
    } while (n > 0);
    console.log("Total de la suma: "+ sum)
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
                    <code class="javascript">    Se crea la variable "sum" y se iguala a cero
    Luego se crea el ciclo do while (Iniciando con el do)
    Se crea la variable "n" y se iguala al número ingresado por el usuario
    Luego se imprime cual fue el número ingresado
    La variable "sum" declarada en la línea 1, se va aumentando con el operador "+=" en el valor de la variable "n"
    Se utiliza la palabra reservada while, para validar el ciclo, el cual se ejecutará siempre que la variable "n" sea mayor a cero, de ser menor a cero se saldrá del ciclo do while
    Por último, se imprime el total de la suma (Imprimiendo la variable "sum")
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
            sum = 0

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
            sum += dato
            if(list_datas_form1[lon-1] < 0){ retorno = true }
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
                    document.getElementById('resultado-operacion').innerHTML += "<br>Total de la suma: "+ sum
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
