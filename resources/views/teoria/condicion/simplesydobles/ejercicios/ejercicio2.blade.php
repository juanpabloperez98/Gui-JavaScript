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
                    Hacer un programa que permita saber si un año es bisiesto. Para que un año sea bisiesto debe ser divisible por 4 y no debe ser divisible por 100, excepto que también sea divisible por 400.
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
                <code class="javascript">  var year = parseInt(prompt("Ingrese un año: "))
  <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">if(year%4 == 0){</span></span>
      <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">if(year%100 != 0 || year%400 == 0){</span></span>
          console.log("Bisiesto")
      }else{ console.log("No Bisiesto")  }
  <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">}else{ console.log("No Bisiesto") }</span></span>
                </code>
            </pre>
        </div>
    
        <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
            <a href="#" class="btn" id="exp">Ver explicación</a>
        </div>
    
        <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
            <pre>
                <code class="javascript">    
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
                'explaincode':'Se necesita validar si la operación modulo de la variable year entre 4 es igual a cero, ¿Qué línea de código viene aquí?',
                'correct_line': 3,
                'values': ['if(year%4 = 0){','if(year*4 == 0){','if(year%4 == 0){ ','if(year%4){']
            },
            '2': {
                'line_code': 3,
                'explaincode':'Ahora se va a validar si la operación modulo de la variable year entre 100 es diferente de cero o si la operación modulo entre 400 es igual a cero, ¿Qué línea de código viene aquí?',
                'correct_line': 2,
                'values': ['if(year%100 != 0 && year%400 == 0){','if(year%100 != 0 || year%400 == 0){ ','if(year%100 != 0 != year%400 == 0){','if(year*100 != 0 || year%400 == 0){']
            },
            '3': {
                'line_code': 6,
                'explaincode':'Ahora se debe imprimir que el año no es bisiesto si la condición de la línea 2 no se cumple, ¿Qué línea de código viene aquí?',
                'correct_line': 4,
                'values': ['}{ console.log("No Bisiesto") }','}console.log("No Bisiesto")','else{ console.log("No Bisiesto") }','}else{ console.log("No Bisiesto") } ']
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
