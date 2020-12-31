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
        <h1>Ejercicio #1</h1>
    </div>
</div>


<div class="row mx-auto mt-md-4" id="explain">
    <div class="col-md-8 mx-auto" id="exp1">
        <h2 class="text-md-center mt-md-3">Enunciado</h2>
        <br>
        <div class="content">
            <p class="text-left">
                Realice un programa que simule las operaciones de una calculadora, el programa deberá pedirle al usuario dos números, y que operación básica desea realizar (suma, resta, multiplicación, división)
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
            <code class="javascript">  var num1 = parseInt(prompt("Ingrese número 1: ")),
         num2 = parseInt(prompt("Ingrese número 2: ")),
         operacion = parseInt(prompt("1)SUMA\n2)RESTA\n3)MULTIPLICACION\n4)DIVISIÓN"))
  <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">switch(operacion){</span></span>
      case 1:{
          console.log("SUMA: " + (num1+num2))
          break
      }
      <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">case 2:{</span></span>
          console.log("RESTA: " + (num1-num2))
          break
      }
      case 3:{
          <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">console.log("MULTIPLICACIÓN: " + (num1*num2))</span></span>
          break
      }
      case 4:{
          console.log("DIVISIÓN: " + (num1/num2))
          break
      }
      default:{
          console.log("Operación no valida")
          break
      }
  }
            </code>
        </pre>
    </div>

    <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
        <a href="#" class="btn" id="exp">Ver explicación</a>
    </div>

    <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
        <pre>
            <code class="javascript">    Se declara la variable "num1" y se iguala a lo que ingresa el usuario convertido a entero
    Se declara la variable "num2" y se iguala a lo que ingresa el usuario convertido a entero
    Se declara la variable "operacion" y se iguala a lo que ingresa el usuario por pantalla convertido a entero
    Se utiliza la sentencia switch, se le pasa como parámetro de condición la variable "operacion"
    Si se cumple el case 1
    Entonces se imprime la suma entre "num1" y "num2"
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 2
    Entonces se imprime la resta entre "num1" y "num2"
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 3
    Entonces se imprime la multiplicación entre "num1" y "num2"
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 4
    Entonces se imprime la división entre "num1" y "num2"
    Se utiliza el break para romper el case
    Se cierra el case
    Si no se cumple ninguno de los case
    Se imprime que la operación no es valida
    Se utiliza el break para romper el default
    Se cierra el default
    Por último, se cierra el switch de la línea 4
            </code>
        </pre>
        <div class="text-md-center">
            <a href="#" class="btn" id="reiniciar">Reiniciar</a>
        </div>
    </div>

    <div class="mx-auto col-md-5 mt-md-5" id="form-selects" style="height: 320px">
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
            'line_code':4,
            'explaincode':'Se necesita declarar la sentencia switch pasando como condición la variable operacion, ¿Qué línea de código debería venir aquí?',
            'correct_line':2,
            'values':['if(operacion){','switch(operacion){','switch(num1){','switch(num2){']
        },
        '2': {
            'line_code':9,
            'explaincode':'Se necesita validar el case 2, ¿Qué línea de código debería venir aquí?',
            'correct_line':1,
            'values':['case 2:{','case 4:{','case 5:{','case 1:{']
        },
        '3': {
            'line_code':14,
            'explaincode':'Se debe imprimir la operación multiplicación entre los dos números, ¿Qué línea de código debería venir aquí?',
            'correct_line':3,
            'values':['console.log("MULTIPLICACIÓN: " + (num1+num2))','console.log((num1/num2))','console.log("MULTIPLICACIÓN: " + (num1*num2))','console.log("MULTIPLICACIÓN: "(num1*num2))']
        }
    }


    var addLinesInitial = () => {
        $('#linea').text('Linea #' + lineas[cont].line_code)
        $('#explain_code').text(lineas[cont].explaincode)
        for (let i = 0; i < 4; i++) {
            var identificador = '#label'+ (i+1)
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

    $('#formulario').submit((e) =>  {
        e.preventDefault()
        var line = $('input[name="select"]:checked').val(),
            line_higlight = '#linea-higlight'+cont,
            line_activate = '#linea-'+cont,
            cont_higlight = '#cont-higlight'+cont

        if(lineas[cont].correct_line == parseInt(line)){
            $(line_higlight).toggle('')
            $(line_activate).toggle('')
            $('#formulario')[0].reset()
            cont ++
            if(cont <= num_total){
                addLinesInitial()
                $(cont_higlight).removeClass('line-higlight')
            }else{
                $(cont_higlight).removeClass('line-higlight')
                $('#form-selects').toggle('')
                $('#botones').toggle('')
            }
        }else{
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
