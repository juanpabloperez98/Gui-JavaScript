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
            <h1>Ejercicio #2</h1>
        </div>
    </div>


    <div class="row mx-auto mt-md-4" id="explain">
        <div class="col-md-8 mx-auto" id="exp1">
            <h2 class="text-md-center mt-md-3">Enunciado</h2>
            <br>
            <div class="content">
                <p class="text-left">
                    Escribir un programa que solicite al usuario una letra y, si es una vocal, muestre el mensaje "es vocal". Se debe validar que el usuario ingrese sólo un carácter. Si ingresa un string de más de un carácter, informarle que no se puede procesar el dato. La validación se debe hacer utilizando la estructura condicional switch
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
  <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"></span> <span id="linea-1" class="desactivate">if(letra.length > 0 && letra.length < 2){</span></span>
      switch(letra){
          case'a':case 'A':{
              console.log("Vocal A")
              break
          }
          <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">case'e':case 'E':{</span></span>
              console.log("Vocal E")
              break
          }
          case'i':case 'I':{
              console.log("Vocal I")
              break
          }
          case'o':case 'O':{
              console.log("Vocal O")
              break
          }
          case'u':case 'U':{
              console.log("Vocal U")
              break
          }
          <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">default:{ console.log("La letra no es valida") }</span></span>
      }
  }else{ console.log("No es una letra") }
                </code>
            </pre>
        </div>
    
        <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
            <a href="#" class="btn" id="exp">Ver explicación</a>
        </div>
    


        <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
            <pre>
                <code class="javascript">    Se declara la variable "letra" y se iguala a lo que ingrese el usuario
    Se valida la longitud del string ingresado por el usuario (NOTA: se utiliza para validar de que se haya ingresado UNA letra)
    Se utiliza la sentencia switch, se le pasa como condición la variable "letra"
    Si se cumple el case 'a' o 'A'
    Entonces se imprime que la vocal es la A
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 'e' o 'E'
    Entonces se imprime que la vocal es la E
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 'i' o 'I'
    Entonces se imprime que la vocal es la I
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 'o' o 'O'
    Entonces se imprime que la vocal es la O
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 'u' o 'U'
    Entonces se imprime que la vocal es la U
    Se utiliza el break para romper el case
    Se cierra el case
    Si no se cumple ningún case, entonces se imprime que la letra no es válida (NOTA: nótese que no se utiliza el break, esto es porque no es necesario debido a que no se necesita romper el default ya que es la última a la que se entra cuando no se cumple ninguna otra condición)
    Se cierra el switch de la línea 3
    Si no se cumple la condición de la línea 2, entonces se imprime que no es una letra lo ingresado por el usuario
                </code>
            </pre>
            <div class="text-md-center">
                <a href="#" class="btn" id="reiniciar">Reiniciar</a>
            </div>
        </div>
    
    
        <div class="mx-auto col-md-5 mt-md-5" id="form-selects" style="height: 330px">
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
                'explaincode':'Se necesita validar que la longitud del valor ingresado por el usuario sea mayor que 0 y menor que 2, ¿Qué línea de código debería venir aquí?',
                'correct_line': 4,
                'values': ['if(letra.length < 2){','if(letra > 0 && letra < 2){','switch(letra.length > 0 && letra.length < 2){','if(letra.length > 0 && letra.length < 2){']
            },
            '2': {
                'line_code': 8,
                'explaincode':'Se necesita comprobar el case con la letra e minúscula y mayúscula, ¿Qué línea de código debería venir aquí?',
                'correct_line': 4,
                'values': ['case"a":case "a":{','case 1:case 2:{','case"o":{','case"e":case "E":{']
            },
            '3': {
                'line_code': 24,
                'explaincode':'Si no se cumple ningún case, se debe imprimir que la letra no es válida, ¿Qué línea de código debería venir aquí?',
                'correct_line': 2,
                'values': ['else:{ console.log("La letra no es valida") }','default:{ console.log("La letra no es valida") }','default:{ "La letra no es valida" }','default: console.log("La letra no es valida") ']
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
