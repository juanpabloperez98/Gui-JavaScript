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
                    Realice un programa que permite guardar un número determinado de notas (No mayor a 6) y los guarde en una lista llamada notas, luego calcule el promedio de las notas ingresadas
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var num_notas= parseInt(prompt("Ingrese el número de notas: "))
    if(num_notas > 0  && num_notas <= 5){
        var lista_notas = [],
            sum = 0
        for (var i = 0; i < num_notas; i++) {
            var nota = parseFloat(prompt("Ingrese la nota: "))
            sum += nota
            lista_notas.push(nota)
        }   
        var promedio = sum / lista_notas.length
        console.log("El promedio de las notas ingresadas es: ",promedio)
    }else{ console.log("El número de notas no es valido") }        
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
                    <code class="javascript">    Se crea la variable "num_notas" en esta variable se guardarán el número de notas que ingrese el usuario
    Se valida que el número de notas ingresado sea mayor a cero y menor o igual a cinco
    Si se cumple la condición anterior, entonces se crea una variable llamada "lista_notas", esta variable almacena una lista vacía (A la que se le irán agregando valores)
    Se crea la variable "sum" y se iguala a cero (Esta variable llevara la suma de las notas ingresadas para poder sacar el promedio)
    Se utiliza un ciclo for, que inicia en "i = 0" y va hasta "i < num_notas" (El número de notas ingresado por el usuario), su incremento será de 1 en 1
    Dentro del ciclo, se crea una variable llamada "nota", esta variable se iguala a una nota que ingresa el usuario (Convertida a flotante). (<span style="color: rgba(244, 219, 79, 1)">NOTA</span>: esta acción se repetirá un número determinado de veces establecido por la variable "num_notas")
    La variable "sum" aumenta en el valor de la nota ingresada por el usuario
    Se agrega a la lista de notas, la nota ingresada por el usuario
    Se cierra el ciclo for
    Se declara la variable "promedio" y se iguala a la operación de dividir "sum" entre la cantidad de notas ingresadas por el usuario (Para obtener la cantidad de notas ingresadas, se obtiene la longitud de la lista)
    Se imprime el valor de la variable "promedio"
    Si la condición de la línea 2 no se cumple, entonces se imprime que el número ingresado no es valido
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
            sum_finish = 0,
            placeholders_form1 = ['Ingrese el número de notas: ','Ingrese la nota: '],
            list_datas_form1 = [],
            lista_notas=[]

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var validar_float = (dato) => {
            dato = parseFloat(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {

            var retorno = false,
                texto = "",
                lon = list_datas_form1.length,
                num_notas = parseInt(list_datas_form1[0])

            nota = parseFloat(list_datas_form1[lon-1])
            lista_notas.push(nota)
            sum_finish += 1
            if(sum_finish == num_notas){
                sum = 0
                for (var i = 0; i < num_notas; i++) {
                    sum += lista_notas[i]
                }
                var promedio = sum / lista_notas.length
                texto = "El promedio de las notas ingresadas es: " + promedio
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
            if(cont == 0){
               val = validar(valor)  
            }else{
               val = validar_float(valor)
            }
            if(val){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                // Valida si se hay que cambiar el placeholder
                if(cont < 1){
                    cont++
                    placeholder_set_inputs()   
                    if(parseInt(dato1) > 6  || parseInt(dato1) <= 0){ 
                        $('#datos').toggle('explode')
                        $('#exp').toggle('explode')
                        $('#result').toggle('explode')     
                        $('#resultado-operacion').html("El número de notas no es valido")
                    }      
                }else{
                    // Validar que el primer dato es mayor al segundo dato
                    retorno = show_results()
                    if(retorno){
                        $('#datos').toggle('explode')
                        $('#exp').toggle('explode')
                        $('#result').toggle('explode')
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
