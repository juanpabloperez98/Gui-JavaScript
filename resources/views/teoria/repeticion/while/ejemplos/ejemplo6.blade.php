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
                <h4 class="font-weight-bold">Ejemplo # 6</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que pida al usuario números cada vez más grandes, la condición de parada será cuando se ingrese un número menor al anterior o la suma de los números ingresados sea mayor a 100
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n1 = parseInt(prompt("Ingrese número 1: ")),
        n2 = parseInt(prompt("Ingrese número 2: ")),
        sum = n1 + n2
    while (n1 >= n2 || sum > 20) {
        n2 = parseInt(prompt("Ingrese número 2: "))
        sum += n2
    }
    console.log("Programa finalizado... total suma: " + sum)       
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
                    <code class="javascript">    Se declara la variable "n1" y se iguala al primer número ingresado por el usuario
    Se declara la variable "n2" y se iguala al segundo número ingresado por el usuario
    Se declara la variable "sum" y se iguala a la suma: "n1 + n2"
    Se crea un ciclo while, que se ejecutara siempre que "n1" sea mayor o igual a "n2" O que el valor de la variable "sum" sea mayor a 20
    Dentro del ciclo, se vuelve a pedir un número al usuario y se almacena en la variable "n2" (Para que no quede en un ciclo infinito)
    Ahora la variable "sum" se aumenta en el valor de "n2" con el operador "+="
    Se cierra el ciclo while
    Se imprime el total de la suma 
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
            cond_finish = false, 
            cont = 0,
            sum_show = 1,
            placeholders_form1 = ['Ingrese numero1: ','Ingrese numero2: '],
            list_datas_form1 = [],
            suma = 0

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            lon = list_datas_form1.length
            retorno = false
            texto = ""

            dato1 = parseInt(list_datas_form1[0])
            last_dato = parseInt(list_datas_form1[lon-1]) 
            suma = dato1 + last_dato
            if(dato1 >= last_dato || suma > 20){
                suma += parseInt(list_datas_form1[lon-1])
            }else{ 
                texto = "Programa finalizado... total suma: " + suma 
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
            placeholder_set_inputs()
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                // Valida si se hay que cambiar el placeholder
                if(cont < 1){
                    cont++
                    placeholder_set_inputs()         
                }else{
                    // Validar que el primer dato es mayor al segundo dato
                    retorno = show_results()
                    if(retorno){
                        $('#result').removeClass('desactivate')
                        $('#datos').toggle('explode')
                        $('#exp').toggle('explode')
                    }
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
