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
                    Realizar un programa que pida dos números enteros e imprima los números NO pares comprendidos entre el número 1 ingresado y el número 2 (El número 1 debe ser menor al número 2 y la diferencia entre uno y el otro no puede ser mayor a 10)
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n1 = parseInt(prompt("Ingrese número 1: ")),
        n2 = parseInt(prompt("Ingrese número 2: ")),
        diferencia = n2 - n1
    if (diferencia > 0 && diferencia <= 10) {
        while (n1 != (n2 + 1)) {
            if (n1 % 2 != 0) {
                console.log("Número NO par: " + n1)
            }
            n1++
        }
    } else { console.log("La diferencia es mayor a 10") }
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
                    <code class="javascript">    Se declara la variable "n1", y se iguala al primer número ingresado por el usuario
    Se declara la variable "n2", y se iguala al segundo número ingresado por el usuario
    Ahora se declara la variable "diferencia", su valor va ser igual a la diferencia entre "n2" y "n1"
    Se valida si el valor de "diferencia" es mayor a cero y menor o igual a 10 (Esto para garantizar que la diferencia entre un número y el otro no sea mayor a 10 ni negativo)
    Se declara un ciclo while, que se ejecutara siempre que "n1" sea diferente que "n2 + 1" (Es "n2 + 1" es para garantizar que se tomara en cuenta el valor de "n2")
    Dentro del ciclo, se valida si la operación módulo "n1 % 2" es diferente de cero (Esto es para ver si el valor de "n1" es un número NO par)
    Si la condición se cumple, entonces se imprime "n1" diciendo que es un número NO par
    Se cierra el condicional de la línea 6
    La variable "n1" aumentara en 1 con el operador "++" (Se aumenta "n1" puesto que el ciclo dice que se ejecutara hasta que "n1" sea diferente de "n2+1") 
    Se cierra el ciclo while de la línea 5
    Si la condición de la línea 4 no se cumple entonces, se imprime que la diferencia entre "n2-n1" es mayor a 10
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
            placeholders_form1 = ['Ingrese número 1: ','Ingrese número 2: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n1 = parseInt(list_datas_form1[0]),
                n2 = parseInt(list_datas_form1[1]), 
                diferencia = n2 - n1,
                texto = ""

            if (diferencia > 0 && diferencia <= 10) {
                while (n1 != (n2 + 1)) {
                    if (n1 % 2 != 0) {
                        texto += "Número NO par: " + n1 +"<br>"
                    }
                    n1++
                }
            } else { texto = "La diferencia es mayor a 10" } 
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
