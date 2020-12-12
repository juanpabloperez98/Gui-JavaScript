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
            <p class="text-center">
               Sitio en construcción, ejecute el ejercicio para ver la dinamica 
            </p>
            <div class="text-md-center my-md-4">
                <a href="#" id="empezar" class="button">Empezar ejercicio</a>
            </div>
        </div>
    </div>
</div>

<div class="row mx-auto desactivate" style="max-width: 1111px" id="desarrollo">
    <div class="mx-auto col-md-5 mt-md-5">
        <pre id="code">
            <code class="javascript">  Linea de codigo 1
  Linea de codigo 2
  <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">Linea de codigo 3</span></span>
  Linea de codigo 4
  Linea de codigo 5
  <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">Linea de codigo 6</span></span>
  Linea de codigo 7
  Linea de codigo 8
  <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">Linea de codigo 9</span></span>
            </code>
        </pre>
    </div>

    <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
        <a href="#" class="btn" id="exp">Ver explicación</a>
    </div>

    <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
        <pre>
            <code class="javascript">    Se comienza declarando la variable "num1" y se iguala a lo que ingrese el usuario por pantalla
    Igual que la línea anterior se declara la variable "num2" y se iguala a lo que ingrese el usuario por pantalla
    Luego se declara la variable residuo y se iguala a cero 
    Se convierte la variable "num1" en entero usando la función parseInt, el valor convertido a entero se iguala a la misma variable "num1"
    Se convierte la variable "num2" en entero usando la función parseInt, el valor convertido a entero se iguala a la misma variable "num2"
    La variable "residuo" se iguala al resultado de la operación de modulo entre "num1" y "num2"
    Por último, se imprime por pantalla el resultado (<span style="color: rgba(244, 219, 79, 1);">NOTA</span>: al utilizar el operador "+" con un string y un entero, este concatena al string el entero especificado) 
            </code>
        </pre>
        <div class="text-md-center">
            <a href="#" class="btn" id="reiniciar">Reiniciar</a>
        </div>
    </div>



    <div class="mx-auto col-md-5 mt-md-5" id="form-selects">
        <h4 id="linea">Linea # </h4>
        <form id="formulario" action="">
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
            <div class="boton">
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
            'line_code':3,
            'correct_line':2,
            'values':['Default 1','Linea de codigo 3','Default 3','Default 4']
        },
        '2': {
            'line_code':6,
            'correct_line':3,
            'values':['Default 1','Default 2','Linea de codigo 6','Default 4']
        },
        '3': {
            'line_code':9,
            'correct_line':4,
            'values':['Default 1','Default 2','Default 3','Linea de codigo 9']
        }
    }

    var addLinesInitial = () => {
        $('#linea').text('Linea #' + lineas[cont].line_code)
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
