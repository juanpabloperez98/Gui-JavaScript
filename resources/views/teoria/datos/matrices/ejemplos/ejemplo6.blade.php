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
                    Crear una matriz donde el orden es de nxn ingresado por el usuario y los valores de la matriz son ingresados también por el usuario, al final se deberá mostrar la suma de todos sus valores 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingrese orden de la matriz: ")),
        matriz = []
    if (n >= 0 && n <= 4) {
        for (var i = 0; i < n; i++) {
            var fila = []
            for (var j = 0; j < n; j++) {
                num = parseInt(prompt("Ingrese número: ")),
                fila.push(num)
            }
            matriz.push(fila)
        }
        var suma = 0
        for (var i = 0; i < n; i++) {
            for (var j = 0; j < n; j++) {
                suma += matriz[i][j]
            }
        }
        console.log(matriz)
        console.log("Suma de la matriz: " + suma)
    }else{ console.log("Orden de la matriz no valido") }
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
                    <code class="javascript">    Se crea una variable llamada "n" y se iguala al valor ingresado por el usuario
    Luego se declara una variable llamada "matriz" y se iguala a una lista vacía
    Se valida si "n" es mayor o igual a cero y también si es menor o igual a 4 (Para validar que este en ese rango de 0 - 4)
    Se crea un ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Dentro de este ciclo superior, se declara la variable "fila", esta variable se iguala a una lista vacía (Que representa las filas de la matriz)
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    Se crea una variable llamada "num" y se iguala a un dato que ingresa el usuario por pantalla
    Ahora a la lista "fila" se le agrega el valor de la variable "num"
    Se cierra el ciclo for interno
    Ahora por fuera del ciclo interno, se agrega a la lista "matriz" (La que representa la matriz de números aleatorios), la lista "fila" (Que contiene los datos agregados del ciclo interno anterior)
    Se cierra el ciclo externo
    Se declara una variable "suma" esta variable se iguala a cero
    Se vuelve a crear un ciclo for, que empieza en "i = 0" y va hasta "i < n", su incremento es de 1 en 1
    Luego se declara un ciclo for interno (Que sirve para agregar datos a la lista "fila"), este ciclo for vas desde "j=0" hasta "j < n" y su incremento será de 1 en 1
    La variable "suma" ira aumentando en el valor que se obtenga de la matriz en la posición "[ i ][ j ]"
    Se cierra el ciclo for interno
    Se cierra el ciclo externo
    Se imprime la matriz creada
    Se imprime la suma de todos los elementos de la matriz
    Si la condición de la línea 3 no se cumple, entonces se imprime que el orden de la matriz no es valido
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
            cont = 0,
            placeholders_form1 = ['Ingrese orden de la matriz: ','Ingrese número: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) && dato <20 && dato > 0 ? true:false 
        }

        var placeholder_set_inputs = (i) => {
            $('#dato').attr('placeholder',placeholders_form1[i])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
                texto = "",
                matriz = []
            if (n >= 0 && n <= 4) {
                var p = 1
                for (let i = 0; i < n; i++) {
                    fila = []
                    for (let j = 0; j < n; j++) {
                        const element = list_datas_form1[p];
                        fila.push(element)
                        p++
                    }   
                    matriz.push(fila)
                }
                console.log(matriz)
                var suma = 0
                for (let i = 1; i < list_datas_form1.length; i++) {
                    suma += parseInt(list_datas_form1[i]);
                }
                for (let i = 0; i < n; i++) {
                    for (let j = 0; j < n; j++) {
                        texto += matriz[i][j] + "     "
                    }
                    texto += "<br>"
                }
                texto += "<br>"
                texto += "Suma de la matriz: "+ suma
            }else{ texto = "Orden de la matriz no valido" }
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
            placeholder_set_inputs(0)
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                cont ++
                if(cont < (parseInt(list_datas_form1[0])*parseInt(list_datas_form1[0]) + 1) && (parseInt(list_datas_form1[0]) >=0 && parseInt(list_datas_form1[0]) <= 4) ){
                    placeholder_set_inputs(1)
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    if((parseInt(list_datas_form1[0]) >=0 && parseInt(list_datas_form1[0]) <= 4)){
                        show_results()
                    }else{
                        $('#resultado-operacion').html("Orden de la matriz no valido")
                    }
                    
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                if(parseInt(valor) < 20){ var msg = alertify.error('Dato no valido'); }else { var msg = alertify.error('El dato debe ser menor o igual a 20'); }
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
