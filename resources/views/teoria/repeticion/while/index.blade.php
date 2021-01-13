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
            <div class="col-lg-5 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.1</span>Ciclo While</h3>
                <p class="mt-3">
                    La estructura de repetición while o ciclo while, repite un bloque de instrucciones mientras una condición dada se cumpla, es decir, sea verdadera. El ciclo while dejara de ejecutarse o se cerrara cuando la condición especificada se vuelva falsa o se utilice una sentencia con el break para romper el ciclo, si la condición nunca se vuelve falsa, entonces se considera que esta en un ciclo infinito. La prueba de condición ocurre antes de que se ejecute la expresión del ciclo, lo que significa que, si la condición no es verdadera o no se cumple, entonces nunca se entra a ejecutar el bloque de sentencias del ciclo while.
                </p>
            </div>
            <div class="col-lg-5 mx-auto mt-3 mt-lg-0 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.2</span>Sintaxis ciclo while</h3>
                <p class="mt-3">
                    Una declaración while, esta definida por la palabra reservada while, acompañada entre paréntesis de la condición a evaluar, debajo de esta se puede definir una expresión a ejecutar, si se necesita ejecutar un bloque de sentencias o más de una expresión, entonces se acompañan los parentesis con unos corchetes
                </p>
                <pre>
                                    <code class="javascript">   while( <span style="color: greenyellow;">condicion</span> ) {
        <span style="color: greenyellow">Bloque de sentencias</span>
   }
                                    </code>
                                </pre>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.3</span>Ejemplo Ciclo while</h3>
                <p class="mt-3">
                    Para entender mejor la sentencia while, se va a realizar el mismo ejemplo que con el ciclo for, realizando la tabla de multiplicar del número 3 pero esta vez utilizando la sentencia while.
                </p>
                <pre>
                <code class="javascript">   var i = 1
    while(i < 10){
        console.log(3+"x"+i+":"+(3*i))
        i++
    }
                </code>
                </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                3 x 1: 3  <br>
                                3 x 2: 6  <br>
                                3 x 3: 8  <br>
                                3 x 4: 12  <br>
                                3 x 5: 15 <br>
                                3 x 6: 18 <br>
                                3 x 7: 21 <br>
                                3 x 8: 24 <br>
                                3 x 9: 27 <br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La variable <span style="color: blue; font-weight: bold;">i</span> se inicializa en 1, entonces la condición para el ciclo while se dice que es mientras la variable <span style="color: blue; font-weight: bold;">i</span> sea menor a 10 ejecute el bloque de sentencias, es por eso que dentro del while en la línea 4, la variable <span style="color: blue; font-weight: bold;">i</span> va aumentando en 1 en cada iteración, de no hacerse esto, entonces se entraría en un bucle infinito. 
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.4</span>While anidados</h3>
                <p class="mt-3">
                    Aunque no son muy utilizado y son poco comunes, los while anidados tienen la misma base que los ciclos for anidados, es decir en teoría es hablar de un ciclo dentro de otro ciclo. La funcionalidad de estos suele ser cuando no se tiene especificado un valor de parada estático, es decir dependen de que cumplan una condición
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.5</span>Sintaxis while anidados</h3>
                <p class="mt-3">
                    La sintaxis de estos ciclos anidados es exactamente igual a la sintaxis anteriormente vista, la única diferencia es que la variable de condición entre un ciclo y otro debe ser diferente para cada ciclo
                </p>


                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                            <code class="javascript">   while ( <span style="color: blue;">condicion</span> ) {
        <span style="color: greenyellow">Bloque de sentencias</span>
        while (<span style="color: blue;">condicion</span> ) { 
            <span style="color: greenyellow">Bloque de sentencias</span>
        }
    }               </code>
                        </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                            <code class="javascript">   while ( <span style="color: blue;">condicion</span> ) {
        while (<span style="color: blue;">condicion</span> ) { 
            <span style="color: greenyellow">Bloque de sentencias</span>
        }
    }               

</code>
                        </pre>
                    </div>
                </div>

            
                <p>
                    <span style="color: #F0DB4F; font-weight: bold">NOTA</span>: cuando se entra a ejecutar el primer ciclo while, puede haber un bloque de sentencias antes de ejecutar el segundo ciclo while, es decir pueden encontrarse operaciones matemáticas, lógica, o condicionales antes, de ejecutarse el ciclo while interno, mas no es necesario, puesto que cuando se entre en el ciclo superior, el ciclo inferior se puede ejecutar inmediatamente.
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.2.6</span>Bucles infinitos</h3>
                <p class="mt-3">
                    Aunque se han mencionado por encima, los bucles infinitos son ciclos que se ejecutan infinitas veces, es decir, no tienen ninguna condición de parada por lo tanto el bloque de sentencias se ejecuta infinitas veces. Es importante tratar de evitar estos ciclos, puesto que son sentencias que no son óptimas. 
                </p>
                <pre>
                    <code class="javascript">   while(true){
        <span style="color: greenyellow">Bloque de sentencias</span>
    }
                    </code>
                </pre>
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
                        <a href="{{ route('while-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>

                    <div class="cardboton">
                        <a href="{{ route('simplesydobles-ejercicios-index') }}" class="btn">Ir a los Ejercicios</a>
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
