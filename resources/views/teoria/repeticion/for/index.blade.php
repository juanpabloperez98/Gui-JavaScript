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
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.1</span>Ciclo for</h3>
                <p class="mt-3">
                    La estructura for o ciclo for, es una estructura repetitiva que permite ejecutar un bloque de código o
                    acciones un número especifico de veces, controlando la ejecución paso a paso de manera automática.
                    Los ciclos for, son declarados con una variable contadora, la cual determina la cantidad de veces o
                    iteraciones que se ejecuta un bloque de sentencias, contenidos dentro de esta estructura. Esta variable
                    funciona como un rango, que inicia desde un valor especificado hasta un límite superior también
                    especificado acompañado de un incremento (el incremento es la manera en cómo dicha variable aumentara
                    desde su límite inferior hasta el límite superior)
                </p>
            </div>
            <div class="col-lg-5 mx-auto mt-3 mt-lg-0 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.2</span>Sintaxis ciclo for</h3>
                <p class="mt-3">
                    Como se menciono anteriormente, el ciclo for consta de una variable contadora, la cual influye en los 3
                    componentes que conforman el ciclo for, hay que tener en cuenta que el ciclo for tiene un inicio, final,
                    y tamaño de incremento.
                </p>
                <pre>
                                    <code class="javascript">   for (var i = 0; i < 3; i++) {
        <span style="color: greenyellow">Bloque de sentencias</span>
   }
                                    </code>
                                </pre>
                <p>Como se puede visualizar, dentro de la sentencia for se declara una variable i, esta variable se
                    inicializa en 0 (limite inferior), se finaliza en 2 (limite inferior), y aumenta en 1 (utilizando el
                    operador ++).</p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.3</span>Ejemplo Ciclo For</h3>
                <p class="mt-3">
                    Para entender mejor la estructura for, imagínese que se desea realizar un programa que muestre la tabla
                    de multiplicar del 2 desde el número 1 hasta el 9. Con los conocimientos adquiridos hasta el momento, se
                    podría realizar imprimiendo 9 veces la operación de 2 por los números correspondientes, pero véase como
                    se realiza con el ciclo for.
                </p>
                <pre>
                <code class="javascript">   for (var i = 1; i <= 9; i++) {
       console.log(i+"x2: "+ (i*2))            
   }
                </code>
                </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                1 x 2: 2  <br>
                                2 x 2: 4  <br>
                                3 x 2: 6  <br>
                                4 x 2: 8  <br>
                                5 x 2: 10 <br>
                                6 x 2: 12 <br>
                                7 x 2: 14 <br>
                                8 x 2: 16 <br>
                                9 x 2: 18 <br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La variable <span style="color: blue; font-weight: bold;">i</span> se inicializa en 1 y va hasta 9 (debido a que se dice que <span style="color: greenyellow; font-weight: bold;"><=</span> ) por lo que se va a repetir 9 veces el ciclo, cada vez que se repita el ciclo, el valor de <span style="color: blue; font-weight: bold;">i</span> aumentara en 1, es por eso que cada vez que imprime el valor de <span style="color: blue; font-weight: bold;">i</span> este cambia. 
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.4</span>For anidados</h3>
                <p class="mt-3">
                    Los ciclos for también pueden ser <span style="color: blue; font-weight: bold">anidados</span>, ¿Qué significa?, quiere decir que se puede encontrar un ciclo for, dentro de otro ciclo for, entonces por cada vez que se itere el primer ciclo for, se ejecutara un número <span style="color: blue; font-weight: bold">n</span> de veces el segundo ciclo for. El ciclo que se encuentra dentro de otro ciclo se le conoce como ciclo inferior o ciclo <span style="color: blue; font-weight: bold">interno</span>, mientras que el ciclo que contiene el segundo ciclo, es considerado como ciclo <span style="color: blue; font-weight: bold">exterior</span> o superior. Es importante tener en cuenta que para estos ciclos es importante utilizar variables de control distintas para no obtener resultados inesperados. Los ciclos anidados no tienen límites, lo que significa que pueden haber ciclo de primer, segundo, tercer nivel etc.
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.5</span>Sintaxis For anidados</h3>
                <p class="mt-3">
                    La sintaxis de los ciclos anidados es exactamente igual a la sintaxis anteriormente vista, la única diferencia es que la variable de control entre un ciclo y otro debe ser diferente para cada ciclo.
                </p>


                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                            <code class="javascript">   for (var i = 0; i < 3; i++) {
        <span style="color: greenyellow">Bloque de sentencias</span>
        for (var j = 0; j < 3; j++) { 
            <span style="color: greenyellow">Bloque de sentencias</span>
        }
    }               </code>
                        </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                            <code class="javascript">   for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) { 
            <span style="color: greenyellow">Bloque de sentencias</span>
        }
    }      

           </code>
                        </pre>
                    </div>
                </div>

            
                <p>
                    <span style="color: #F0DB4F; font-weight: bold">NOTA</span>: cuando se entra a ejecutar el primer ciclo for, puede haber un bloque de sentencias antes de ejecutar el segundo ciclo for, es decir pueden encontrarse operaciones matemáticas, lógica, o condicionales antes, de ejecutarse el ciclo for interno, mas no es necesario, puesto que cuando se entre en el ciclo superior, el ciclo inferior se puede ejecutar inmediatamente.
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">3.1.6</span>Ejemplo For anidados</h3>
                <p class="mt-3">
                    Mírese un ejemplo para entender un poco mejor los for anidados. Supongamos que se quiere mostrar las tablas de multiplicar desde el número 2 hasta el número 4, anteriormente se había realizado con un ciclo for sin anidar, pero véase como se realizaría utilizando un ciclo for anidado
                </p>
                <pre>
                    <code class="javascript">   for (let i = 2; i <= 4; i++) {
        for (let j = 1; j <= 9; j++) {
            console.log(i + "x" + j+":"+(i * j))
        }
        console.log("\n")
    }
                    </code>
                </pre>

                <div id="result2" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <div class="row mx-auto">
                        <div class="col-lg-4">
                            <p class="text-center" style="color: white;">
                                2 x 1: 2  <br>
                                2 x 2: 4  <br>
                                2 x 3: 6  <br>
                                2 x 4: 8  <br>
                                2 x 5: 10 <br>
                                2 x 6: 12 <br>
                                2 x 7: 14 <br>
                                2 x 8: 16 <br>
                                2 x 9: 18 <br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="text-center" style="color: white;">
                                3 x 1: 3  <br>
                                3 x 2: 6  <br>
                                3 x 3: 9  <br>
                                3 x 4: 12  <br>
                                3 x 5: 15 <br>
                                3 x 6: 18 <br>
                                3 x 7: 21 <br>
                                3 x 8: 14 <br>
                                3 x 9: 27 <br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="text-center" style="color: white;">
                                4 x 1: 4  <br>
                                4 x 2: 8  <br>
                                4 x 3: 12  <br>
                                4 x 4: 16  <br>
                                4 x 5: 20 <br>
                                4 x 6: 24 <br>
                                4 x 7: 28 <br>
                                4 x 8: 32 <br>
                                4 x 9: 36 <br>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="text-left" style="color: white;">
                                <span style="color: #F0DB4F; font-weight: bold">NOTA</span>: Por cada iteración de ciclo superior, se ejecuta nueve veces el ciclo inferior, cada vez que se termine de ejecutar el ciclo inferior, se imprimirá un salto de línea en el aumento de la variable i (Se ve representado una al lado de la otra para mejor visualización, pero en la práctica, se verían una debajo de las otras)
                            </p>
                        </div>
                     </div>
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
                        <a href="{{ route('for-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
