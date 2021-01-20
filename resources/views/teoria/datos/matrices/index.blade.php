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
                <h3 class="text-md-center"><span class="spancolor mr-2">4.2.1</span>Matrices</h3>
                <p class="mt-3">
                    Las matrices son consideradas como listas o vectores bidimensionales, ¿Qué significa esto?, pues como su nombre lo indica, son arreglos, listas o vectores que poseen dos dimensiones que comúnmente son conocidas como filas y columnas, la intersección entre estas contiene información de datos. Similares a las listas o arreglos, las matrices utilizan índices numerados que comienzan en 0 para acceder a elementos específicos.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.2.2</span>Sintaxis Matrices</h3>
                <p class="mt-3">
                    Como se menciono anteriormente, una matriz es un conjunto de listas o arreglos que se encuentran dentro de otras listas. En otras palabras, las matrices son una lista de listas. Para su declaración o creación solo basta con crear una variable e igualarla a una lista utilizando las llaves <span style="color: blue; font-weight: bold">[ ]</span>, dentro de esta lista (que se definirá como lista madre), se encontraran un conjunto de listas las cuales contienen datos o información los cuales son los que conforman la matriz
                </p>

                <pre>
                    <code class="javascript">   var m = [[00,01,02],[10,11,12],[20,21,22]]
                    </code>
                </pre>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.2.3</span>Inicialización</h3>
                <p class="mt-3">
                    Tómese como ejemplo la siguiente matriz:
                </p>
                <pre>
                            <code class="javascript">   var matriz = [[0,1,2],[3,4,5],[6,7,8]]
                            </code>
                </pre>
                <p>
                    Se declara una variable la cual se llamará <span style="color: blue">matriz</span>, esta se iguala a un conjunto de listas que estas a su vez contienen un conjunto de datos. La variable matriz, se considera que es una matriz de <span style="color: blue">3x3</span>, ya que dentro de la lista madre se encuentran 3 listas más, que a su vez contienen 3 datos, es por eso que se considera una matriz 3 x 3 (3 filas y 3 columnas), donde el número de listas internas se consideran como el número de filas y el número de elementos de datos de cada lista interna se considera como el número de columnas.
                </p>
                {{-- <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
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
                                La variable lista contiene 3 datos que son de tipo string, al acceder a su posición <span style="color: blue;">[ 1 ]</span> se esta accediendo al segundo elemento de la lista (como se mencionó anteriormente, en programación la primera posición empieza en cero)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div> --}}
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.2.4</span>Acceder a los datos de una matriz</h3>
                <p class="mt-3">
                    Similar a las listas, para poder acceder a los elementos de una matriz, solo se necesita hacer el llamado a la variable que contenga una matriz, y utilizando las llaves dobles <span style="color: blue;font-weight: bold">[ ][ ]</span>, especificar el índice donde se encuentra el elemento a tomar de la matriz. Las llaves son dobles, puesto que como se ha venido explicando, las matrices son arreglos bidimensionales, los cuales tienen filas y columnas, por lo que el primer corchete recibe el índice de la fila donde se encuentra el dato, y el segundo corchete recibe el índice de la columna donde se encuentra el dato dentro de la matriz.
                </p>
                <pre>
                            <code class="javascript">   var m = [[1, 2], [7, 8], ['a', 'b']]
    console.log("Toda la primera fila: "+ m[0])
    console.log("Posicion 1x1: "+ m[1][1])
                            </code>
                </pre>

                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                Toda la primera fila: 1,2 <br>
                                Posicion 1x1: 8
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La matriz es almacenada en la variable <span style="color: blue; font-weight: bold">m</span>, por lo que para poder tener acceso a los datos de la matriz, es necesario hacer el llamado a la variable <span style="color: blue; font-weight: bold">m</span> utilizando las llaves <span style="color: blue; font-weight: bold">[ ] [ ]</span>. Fíjese que al utilizar <span style="color: blue; font-weight: bold">m[0]</span> sin utilizar el otro corchete, se está accediendo a toda una fila de la matriz, en este caso hace referencia a [1,2].
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
                {{-- <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
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
                                Utilizando la misma lista del ejemplo pasado, pero ahora adicional utilizando un ciclo for, se muestran todos los elementos que se encuentran en la lista. Nota: se utiliza la palabra reservada <span style="color: blue">length</span> para obtener la longitud de la lista y así poder colocar la condición de parada
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div> --}}
            </div>



            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">4.2.5</span>Recorrer una matriz</h3>
                <p class="mt-3">
                    Anteriormente se mostró  que para recorrer una lista era necesario hacer uno del ciclo for, el cual empezaría a iterar desde el índice 0 hasta la longitud de la lista, permitiendo así poder tener acceso a todos los datos de una lista. Bueno, de manera similar se puede recorrer una matriz, se necesitará ahora hacer uso de un ciclo for anidado (un ciclo que realice la iteración de las filas y otro que realice el de las columnas), por lo que su sentencia seria algo similar a esto: 
                </p>

                <pre>
                    <code class="javascript">   var m = [[0,1,2],[3,4,5],[6,7,8]]
    for (var i = 0; i < m.length; i++) {
        for (var j = 0; j < m[i].length; j++) {                
            console.log(m[i][j])
        }
    }
                    </code>
                </pre>
                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                0 1 2<br>
                                3 4 5<br>
                                6 7 8<br>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                El ciclo for superior o externo, es el encargado de recorrer las filas de la matriz, 
                                es por eso que su condición de parada es cuando <span style="color: yellow;">i</span> es menor la longitud de <span style="color: blue">m</span> 
                                (Que viene siendo el número de filas que tiene), y dentro del ciclo externo, 
                                se encuentra el ciclo que permite recorrer las columnas, es por eso que su recorrida 
                                va desde <span style="color: blue">i = 0</span> hasta la longitud de <span style="color: blue">m [ i ]</span> (que viene siendo la fila correspondiente ).
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
                        <a href="{{ route('matrices-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
