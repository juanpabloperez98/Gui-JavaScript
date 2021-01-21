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
            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.3</span>Acceder a un elemento de una lista</h3>
                <p class="mt-3">
                    Ya se ha visto como declarar una lista con datos dentro de ella, ahora de nada sirve tener contenido
                    estos datos dentro de una lista si no hay forma de como acceder a ellos para poder tratarlos. Para
                    obtener los datos de una lista se pueden utilizar varias formas para logarlo. Para obtener un solo dato
                    de una lista solo basta con llamar la variable y entre llaves [ ] colocar la posición en la que se
                    encuentra dicho elemento (recordar que en programación la primera posición de algún objeto o estructura
                    empieza en 0).
                </p>
                <pre>
                                <code class="javascript">   var lista = ["posicion1", "posicion2", "posicion3"]
       console.log("Lista en la primera posicion: " + lista[0])
                                </code>
                    </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                Lista en la primera posicion: posicion2
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La variable lista contiene 3 datos que son de tipo string, al acceder a su posición <span
                                    style="color: blue;">[ 1 ]</span> se esta accediendo al segundo elemento de la lista
                                (como se mencionó anteriormente, en programación la primera posición empieza en cero)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.4</span>Acceder a varios elementos de una lista
                </h3>
                <p class="mt-3">
                    Ya se vio como acceder a un dato en especifico de una lista, pero ¿qué tal si se necesita acceder a
                    todos los elementos de una lista?, para acceder a los elementos de una lista es importante utilizar una
                    de las estructuras repetitivas vistas anteriormente, el ciclo for. El ciclo for va a permitir recorrer
                    todos los elementos encontrados en una lista, donde su condición de inicio será el número 0 y su
                    condición final será hasta llegar al final de la lista.
                </p>
                <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3"]
        for (var i = 0; i < lista.length; i++) { console.log(lista[i]) }
                                </code>
                                </pre>
                <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                posicion1<br>
                                posicion2
                                posicion3
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Utilizando la misma lista del ejemplo pasado, pero ahora adicional utilizando un ciclo for,
                                se muestran todos los elementos que se encuentran en la lista. Nota: se utiliza la palabra
                                reservada <span style="color: blue">length</span> para obtener la longitud de la lista y así
                                poder colocar la condición de parada
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>



            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.5</span>Añadir elementos a una lista</h3>
                <p class="mt-3">
                    Ya se ha visto como crear y acceder a los elementos de una lista, ahora se vera como añadir elementos a
                    dicha lista, como anteriormente se vio, se puede crear una lista con los elementos ya implementados
                    dentro de esta, pero habrá veces en las que se necesitara añadir elementos de manera dinámica (es decir
                    no declarados directamente por el programador). JavaScript tiene una palabra reservada que permite
                    ingresar elementos al final y al principio de una lista, estas palabras reservadas son <span
                        style="color: blue">push</span> y <span style="color: blue">unshift</span>.
                </p>
                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3"]
        lista.push("posicion3")
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3"]
        lista.unshift("posicion0")
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                </div>
                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion0", "posicion1", "posicion2", "posicion3" ]<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion1", "posicion2", "posicion3", "posicion4" ]
                            </p>
                        </div>
                        <div class="col-lg-11">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Del lado izquierdo se tiene el ejemplo de cuando se agrega un elemento a una lista al final
                                utilizando la palabra reservada <span style="color: blue">push</span>. Del lado derecho se
                                agrega otro elemento, pero esta vez al inicio de la lista utilizando la palabra reservada
                                <span style="color: blue">unshift</span>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Probar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.6</span>Eliminar elementos a una lista</h3>
                <p class="mt-3">
                    Ahora se va a mostrar a continuación, como se puede eliminar elementos de una lista. Los elementos de
                    una lista pueden ser eliminados por: el ultimo elemento, el primer elemento y un elemento especificado.
                    Para eliminar el ultimo elemento de una lista se utiliza la palabra reservada pop(), para eliminar el
                    primer elemento de una lista se utiliza la palabra reservada shift().
                </p>
                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3","posicion4"]
        lista.pop()
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3","posicion4"]
        lista.shift()
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                </div>
                <div id="result4" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion1","posicion2","posicion3" ]<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion2","posicion3","posicion4" ]
                            </p>
                        </div>
                        <div class="col-lg-11">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Del lado izquierdo se puede ver como se elimina el ultimo elemento de la lista utilizando la
                                palabra reservada <span style="color: blue">pop()</span>, como también se puede observar al
                                lado derecho se elimina el primer elemento de la lista utilizando la palabra reservada <span
                                    style="color: blue">shift()</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar4">Probar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">5.1.7</span>Eliminar elementos especificos</h3>
                <p class="mt-3">
                    Ya se pudo observar cómo se pueden eliminar elementos de una lista ya sea de su primera posición o de su
                    última posición, pero también se pueden eliminar elementos específicos a partir de una posición
                    diferente a la primera o la última. Para esto se utiliza la palabra reservada <span
                        style="color: blue">splice()</span>, que permite recibir dos parámetros, el primero será el
                    parámetro que índica la posición del elemento desde donde se va a eliminar y el segundo parámetro es el
                    número de elementos a eliminar desde la posición escogida, entonces para eliminar solamente el elemento
                    contenido en la posición especificada se pasa como segundo parámetro el número 1 que indica que solo se
                    va a eliminar ese elemento.
                </p>
                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3","posicion4"]
        lista.splice(0,1)
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                                <code class="javascript">   var lista = ["posicion1","posicion2","posicion3","posicion4"]
        lista.splice(1,2)
        console.log(lista)
                                </code>
                                </pre>
                    </div>
                </div>
                <div id="result5" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion2", "posicion3", "posicion4" ]<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                [ "posicion1", "posicion4" ]
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                En el primer ejemplo se especifica que se va a eliminar el elemento que se encuentra en la
                                posición 0, y que a su vez <span style="font-weight: bold">solo</span> se eliminara ese
                                elemento pasándole como segundo parámetro a la función <span
                                    style="color: blue">splice</span> el número 1. En el segundo ejemplo se especifica que
                                se va a eliminar el elemento que se encuentra en la posición 1 de la lista, y a su vez se
                                eliminara el siguiente elemento a la posición especificada (en este caso la posición 2).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar5">Probar</a>
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
                        <a href="{{ route('lista-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
