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
                    Realiza un programa que lea 2 números por teclado y determine los siguientes aspectos (es suficiente con mostrar True o False)

                    <ul class="container">
                        <li>Si los dos números son diferentes</li>
                        <li>Si el primero es mayor que el segundo</li>
                        <li>Si el segundo es mayor o igual que el primero</li>
                    </ul>
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
                <code class="javascript">   var numero1 = parseInt(prompt("Ingrese numero 1: ")),
        <span id="cont-higlight1" class="line-higlight"><span id="linea-higlight1"> </span><span id="linea-1" class="desactivate">numero2 = parseInt(prompt("Ingrese numero 2: "))</span></span>
    console.log("¿Los dos numeros son diferentes?: " + (numero1 != numero2))
    <span id="cont-higlight2" class="line-higlight"><span id="linea-higlight2"> </span><span id="linea-2" class="desactivate">console.log("¿numero1 es mayor a numero2?: " + (numero1 > numero2))</span></span>
    console.log("¿numero2 es mayor o igual a numero1?: " + (numero2 >= numero1))
                </code>
            </pre>
        </div>
    
        <div class="mx-auto col-12 mt-md-2 desactivate" id="botones">
            <a href="#" class="btn" id="exp">Ver explicación</a>
        </div>
    
        <div class="col-lg-6 mt-md-5 desactivate" id="code-explain">
            <pre>
                <code class="javascript">        Se declara la variable "numero1" y se iguala a lo que ingrese el usuario pon pantalla convertido a entero
        Se declara la variable "numero2" y se iguala a lo que ingrese el usuario pon pantalla convertido a entero
        Se imprime si los dos números son diferentes, para ello se compara "numero1" != "numero2",  se concatena el resultado al string
        Luego se imprime si "numero1" es mayor a "numero2", para ello se compara "numero1" > "numero2", se concatena el resultado al string
        Por último se imprime si "numero2" es mayor o igual a "numero1", para ello se compara "numero2" >= "numero1", se concatena el resultado al string
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
            num_total = 2

        var lineas = {
            '1': {
                'line_code': 2,
                'explaincode':'Se necesita pedir el segundo numero al usuario y guardarlo en una variable. ¿Qué línea de código viene aquí?',
                'correct_line': 3,
                'values': ['numero2 = prompt("Ingrese numero 2: ")', 'parseInt(prompt("Ingrese numero 2: "))', 'numero2 = parseInt(prompt("Ingrese numero 2: "))', 'numero2 = "Ingrese numero 2: "']
            },
            '2': {
                'line_code': 4,
                'explaincode':'Ahora se debe imprimir si el numero1 es mayor al numero2, ¿Qué línea de código viene aquí?',
                'correct_line': 3,
                'values': ['"¿numero1 es mayor a numero2?: " + (numero1 > numero2)', 'console.log("¿numero1 es mayor a numero2?: " + numero1 == numero2)', 'console.log("¿numero1 es mayor a numero2?: " + (numero1 > numero2))', 'console.log(numero1 >!= numero2)']
            },
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
