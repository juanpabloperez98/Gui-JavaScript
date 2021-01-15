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
                <h4 class="font-weight-bold">Ejemplo # 1</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que calcula los números pares entre un número n1 y otro número n2 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var numero1 = parseInt(prompt("Ingrese numero1: ")),
           numero2 = parseInt(prompt("Ingrese numero2: "))
    if (numero2 > numero1) {
        for (var i = numero1; i <= numero2; i++) {
            i % 2 == 0 ? console.log(i):null
        }
    }else{ console.log("El número 1 debe ser mayor al número 2") }        
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
                    <code class="javascript">    Se crea la variable "numero1" y se iguala a un valor ingresado por el usuario convertido a entero
    Se crea la variable "numero2" y se iguala a un valor ingresado por el usuario convertido a entero
    Se valida si el valor de "numero2" es mayor al de "numero1"
    De cumplirse la condición anterior, entonces se declara un ciclo for que va desde el valor de "numero1" hasta el valor de "numero2" incluyéndolo, e ira aumentando la variable "i" en 1
    Con una condición ternaria, se valida si el módulo del valor de "i" entre 2 es igual a cero (Con la operación módulo se valida que el número sea primo si es igual a cero), de cumplirse la condición se imprime el valor de la variable "i", de no cumplirse la condición entonces no se hace nada (se coloca null)
    Se cierra el ciclo for
    Si la condición de la línea 3 no se cumple, entonces se imprime que el número 1 debe ser mayor al número 2
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
            max_inputs = 2, 
            cont = 0,
            placeholders_form1 = ['Ingrese numero1: ','Ingrese numero2: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var numero1 = parseInt(list_datas_form1[0]),
            numero2 = parseInt(list_datas_form1[1]),
            texto = ""
            if (numero2 > numero1) {
                for (var i = numero1; i <= numero2; i++) {
                    i % 2 == 0 ? texto += i+' ' :null
                }
            }else{ texto = "El número 1 debe ser mayor al número 2" }        
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
