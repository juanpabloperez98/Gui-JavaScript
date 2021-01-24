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
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.1</span>Objetos</h3>
                <p class="mt-3">
                    Antes de empezar hablar de que es un objeto, es importante tener en cuenta que en JavaScript la mayoría
                    de cosas son objetos desde características del núcleo de JavaScript como listas o matrices (las vistas
                    anteriormente) hasta un explorador de APIS construido en JavaScript (Concepto API que no se verá en este
                    software). Un objeto es una colección de datos relacionados y/o funcionalidad, los cuales contienen el
                    concepto de clave – valor, donde un objeto puede tener muchas claves y cada una de esas claves tendrán
                    un único valor. Los valores de las claves pueden ser cualquier tipo de dato como los que hemos visto
                    hasta el momento tales como listas, matrices, enteros, y hasta una función (Concepto que se verá en la
                    siguiente sección). Es de esta manera en la que se puede tener un conjunto de datos y funciones
                    almacenadas en una variable la cual se le conoce como objeto y que se puede utilizar a lo largo de todo
                    el programa que se esté realizando.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.2</span>Sintaxis Objetos</h3>
                <p class="mt-3">
                    Al igual que muchas cosas en JavaScript, la creación de un objeto empieza con la definición e iniciación
                    de una variable. Esta variable previamente declarada se inicializa con dos corchetes <span style="color: blue">{ }</span> para definir un
                    objeto vacío:
                </p>

                <pre>
                        <code class="javascript">   var objeto = {}
                        </code>
                    </pre>

                <p>
                    Pero de nada sirve tener un objeto vacío sin nada de datos o funciones que permitan poder ser
                    utilizadasa lo largo de un programa. A continuación, se muestra como se declara un objeto con 3
                    elementos dentro
                    de él:
                </p>

                <pre>
                        <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino',
    }
                        </code>
                    </pre>

                <p>
                    Nótese que el objeto tiene 3 claves que son nombre, edad y género, cada una de estas claves delimitadas por dos puntos, después de los dos puntos se encuentran los valores de estas claves, es por eso que se menciono anteriormente el concepto de clave – valor. Cada clave y valor del objeto debe estar separada por una coma.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.3</span>Acceder a los datos de un objeto</h3>
                <p class="mt-3">
                    Ya se ha visto a través de la sintaxis, como se puede crear un objeto y tener datos en el objeto. 
                    Ahora se mostrará cómo se pueden acceder a los datos que hay dentro de los objetos. Para poder acceder a los datos de un objeto 
                    se utiliza una sintaxis similar a la de las matrices y listas, la cual es necesario hacer el llamado a la variable que contiene el 
                    objeto y utilizando llaves <span style="color: blue">[ ]</span> se accede a los datos que se contengan según su clave indicada: 
                </p>
                <pre>
                                            <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino',
    }
    console.log(persona["nombre"])
                                            </code>
                                </pre>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                Juan
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Como se puede ver, la diferencia con respecto a una lista o una matriz es que, para acceder al dato de la clave de un objeto, no es necesario indicarle el <span style="color: red">índice</span> número al que corresponder, sino que es necesario indicarle el nombre de la <span style="color: blue">clave</span> correspondiente a la que se quiere acceder.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.4</span>Acceder a los datos de una clave
                </h3>
                <p class="mt-3">
                    Como se ha mencionado, los objetos tienen claves, y estas claves a su vez, contienen cualquier tipo de datos, por lo que si al querer acceder al valor de una clave, que tiene (valga la redundancia) 
                    como valor una lista de números, entonces utilizando la sintaxis anteriormente vista de utilizar 
                    solo una llave <span style="color: blue">[ ]</span> e indicando el 
                    nombre de la clave, se estaría accediendo a toda la lista de número:
                </p>
                <pre>
                    <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino',
        numeros: [1,2,3,4,5]
    }
    console.log(objeto["numeros"])
                    </code>
                </pre>
                <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    +<h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white;">
                        1 2 3 4 5
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>

                <p class="mt-5">    
                Para acceder a un valor especifico de la lista que se encuentra en la clave números, 
                es necesario utilizar las llaves dobles <span style="color: blue">[ ] [ ]</span>, donde en las primeras llaves se indicara el nombre 
                de la clave y en la segunda llave el índice de la lista en donde se encuentra el dato: 
                </p>

                <pre>
                    <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino',
        numeros: [1,2,3,4,5]
    }
    console.log(objeto["numeros"][1])
                    </code>
                </pre>
                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    +<h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white;">
                        2
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Probar</a>
                </div>

            </div>




            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.5</span>Agregar elementos a un objeto</h3>
                <p class="mt-3">
                    Ya se ha visto como crear un objeto y como acceder a sus datos, ahora se enseñará como agregar datos a un objeto. Para agregar datos en un objeto se debe recalcar que el objeto debe estar ya creado previamente y almacenado en una variable. Almacenar datos en un objeto es muy sencillo y similar a como acceder a los datos, por lo que en necesario hacer el llamado a la variable del objeto y entre llaves <span style="color: blue">[ ]</span> indicar la clave que se desea agregar, después se iguala al dato que se desea agregar al objeto:
                </p>
                <pre>
                    <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino'
    }
    objeto["saludo"] = 'Hola soy el nuevo elemento'
    console.log(objeto)
                    </code>
                </pre>

                <div id="result4" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                nombre: 'Juan' <br>
                                edad: 23 <br>
                                genero: 'Masculino' <br>
                                saludo: 'Hola soy el nuevo elemento'
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Como se puede ver, el objeto tiene sus 3 claves iniciales con las que se creó, pero adicional a eso contiene una <span style="color: blue">cuarta clave</span> llamada saludo que tiene como valor, el string que se le indico anteriormente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar4">Probar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.3.6</span>Eliminar elementos de los objetos</h3>
                <p class="mt-3">
                    Así como se han podido crear y agregar elementos a un objeto, también se pueden eliminar elementos de estos mismos. En JavaScript existe una palabra reservada llamada <span style="color: blue">delete</span>, esta palabra como su nombre lo indica en ingles (eliminar), elimina un dato especificado del flujo del programa, lo que quiere decir que jamás se podrá volver a utilizar en el flujo del programa a demás de que se vuelva a declarar el dato mas adelante. Para poder eliminar una clave de un objeto, es necesario llamar a la palabra reservada <span style="color: blue">delete</span> seguido del dato (o variable) que se desee eliminar.
                </p>
                
                <pre>
                    <code class="javascript">   var objeto = {
        nombre: 'Juan',
        edad: 23,
        genero: 'masculino'
    }
    delete objeto['nombre']
    console.log(objeto)
                    </code>
                </pre>
                <div id="result5" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                edad: 23<br>
                                genero: "masculino"
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La variable <span style="color: blue">objeto</span> contiene 3 claves que se han definido a la hora de crear el objeto, utilizando la palabra reservada <span style="color: red">delete</span> y especificándole la clave del objeto a eliminar, se está (valga la redundancia) eliminando del flujo del programa la clave y el valor que se encuentra en la variable <span style="color: blue">objeto</span>
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
                        <a href="{{ route('objetos-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
