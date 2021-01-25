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
                    Realizar un programa que le permita al usuario ingresar una serie de números (5) y guardarlos en una lista, después se ordenaran desde el ultimo ingresado hasta el primero y se realizara en una función llamada reordenar_numeros()
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   function ordenar_numeros(lista){
        return lista.reverse()
    }
    numeros_lista = []
    for (var i = 0; i < 5; i++) {
        var num = parseInt(prompt("Ingrese número: "))
        numeros_lista.push(num)
    }
    console.log(numeros_lista)
    numeros_lista = ordenar_numeros(numeros_lista)
    console.log(numeros_lista)
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
                    <code class="javascript">    Se crea la función "ordenar_numeros()" que recibe como parámetro una lista y se guardara en la variable "lista"
    Se retorna la lista pero invertida (Del ultimo al primero) utilizando la función reverse() (NOTA: esta función reordena del ultimo al primer elemento de la lista)
    Se cierra la función
    Se crea una lista llamada "números_lista" esta lista guardara los números ingresados por el usuario
    Se declara un ciclo for que ira desde "i = 0" hasta "i < 5" y se ira incrementando de 1 en 1
    Se declara la variable "num" y se iguala al número que ingrese el usuario
    Se agrega a la lista de números el número almacenado en la variable "num"
    Se cierra el ciclo for
    Se imprime la variable "numeros_lista"
    Ahora se actualiza el valor de la lista "numeros_lista" a lo que retorne la función "ordenar_numeros", pasándole como valores la misma lista 
    Se imprime la lista reordenada
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
            max_inputs = 5, 
            cont = 0,
            placeholders_form1 = ['Ingrese número: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            lista_ = list_datas_form1
            texto = ""+lista_
            // console.log(texto)
            lista = list_datas_form1.reverse()
            texto2 = "<br>" + lista
            $('#resultado-operacion').html(texto+texto2)
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
                if(parseInt(valor) < 10){ var msg = alertify.error('Dato no valido'); }else { var msg = alertify.error('El dato debe ser menor o igual a 10'); }
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

