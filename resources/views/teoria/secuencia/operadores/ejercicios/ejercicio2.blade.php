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
                    En un instituto de educación superior, se desea realizar un programa que permita llevar el registro de
                    sus usuarios (alumnos), por lo que se le pide a usted, desarrollar un script, que permita pedirle los
                    datos a un alumno (nombres, apellidos, edad) y luego muestre por pantalla el nombre completo (nombres y
                    apellidos) y el año de nacimiento (NOTA: no se tiene en cuenta los meses y los días, solo basta con
                    tener en cuenta el año en el que se encuentra 2020)
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
                <code class="javascript">  var nombres = prompt("Ingrese sus nombres: "),
         <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">apellidos = prompt("Ingrese sus apellidos: ")</span></span>
         edad = parseInt(prompt("Ingrese su edad: "))
   <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">const fullname = nombres + ' ' + apellidos,</span></span>
         <span id="cont-higlight3" class="line-higlight"><span id="linea-higlight3"> </span><span id="linea-3" class="desactivate">nacimiento = 2020 - edad</span></span>
    console.log("Nombre completo: "+fullname)
    console.log("Año de nacimiento: "+nacimiento)
                </code>
            </pre>
        </div>
    
        <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
            <a href="#" class="btn" id="exp">Ver explicación</a>
        </div>
    
        <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
            <pre>
                <code class="javascript">        Lo primero, se declara una variable llamada "nombres" y se iguala a lo que ingrese el usuario
        Segundo, se declara una variable llamada "apellidos" y se iguala a lo que ingrese el usuario
        Después, se declara la tercera variable llamada edad, y se iguala a lo que ingrese el usuario convertido a entero.
        Ahora se declara una constante llamada "fullname", esta constante se iguala a la concatenación de "nombres" y "apellidos"
        Se declara otra constante llamada "nacimiento", esta se iguala a la resta entre el años actual 2020, y la edad ingresada por el usuario
        Se imprime el nombre completo
        Se imprime el año de nacimiento
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
                'explaincode':'Se debe pedir al usuario los apellidos y guardarlos en una variable. ¿Qué línea de código viene aquí?',
                'correct_line': 1,
                'values': ['apellidos = prompt("Ingrese sus apellidos: ")', 'apellidos = parseInt(prompt("Ingrese sus apellidos: "))', 'prompt("Ingrese sus apellidos: ")', 'apellidos ="Ingrese sus apellidos: "']
            },
            '2': {
                'line_code': 4,
                'explaincode':'Se necesita concatenar los valores de las variables nombres y apellidos, con un espacio entre las dos variables, ¿Qué línea de código viene aquí?',
                'correct_line': 4,
                'values': ['const fullname = "  " + apellidos,', 'const fullname = parseInt(nombres) + "  " + apellidos,', 'nombres + "  " + apellidos,', 'const fullname = nombres + "  " + apellidos,']
            },
            '3': {
                'line_code': 5,
                'explaincode':'Ahora se debe hallar el año de nacimiento del usuario, para ello se debe restar el año actual menos la edad del usuario, ¿Qué línea de código viene aquí?',
                'correct_line': 2,
                'values': ['nacimiento = 2020', 'nacimiento = 2020 - edad', 'nacimiento = edad', '2020 - edad']
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
