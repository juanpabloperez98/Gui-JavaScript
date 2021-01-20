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
                    Crear una matriz de 5 filas y n columnas (se pide al usuario y no mayor a 5). Rellenarlo con números aleatorios entre 0 y 9. Al final se deberá mostrar la matriz creada.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingresa el número de columnas: "))
    if (n >= 0 && n < 5) {
        var matriz = []
        for (var i = 0; i < 5; i++) {
            var fila = []
            for (var j = 0; j < n; j++) {
                num = parseInt(Math.random() * 11) 
                fila.push(num)
            }
            matriz.push(fila)
        }
        console.log(matriz)
    } else { console.log("Número de columnas no valido") }
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
                    <code class="javascript">    Se crea una variable "n" y se iguala al número de columnas ingresado por el usuario
    Luego se valida que la variable "n" sea mayor a cero o menor a 5
    Se crea la variable "matriz" y se iguala a una lista vacía
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < 5", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un número aleatorio entre 0 y 10
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno 
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz completa), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se imprime la matriz resultante
    Si la condición de la línea 2 no se cumple, entonces se imprime que el número de columnas no es valido
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
            placeholders_form1 = ['Ingresa el número de columnas:'],
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
                texto = ""
            if (n >= 0 && n < 5) {
                var matriz = []
                for (var i = 0; i < 5; i++) {
                    var columna = []
                    for (var j = 0; j < n; j++) {
                        num = parseInt(Math.random() * 11) 
                        columna.push(num)
                    }
                    matriz.push(columna)
                }
                for (let i = 0; i < 5; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += matriz[i][j] + "     "
                    }
                    texto += "<br>"
                }
            } else { texto = "Número de columnas no valido" }
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
