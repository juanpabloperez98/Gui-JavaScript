@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/baseteoria.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="tp-main">
        <div class="row mx-auto p-md-4">
            <div class="col-lg-11 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.2.1</span>Estructura de Selección Multiple</h3>
                <p class="mt-3">
                    Las estructuras de selección múltiples permiten el flujo del programa en base a un punto de toma de decisiones, en función del valor que tome un selector, es decir, basado en una variable entregada, las estructuras de selección múltiples, determinaran que bloque de sentencias se deberá ejecutar. Las estructuras de selección múltiples se utilizan cuando se necesita analizar más de 2 posibilidades
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.2.2</span>Sintaxis</h3>
                <p class="mt-3">
                    Para hacer uso de las estructuras de selección múltiples, JavaScript utiliza una palabra reservada switch para indiciar que empieza la estructura, seguida de la expresión base para validar que bloque de sentencias ejecutar.
                </p>
                <pre>
                    <code class="javascript">   switch( <span style="color: greenyellow">condicion</span> ){
        case 1:{
            bloque de sentencias
            break
        }
        case 2:{
            bloque de sentencias
            break
        }
        case 3:{
            bloque de sentencias
            break
        }
        default:{
            bloque de sentencias
            break
        }
    }
                    </code>
                </pre>

                <p>
                    Como se puede visualizar, la <span style="color: blue; font-weight: bold">condición</span> se define como un parámetro ya sea valor o variable, el cual puede (valga la redundancia) tener el valor de cualquiera de los <span style="color: blue; font-weight: bold">case</span> que se definen dentro de la estructura <span style="color: #f92672; font-weight: bold">switch</span>. El <span style="color: blue; font-weight: bold;">default</span>, es considerado como el bloque de sentencias que se ejecutara si la condición no entra en ninguno de los <span style="color: blue; font-weight: bold">case</span> anteriores.
                </p>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.2.3</span>Ejemplo</h3>
                <p class="mt-3">
                    Supóngase que dependiendo de una variable llamada <span style="color: blue; font-weight: bold">día</span> que tendrá un valor numérico, se imprima al nombre día correspondiente de la semana, si el valor numérico no corresponde a ningún día de la semana se imprimirá que el dato no es valido
                </p>
                <pre>
                                    <code class="javascript">    var dia = 2
    switch(dia){
        case 1:{
            console.log("El día es: lunes")
            break
        }
        case 2:{
            console.log("El día es: martes")
            break
        }
        case 3:{
            console.log("El día es: miercoles")
            break
        }
        case 4:{
            console.log("El día es: jueves")
            break
        }
        case 5:{
            console.log("El día es: viernes")
            break
        }
        case 6:{
            console.log("El día es: sabado")
            break
        }
        case 7:{
            console.log("El día es: domingo")
            break
        }
        default:{
            console.log("El dato no es valido")
            break
        }
    }
                                    </code>
                                </pre>
                <div id="result1" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        El día es: martes
                    </p>
                    <p class="text-left p-3 p-lg-0" style="color: white">
                        Como se puede observar, el valor de la variable <span style="color: blue; font-weight: bold">dia</span> es igual a 2, la sentencia <span style="color: #f92672; font-weight: bold">switch</span>, identifica que se debe ejecutar el bloque de sentencias del <span style="color: blue;font-weight: bold">case</span> 2
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.2.4</span>Ejemplo</h3>
                <p class="mt-3">
                    Supongase que dependiendo de una variable <span style="color: blue; font-weight: bold">dia</span>, que contendrá el nombre de un día de la semana, se deberá imprimir que numero corresponde al día de la semana. Si el valor de <span style="color: blue; font-weight: bold">dia</span> no corresponde a ninguno de los <span style="color: blue; font-weight: bold">case</span>, entonces se imprimirá que el dato no es valido
                </p>
                <pre>
                                    <code class="javascript">   var dia = "miercoles"
    switch(dia){
        case "lunes":{
            console.log("El numero correspondiente al día es: 1")
            break
        }
        case "martes":{
            console.log("El numero correspondiente al día es: 2")
            break
        }
        case "miercoles":{
            console.log("El numero correspondiente al día es: 3")
            break
        }
        case "jueves":{
            console.log("El numero correspondiente al día es: 4")
            break
        }
        case "viernes":{
            console.log("El numero correspondiente al día es: 5")
            break
        }
        case "sabado":{
            console.log("El numero correspondiente al día es: 6")
            break
        }
        case "domingo":{
            console.log("El numero correspondiente al día es: 7")
            break
        }
        default:{
            console.log("El dato no es valido")
            break
        }
    }
                                    </code>
                                </pre>

                <div id="result2" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        El numero correspondiente al día es: 3
                    </p>
                    <p class="text-left p-3 p-lg-0" style="color: white">
                        Ahora la condición ya no se basa en un valor numérico como la vez pasada, ahora dependiendo de un <span style="color: #F0DB4F; font-weight: bold">string</span> o cadena de carácter ingresada, se valida si entra alguno de los <span style="color: blue; font-weight: bold">case</span> que contienen en string los nombres de las semanas.
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>            
        </div>
        

        <div class="row mx-auto p-md-4" id="ejemplos">
            <div class="col-lg-11 text-center mx-auto bg-light columna-principal">
                <h4 class="text-center mb-md-5 font-weight-bold">Ejemplos y practica</h4>

                <div class="card-personalizada">
                    <div class="cardheader">
                        <h5>Ejemplos</h5>
                    </div>
                    
                    <div class="cardboton">
                        <a href="{{ route('multiples-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>
                    
                    <div class="cardboton">
                        <a href="{{ route('multiples-ejercicios-index') }}" class="btn">Ir a los Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        var status1 = 0,
            status2 = 0,
            status3 = 0,
            status4 = 0,
            status5 = 0



        $('#boton-probar1').on('click', (e) => {
            e.preventDefault()
            $('#result1').toggle('fold')
            if (status1 == 0) {
                $('#boton-probar1').text('X')
                status1 = 1
            } else {
                $('#boton-probar1').text('Probar')
                status1 = 0
            }
        })

        $('#boton-probar2').on('click', (e) => {
            e.preventDefault()
            $('#result2').toggle('fold')
            if (status2 == 0) {
                $('#boton-probar2').text('X')
                status2 = 1
            } else {
                $('#boton-probar2').text('Probar')
                status2 = 0
            }
        })

        $('#boton-probar3').on('click', (e) => {
            e.preventDefault()
            $('#result3').toggle('fold')
            if (status3 == 0) {
                $('#boton-probar3').text('X')
                status3 = 1
            } else {
                $('#boton-probar3').text('Probar')
                status3 = 0
            }
        })

        $('#boton-probar4').on('click', (e) => {
            e.preventDefault()
            $('#result4').toggle('fold')
            if (status4 == 0) {
                $('#boton-probar4').text('X')
                status4 = 1
            } else {
                $('#boton-probar4').text('Probar')
                status4 = 0
            }
        })

        $('#boton-probar5').on('click', (e) => {
            e.preventDefault()
            $('#result5').toggle('fold')
            if (status5 == 0) {
                $('#boton-probar5').text('X')
                status5 = 1
            } else {
                $('#boton-probar5').text('Probar')
                status5 = 0
            }
        })

    </script>
@endsection
