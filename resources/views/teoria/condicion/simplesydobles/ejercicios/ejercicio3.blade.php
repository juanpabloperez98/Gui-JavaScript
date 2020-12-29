@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejercicios.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="row mx-auto pt-md-5" id="content">
        <div class="col-md-12 mt-md-5 text-center">
            <h1>Ejercicio #3</h1>
        </div>
    </div>


    <div class="row mx-auto mt-md-4" id="explain">
        <div class="col-md-8 mx-auto" id="exp1">
            <h2 class="text-md-center mt-md-3">Enunciado</h2>
            <br>
            <div class="content">
                <p class="text-left">
                    Escribir un programa que solicite al usuario una letra y, si es una vocal, muestre el mensaje "es vocal". Se debe validar que el usuario ingrese sólo un carácter. Si ingresa un string de más de un carácter, informarle que no se puede procesar el dato
                </p>
                <div class="text-center my-4">
                    <a href="#" id="empezar" class="button">Empezar ejercicio</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto desactivate" style="max-width: 1111px" id="desarrollo">
        <div class="mx-auto col-md-5 mt-md-5 p-0">
            <pre id="code">
                <code class="javascript">  var letra = prompt("Ingresa una letra: ")
  <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">if(letra.length == 1){</span></span>
    <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">if(letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u'){</span></span>
          console.log("Es una vocal")
    }else{ console.log("No es una vocal") }
  <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">}else{ console.log("No se puede pocesar el dato") }</span></span>
                </code>
            </pre>
        </div>
    
        <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
            <a href="#" class="btn" id="exp">Ver explicación</a>
        </div>
    
        <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
            <pre>
                <code class="javascript">    Primero se pide el dato al usuario y se guarda en la variable "letra"
    Se valida si la longitud de "letra" (el número de caracteres que tenga el string), es igual a 1 (<span style="color: rgba(244, 219, 79, 1); font-weight: bold)">NOTA</span>: se utiliza para validar de que lo ingresado sea un solo carácter)
    Ahora se valida que la variable letra sea igual a una vocal (a,e,i,o,u)
    Si la condición se cumple, entonces se imprime que es una vocal
    Si la condición por lo contrario no se cumple, entonces se imprime que no es una vocal
    Si la condición de la línea 2 no se cumple, entonces se imprime que no se puede procesar el dato
                </code>
            </pre>
            <div class="text-md-center">
                <a href="#" class="btn" id="reiniciar">Reiniciar</a>
            </div>
        </div>
    
        <div class="mx-auto col-md-5 mt-md-5" id="form-selects">
            <h4 id="linea">Linea # </h4>
            <p id="explain_code" class="text-left"></p>
            <form id="formulario" class="text-left" action="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="select" id="select1" value="1">
                    <label class="form-check-label" for="select1" id="label1">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="select" id="select2" value="2">
                    <label class="form-check-label" for="select2" id="label2">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="select" id="select3" value="3">
                    <label class="form-check-label" for="select3" id="label3">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="select" id="select4" value="4">
                    <label class="form-check-label" for="select4" id="label4">
                    </label>
                </div>
                <div class="boton text-center">
                    <button type="submit" class="btn">Probar</button>
                </div>
            </form>
        </div>


    </div>

@endsection

@section('scripts')

    <script>
        var cont = 1,
            num_total = 3

        var lineas = {
            '1': {
                'line_code': 2,
                'explaincode':'Se necesita validar si el string ingresado por el usuario es de un solo carácter, ¿Qué línea de código debería venir aquí?',
                'correct_line': 3,
                'values': ['if(letra == 1){','if(letra.length = 1){','if(letra.length == 1){','if(letra.length != 1){']
            },
            '2': {
                'line_code': 3,
                'explaincode':'Se tiene que validar si la variable letra es igual a una vocal, ¿Qué línea de código debería venir aquí?',
                'correct_line': 1,
                'values': ['if(letra == "a" || letra == "e" || letra == "i" || letra == "o" || letra == "u"){','if(letra == "aeiou"){','if(letra = "a" || letra = "e" || letra = "i" || letra = "o" || letra = "u"){','if(letra != "abcdefghijklmnñopqrstuvwxyz"){']
            },
            '3': {
                'line_code': 7,
                'explaincode':'Si la condición de la línea 2 no se cumple, entonces se imprime que no se puede procesar un dato, ¿Qué línea de código debería venir aquí?',
                'correct_line': 3,
                'values': ['}{ console.log("No se puede pocesar el dato") }','}else{ "No se puede pocesar el dato" }','}else{ console.log("No se puede pocesar el dato") }','{ console("No se puede pocesar el dato") }']
            }
        }

        var addLinesInitial = () => {
            $('#linea').text('Linea #' + lineas[cont].line_code)
            $('#explain_code').text(lineas[cont].explaincode)
            for (let i = 0; i < 4; i++) {
                var identificador = '#label' + (i + 1)
                const element = lineas[cont].values[i]
                $(identificador).text(element)
            }
        }

        // console.log(lineas.length)

        $('#empezar').on('click', (e) => {
            e.preventDefault() //Para que al dar click no se recargue la pagina
            $('#explain').addClass('desactivate')
            $('#desarrollo').removeClass('desactivate')
            addLinesInitial()
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var line = $('input[name="select"]:checked').val(),
                line_higlight = '#linea-higlight' + cont,
                line_activate = '#linea-' + cont,
                cont_higlight = '#cont-higlight' + cont

            if (lineas[cont].correct_line == parseInt(line)) {
                $(line_higlight).toggle('')
                $(line_activate).toggle('')
                $('#formulario')[0].reset()
                cont++
                if (cont <= num_total) {
                    addLinesInitial()
                    $(cont_higlight).removeClass('line-higlight')
                } else {
                    $(cont_higlight).removeClass('line-higlight')
                    $('#form-selects').toggle('')
                    $('#botones').toggle('')
                }
            } else {
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('¿Estas seguro? <br>revisa bien');
                msg.delay(2)
            }
        })


        $('#exp').on('click', (e) => {
            e.preventDefault()
            $('#code-explain').toggle('')
            $('#botones').toggle('')
        })

        $('#reiniciar').on('click', (e) => {
            e.preventDefault()
            location.reload()
        })

    </script>

@endsection
