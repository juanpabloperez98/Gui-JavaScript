@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejercicios.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<div class="row mx-auto mt-md-5" id="content">
    <div class="col-md-12 text-center">
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
            }
        }else{
            alert("¿Estas seguro?... revisa bien")
        }
    })
</script>

@endsection
