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
                    Crear un programa que realice la suma entre una matriz m1 y otra m2, el orden de la matriz se le deberá pedir al usuario y se deberán llenar con números aleatorios de 1 al 10
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingresa el orden de las matrices: ")),
        m1 = [],
        m2 = [],
        m1_m2 = []
    for (var i = 0; i < n; i++) {
        var fila = []
        for (var j = 0; j < n; j++) {
            num = parseInt(Math.random() * 11)
            fila.push(num)
        }
        m1.push(fila)
    }
    for (var i = 0; i < n; i++) {
        var fila = []
        for (var j = 0; j < n; j++) {
            num = parseInt(Math.random() * 11)
            fila.push(num)
        }
        m2.push(fila)
    }
    for (var i = 0; i < n; i++) {
        var suma = 0,
            fila = []
        for (var j = 0; j < n; j++) {
            suma = m1[i][j] + m2[i][j]
            fila.push(suma)
        }
        m1_m2.push(fila)
    }
    console.log(m1)
    console.log(m2)
    console.log(m1_m2)
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
                    <code class="javascript">    Se declara la variable "n" y se iguala al orden de matrices ingresado por el usuario
    Se declara la variable "m1" que es igual a una lista vacía (En esta se guardaran los datos de la matriz 1)
    Se declara la variable "m2" que es igual a una lista vacía (En esta se guardaran los datos de la matriz 2)
    Se declara la variable "m1_m2" que es igual a una lista vacía (En esta se guardaran los datos de la suma de las matrices "m1" y "m2")
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un número aleatorio entre 0 y 10
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno 
    Ahora por fuera del ciclo interno, se agrega a la lista "m1" (La que representa la matriz 1), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se crea otro ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un número aleatorio entre 0 y 10
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno 
    Ahora por fuera del ciclo interno, se agrega a la lista "m2" (La que representa la matriz 2), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se crea un tercer ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "suma" que se iguala a cero (En esta variable se guardara la suma de los elementos de las dos matrices).
    Se declara una variable "columna" que esta variable se iguala a una lista vacía (Que representa las filas de la matriz de sumas)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "suma" y se iguala al resultado de la suma entre "m1[ i ][ j ]" y "m2[ i ][ j ]"
    Ahora a la lista "fila" se le agrega el valor de la variable "suma"
    Se cierra el ciclo for interno 
    Ahora por fuera del ciclo interno, se agrega a la lista "m1_m2" (La que representa la matriz de sumas), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se imprime la matriz "m1"
    Se imprime la matriz "m2"
    Se imprime la matriz "m1_m2"
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
            placeholders_form1 = ['Ingresa el orden de las matrices:'],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
                m1 = [],
                m2 = [],
                m1_m2 = [],
                texto = ""
                for (var i = 0; i < n; i++) {
                    var columna = []
                    for (var j = 0; j < n; j++) {
                        num = parseInt(Math.random() * 11)
                        columna.push(num)
                    }
                    m1.push(columna)
                }
                for (var i = 0; i < n; i++) {
                    var columna = []
                    for (var j = 0; j < n; j++) {
                        num = parseInt(Math.random() * 11)
                        columna.push(num)
                    }
                    m2.push(columna)
                }
                for (var i = 0; i < n; i++) {
                    var suma = 0,
                        columna = []
                    for (var j = 0; j < n; j++) {
                        suma = m1[i][j] + m2[i][j]
                        columna.push(suma)
                    }
                    m1_m2.push(columna)
                }


                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += m1[i][j] + "     "
                    }
                    texto += "<br>"
                }

                texto += "<br>"

                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += m2[i][j] + "     "
                    }
                    texto += "<br>"
                }

                texto += "<br>"

                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += m1_m2[i][j] + "     "
                    }
                    texto += "<br>"
                }
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
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                show_results()
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
