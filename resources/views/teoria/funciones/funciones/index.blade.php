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
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.1</span>Funciones</h3>
                <p class="mt-3">
                    Las funciones son conocidas como bloques de código o sentencias, que están almacenadas en una estructura
                    llamada función, son similares a procedimientos los cuales tienen alguna entrada y retornan o no una
                    salida. A lo largo del desarrollo de este curso se han hablado de palabras reservadas propiamente de
                    JavaScript, que permiten realizar una determinada tarea; como convertir un tipo de dato a otro tipo de
                    dato, imprimir por consola o por pantalla, entre otros. Todas estas palabras reservadas son consideradas
                    funciones, las cuales realizan una determinada las veces que sea llamadas en el programa.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.2</span>Sintaxis funciones</h3>
                <p class="mt-3">
                    La definición de una función, o la declaración de la misma consta de la palabra clave <span style="color: blue;">function</span> seguida de:
                </p>

                <ul class="container">
                    <li>El nombre de la función</li>
                    <li>Una lista de parámetros de la función, entre paréntesis y separados por comas</li>
                    <li>Las declaraciones que definen la función encerradas entre llaves { }</li>
                </ul>

                <pre>
                    <code class="javascript">   function mi_funcion(){
        Bloque de sentencias
    }
                    </code>
                </pre>

                <p class="mt-3">
                    Otra forma de declarar una función crear una variable e igualarla a una función sin necesidad de declarar la palabra reservada <span style="color: blue;">function</span>, de esta manera:
                </p>

                <pre>
                    <code class="javascript">   var mi_funcion = () => {
        Bloque de sentencias
    }
                    </code>    
                </pre>
                <p class="mt-3">
                    <span style="color: #efda55">NOTA</span>: esta forma de declarar una función es conocida como arrow function o función flecha
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.3</span>Llamado a una función</h3>
                <p class="mt-3">    
                    Ya se ha visto cómo se crea una función, ahora bien, para hacer uso de esta función ese necesario hacer el llamado a ella en cualquier parte del código donde se necesite ejecutarla, para entender mejor esto se presenta un ejemplo sencillo de imprimir por pantalla un mensaje determinado:
                </p>
                <pre>
                                <code class="javascript">   function saludo(){
        console.log("Hola!!...Este es un saludo desde la función")
    }
    saludo()
                                </code>
                    </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                Hola!!...Este es un saludo desde la función
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Cada vez que se haga el llamado a la función <span style="color: blue">saludo()</span>, esta función imprimirá por pantalla un saludo al usuario. En este ejemplo no se ve realmente la importancia de una función pues la sentencia de código a ejecutar es un simple <span style="color: blue">console.log()</span>, pero mas adelante se mostraran ejemplos donde se pueda apreciar mejor la importancia de las funciones.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.4</span>Parametros en las funciones
                </h3>
                <p class="mt-3">
                    Ya se ha mencionado que las funciones son bloques de código que están encapsulados en una estructura previamente definida, por lo que, para ejecutar dichos bloques de códigos es necesario hacer el llamado a la función para que se ejecuten. Las funciones tienen parámetros, que básicamente son valores que recibe la función y pueden ser utilizados dentro del código que ejecuta la función, A continuación, un ejemplo:
                </p>
                <pre>
                                <code class="javascript">   function saludo(param){
        console.log(param)
    }
    var mensaje = "Este es el saludo que quiero mandar"
    saludo(mensaje)
                                </code>
                                </pre>
                <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                Este es el saludo que quiero mandar
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Fíjese que se declara una variable llamada <span style="color: blue">mensaje</span>, la cual se iguala a un mensaje determinado y se manda a la función como parámetro. En la función <span style="color: blue">saludo()</span> dentro de los paréntesis se define una variable llamada <span style="color: greenyellow">param</span> la cual va a tener el valor de la variable <span style="color: blue">mensaje</span> que se paso como parámetro, es de esa manera como se puede imprimir cualquier mensaje enviado como parámetro.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>



            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.5</span>Retorno de una función</h3>
                <p class="mt-3">
                    Como se ha explicado, una función ejecuta unos bloques de códigos, los cuales realizan una tarea especifica y pueden o no, retornar un valor. Pero de nada sirve retornar un valor sino se puede realizar una tarea con dicho valor retornado. A continuación, se muestra como capturar un valor retornado por una función
                </p>
                <pre>
                    <code class="javascript">   function modulo2(num){
        return num % 2
    }
    var numero = 3
    result = modulo2(numero)
    console.log(result)
                    </code>
                    </pre>
                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                1
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Se crea la función <span style="color: blue">modulo2</span> la cual recibe como parámetro un valor y se guarda en la variable <span style="color: greenyellow">num</span>, esta función devuelve el módulo del número pasado como parámetro entre 2, para devolver un valor de una función se utiliza la palabra reservada <span style="color: blue">return</span>. Toda función que devuelve un valor, al ser declarada o hacer el llamado a esta función es necesario crear una variable e igualarla al llamado de la función como se ve en la línea 5, el valor que retorna la función es almacenado en la variable <span style="color: blue">result</span>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Probar</a>
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
                        <a href="#" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>

                    <div class="cardboton">
                        <a href="#" class="btn">Ir a los Ejercicios</a>
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
