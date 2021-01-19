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
                    Escriba un programa que permita crear una lista de palabras y que, a continuación, pida una palabra y diga cuántas veces aparece esa palabra en la lista
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var lista_palabras = [],
        cont = 0
    for (var i = 0; i < 5; i++) {
        var palabra = prompt("Ingrese una palabra: ")
        lista_palabras.push(palabra)
    }
    var palabra_buscar = prompt("Ingrese una palabra a buscar: ")
    for (var i = 0; i < 5; i++) {
        var palabra = lista_palabras[i]
        palabra_buscar == palabra ? cont ++ : null
    }
    console.log("La palabra aparece: "+ cont + " veces")
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
                    <code class="javascript">    Se crea la variable "lista_palabras" y se iguala a una lista vacía
    Luego se crea una variable llamada "cont" esta variable servirá para saber cuantas veces se repite una palabra 
    Se declara un ciclo for, el cual inicia con un "i=0" y va hasta "i < 5", su valor de incremento será de 1 en 1
    Dentro de este ciclo, se declara una variable llamada "palabra" y se iguala a lo que ingrese el usuario
    Luego a "lista_palabras" se le agrega la variable "palabra" que contiene el valor de la palabra ingresada
    Se cierra el ciclo for de la línea 3
    Ahora se declara una variable llamada "palabra_buscar", esta se iguala a la palabra ingresada por el usuario
    Se declara otro ciclo for, exactamente igual que en la línea 3
    Dentro de este ciclo for, se declara nuevamente una variable llamada "palabra", pero esta se iguala ahora, al valor que se encuentre en la lista de palabras en la posición "[ i ]"
    Con una condición ternaria, se valida si la variable "palabra_buscar" es igual a la variable "palabra", de ser así, la variable "cont" aumenta en 1, de lo contrario no se hace nada
    Se cierra el ciclo for de la línea 8
    Se imprime al final el número de veces que se encontró la palabra a buscar
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
            placeholders_form1 = ['Ingrese una palabra: ','Ingrese una palabra a buscar: '],
            list_datas_form1 = []

        var validar = (dato) => {
            // dato = parseInt(dato)
            return dato != "" ? true:false 
        }

        var placeholder_set_inputs = (index) => {
            $('#dato').attr('placeholder',placeholders_form1[index])
        }

        const show_results = () => {
            var texto = "",
                retorno = false,
                lista_palabras = [],
                cont_ = 0

            cont ++
            if(cont == 5){
                placeholder_set_inputs(1)
            }

            if(cont == 6){
                for (let i = 0; i < 5; i++) {
                    lista_palabras.push(list_datas_form1[i])
                }
                var palabra_buscar = list_datas_form1[5]
                for (var i = 0; i < 5; i++) {
                    var palabra = lista_palabras[i]
                    palabra_buscar == palabra ? cont_ ++ : null
                }
                texto = "La palabra aparece: "+ cont_ + " veces"
                retorno = true
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
            placeholder_set_inputs(0)
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
