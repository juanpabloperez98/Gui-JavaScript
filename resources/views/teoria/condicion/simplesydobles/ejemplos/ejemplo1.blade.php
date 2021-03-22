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
                    Se necesita crear un programa que permita 3 veces ingresar un nombre y una calificación, luego determinar el nombre de la persona que saco la mayor calificación
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var nombre_1 = prompt("Ingrese nombre 1: "),
           calificacion_1 = parseInt(prompt("Ingrese calificación 1: ")),
           nombre_2 = prompt("Ingrese nombre 2: "),
           calificacion_2 = parseInt(prompt("Ingrese calificación 2: ")),
           nombre_3 = prompt("Ingrese nombre 3: "),
           calificacion_3 = parseInt(prompt("Ingrese calificación 3: ")),
           mayor = calificacion_1
    if(calificacion_2 > mayor){
        mayor = calificacion_2
    }else if(calificacion_3 > mayor){
        mayor = calificacion_3
    }
    var ganador = nombre_1
    if(mayor == calificacion_2){
        ganador = nombre_2
    }else if(mayor == calificacion_3){
        ganador = nombre_3
    }
    console.log(ganador + " a sacado el mayor puntaje de los 3")
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                    <form action="" class="text-center desactivate" id="formulario2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato2" placeholder="Ingrese numero 2">
                        </div>
                        <input type="submit" class="btn submit" id="submit2" value="Siguiente">
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
                    <code class="javascript">    Se declara la variable "nombre_1" y se iguala al primer nombre ingresado por el usuario
       Similar, se crea la variable "calificacion_1" y se iguala a lo que ingrese el usuario por pantalla, convertido a entero
       Se declara la variable "nombre_2" y se iguala al segundo nombre ingresado por el usuario
       Se crea la variable "calificacion_2" y se iguala a lo que ingrese el usuario por pantalla, convertido a entero
       Se declara la variable "nombre_3" y se iguala al tercer nombre ingresado por el usuario
       Se crea la variable "calificacion_3" y se iguala a lo que ingrese el usuario por pantalla, convertido a entero
       Después, se crea una variable llamada mayor, esta variable se iguala a la primera calificación ingresada por el usuario
       Luego, se utiliza un if, para validar si la segunda clasificación es mayor a la variable "mayor" (Recordar que el valor de esta variable mayor es igual a "calificacion_1") 
       Si la condición de la línea anterior se cumple, entonces la variable mayor, se actualiza a un nuevo valor que sería "calificacion_2"
       Si, por el contrario, no se cumple la condición, entonces se pasa a validar ahora si "calificacion_3" es mayor a la variable "mayor" (Recordar que el valor de esta variable mayor es igual a "calificacion_1")
       Si "calificacion_3" es mayor a "mayor", entonces se actualiza el valor de "mayor" a "calificacion_3"
       Se cierra el condicional
       Se declara una variable llamada "ganador", se iguala al valor que hay en la variable "nombre_1"
       Ahora se valida si "mayor" es igual a "calificacion_2" (Esto con el fin de saber si la nota mayor le pertenece al nombre2)
       De cumplirse la condición se iguala la variable "ganador" al valor de la variable "nombre_2"
       Si, por el contrario, esta condición anterior no se cumple, ahora se valida si "mayor" es igual a "calificacion_3"
       De cumplirse la condición de la línea anterior, entonces se actualiza la variable "ganador" a el valor de la variable "nombre_3"
       Se cierra el condicional
       Por último, se imprime la variable "ganador"
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
            dato2 = 0,
            cont = 0,
            max_inputs = 3, 
            placeholders_form1 = ['Ingrese nombre 1: ','Ingrese nombre 2: ','Ingrese nombre 3: '],
            placeholders_form2 = ['Ingrese calificación 1: ','Ingrese calificación 2: ','Ingrese calificación 3: '],
            list_datas_form1 = [],
            list_datas_form2 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) && (dato >= 0 && dato <= 5)  ? true:false 
        }

        var validar_str = (dato) => {
            return dato != "" ? true:false 
        }

        var placeholder_set_inputs = (num) => {
            if(num == 1){
                $('#dato').attr('placeholder',placeholders_form1[cont])
            }else{
                $('#dato2').attr('placeholder',placeholders_form2[cont])
            }
        }

        const show_results = () => {
            var nombre_1 = list_datas_form1[0]
            calificacion_1 = list_datas_form2[0]
            nombre_2 = list_datas_form1[1]
            calificacion_2 = list_datas_form2[1]
            nombre_3 = list_datas_form1[2]
            calificacion_3 = list_datas_form2[2]
            mayor = calificacion_1
            if(calificacion_2 > mayor){
                mayor = calificacion_2
                if(calificacion_3 > mayor){
                    mayor = calificacion_3
                }
            }else if(calificacion_3 > mayor){
                mayor = calificacion_3
            }

            var ganador = nombre_1
            if(mayor == calificacion_2){
                ganador = nombre_2
            }else if(mayor == calificacion_3){
                ganador = nombre_3
            }
            $('#resultado-operacion').text(ganador + " a sacado el mayor puntaje de los 3")

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
            placeholder_set_inputs(1)
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar_str(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario').toggle('explode')
                $('#formulario2').toggle('explode')
                placeholder_set_inputs(2)
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
        })

        $('#formulario2').submit((e) => {
            e.preventDefault()
            var valor = $('#dato2').val()
            if(validar(valor)){
                dato2 = parseInt(valor)
                list_datas_form2.push(dato2)
                cont ++
                if(cont < max_inputs){
                    $('#formulario').toggle('explode')
                    $('#formulario2').toggle('explode')
                    placeholder_set_inputs(1)
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    show_results()
                }
                $('#formulario')[0].reset()
                $('#formulario2')[0].reset()
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
