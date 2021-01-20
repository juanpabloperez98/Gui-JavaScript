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
                <h4 class="font-weight-bold">Ejemplo # 4</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realice un programa que haga la transpuesta de una matriz la cual será de un orden nxm (ingresados por el usuario) y llenadas de manera aleatorio con números del 1 al 10
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingrese el número de filas: ")),
        m = parseInt(prompt("Ingrese el número de columnas: ")),
        matriz = [],
        matriz_T = []
    if (n > 1 && n < 6 && m > 1 && m < 6) {
        for (var i = 0; i < n; i++) {
            var fila = []
            for (var j = 0; j < m; j++) {
                num = parseInt(Math.random() * 11)
                fila.push(num)
            }
            matriz.push(fila)
        }
        for (var i = 0; i < m; i++) {
            var fila = []
            for (var j = 0; j < n; j++) {
                num = matriz[j][i]
                fila.push(num)
            }
            matriz_T.push(fila)
        }
        console.log(matriz)
        console.log(matriz_T)
    }else{ console.log("El orden de las matrices no es permitido") }
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
                    <code class="javascript">    Se crea la variable "n" y se iguala al valor de las filas ingresado por el usuario
    Después se crea la variable "m" y se iguala al valor de las filas ingresado por el usuario
    Se crea la variable "matriz" y se iguala a una lista vacía (En esta se van a guardar los valores aleatorios)
    Se crea la variable "matriz_T" y se iguala a una lista vacía (En esta se van a guardar los valores transpuestos)
    Se valida si el valor de "n" es mayor a 1 y menor a 6 y también si el valor de "m" es mayor a 1 y menor a 6
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un número aleatorio entre 0 y 10
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz de números aleatorios), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < m", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala al valor que se encuentre en la variable "matriz" en la posición "[ j ][ i ]" (Posición invertida para hacer la transpuesta)
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz de números aleatorios), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se imprime la matriz de números aleatorios
    Y se imprime la matriz invertida
    Si la condición de la línea 5 no se cumple, entonces se imprime que el orden no es permitido
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
            placeholders_form1 = ['Ingrese el número de filas: ','Ingrese el número de columnas: '],
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
                m = parseInt(list_datas_form1[1]),
                texto = "",
                matriz = [],
                matriz_T = []
            if (n > 1 && n < 6 && m > 1 && m < 6) {
                for (var i = 0; i < n; i++) {
                    var columna = []
                    for (var j = 0; j < m; j++) {
                        num = parseInt(Math.random() * 11)
                        columna.push(num)
                    }
                    matriz.push(columna)
                }
                for (var i = 0; i < m; i++) {
                    var columna = []
                    for (var j = 0; j < n; j++) {
                        num = matriz[j][i]
                        columna.push(num)
                    }
                    matriz_T.push(columna)
                }
                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += matriz[i][j] + "     "
                    }
                    texto += "<br>"
                }
                texto += "<br>"
                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += matriz_T[i][j] + "     "
                    }
                    texto += "<br>"
                }
            }else{ texto = "El orden de las matrices no es permitido" }
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
                cont++
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
