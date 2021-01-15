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
                    Realizar un programa que permita almacenar en una lista un número n de datos (No mayor a 10) ingresados por el usuario (No importa si son de diferente tipo de datos), luego se pide copiar los datos de esta lista a otra, pero de manera inversa
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var lista1 = [],
        lista2 = [],
        num_datos = parseInt(prompt("Cuantos datos desea ingresar: "))
    if (num_datos > 0 && num_datos <= 10) {
        for (let i = 0; i < num_datos; i++) {
            var dato = prompt("Ingrese un dato: ")
            lista1.push(dato)
        }
        var lon = lista1.length - 1
        do {
            var dato2 = lista1[lon]
            lista2.push(dato2)
            lon --
        } while (lon >= 0);
        console.log(lista1)
        console.log(lista2)
    } else { console.log("Numero de datos no validos") }
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
                    <code class="javascript">    Se crea una variable llamada "lista1", esta se iguala a una lista vacía
    Se crea una variable llamada "lista2", esta se iguala a una lista vacía
    Se crea ahora una variable llamada "num_datos", esta se iguala a un número que ingrese el usuario
    Se valida si la variable "num_datos" es mayor a cero o menor o igual a diez
    Se cumplirse la condición anterior, entonces se declara un ciclo for, que ira desde "i=0" hasta "i < num_datos" (El número de datos que ingreso el usuario), su incremento ira de 1 en 1
    Se declara la variable "dato" y se iguala a un dato que ingrese el usuario
    Se agrega a la variable "lista1" el dato ingresado por el usuario
    Se cierra el ciclo for de la línea 5
    Ahora se declara una variable llamada "lon" y se iguala a la longitud de "lista1" restándole un 1. (Esta variable servirá como índice para poder obtener los datos de "lista1" desde el ultimo hasta el primero)
    Se declara un ciclo do while (Iniciando por el do)
    Igual que en la línea 6, se crea una variable llamada "dato2", solo que esta variable se iguala al dato que se encuentre en "lista1" en el índice ["lon"] (Esto para obtener los datos de la lista desde el ultimo hasta el primero)
    Ahora a la variable "lista2", se le agrega el dato obtenido en la variable "dato2"
    La variable "lon" (O índice), se disminuye en 1
    Se utiliza la palabra reservada while, para validar el ciclo, el cual se ejecutará siempre que la variable "lon" sea mayor o igual a 0
    Se imprime la variable "lista1" que contiene almacenada la primera lista
    Se imprime la variable "lista2" que contiene almacenada la segunda lista
    Por último, si la condición de la línea 4 no se cumple, entonces se imprime que los datos no son validos
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
            placeholders_form1 = ['Cuantos datos desea ingresar: ','Ingrese un dato: '],
            list_datas_form1 = [],
            lista1=[]

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
                num_datos = parseInt(list_datas_form1[0]),
                lista2 = []

            element = list_datas_form1[lon-1]
            lista1.push(element)
            sum_finish += 1
            if(sum_finish == num_datos){
                // console.log(lista1)
                var lon = lista1.length - 1
                do {
                    var dato2 = lista1[lon]
                    lista2.push(dato2)
                    lon --
                } while (lon >= 0);
                texto = lista1+"<br>"
                texto += lista2
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
               val = true
            }
            if(val){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                // Valida si se hay que cambiar el placeholder
                if(cont < 1){
                    cont++
                    placeholder_set_inputs()   
                    if(parseInt(dato1) > 10  || parseInt(dato1) <= 0){ 
                        $('#datos').toggle('explode')
                        $('#exp').toggle('explode')
                        $('#result').toggle('explode')     
                        $('#resultado-operacion').html("Numero de datos no validos")
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
