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
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.1</span>Tipos de datos en JavaScript</h3>
                <p class="mt-md-3">
                    JavaScript al igual que otros lenguajes de programación maneja diferentes tipos de datos, a menudo la
                    declaración y uso de estos tipos de datos difieren según el lenguaje de programación que se esté
                    utilizando. En JavaScript, al igual que en la mayoría de los lenguajes de programación, al declarar una
                    variable y guardar su contenido, también se le esta asignando un tipo de dato, ya sea de forma implícita
                    o explícita. El tipo de dato no es más que la naturaleza de su contenido: contenido numérico, contenido
                    de texto, etc...
                </p>
            </div>
            <div class="col-lg-5 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.2</span>Tipos de lenguajes</h3>
                <p class="mt-md-3">
                    En términos generales se puede encontrar con dos tipos de lenguajes de programación:
                </p>
                <p>
                    <span style="font-weight: bold">Lenguajes estáticos</span>:
                    Son los lenguajes a los cuales se les debe indicar el tipo de dato al que pertenece la variable
                    (numérico, booleano, etc)
                </p>
                <p>
                    <span style="font-weight: bold">Lenguajes dinámicos</span>: Cuando se crea una variable, no es necesario
                    indicarle el tipo de dato que va a
                    contener. El lenguaje de programación se encargará de deducir el tipo de dato dependiendo el valor que
                    se le haya asignado.
                </p>
                <p>
                    <span class="spancolor">Nota</span>: JavaScript es un lenguaje de programación dinámico.
                </p>
            </div>
            <div class="col-lg-11 mt-md-3 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.3</span>¿Qué tipos de datos existen?</h3>
                <p class="mt-md-4 mb-md-3 ">A continuación, se puede ver una tabla con los tipos de datos que maneja
                    JavaScript.</p>
                <table class="table mt-md-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Tipo de dato</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Ejemplo básico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">number</td>
                            <td class="text-left">Valor numérico (enteros, decimales, etc...)</td>
                            <td>68</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">string</td>
                            <td class="text-left">Valor de texto (cadenas de texto, carácteres, etc...)</td>
                            <td>'JP'</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">boolean</td>
                            <td class="text-left">Valor booleano (valores verdadero o falso)</td>
                            <td>true</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">undefined</td>
                            <td class="text-left">Valor sin definir (variable sin inicializar)</td>
                            <td>undefined</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">function</td>
                            <td class="text-left">Función (función guardada en una variable)</td>
                            <td>function() {}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">object</td>
                            <td class="text-left">Objeto (estructura más compleja)</td>
                            <td>{}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-11 mt-md-3 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.4</span>Declarando variables</h3>
                <p class="mt-md-3">
                    Para mostrar un poco mejor sobre los tipos de datos en JavaScript, a continuación, se muestra un ejemplo
                    de declaraciones de variables.
                </p>
                <pre>
                                                        <code class="javascript">
                                    var tipo_string = 'Hola Mundo'
                                    var tipo_int = 10
                                    var tipo_bool = false
                                    var tipo_undefined
                                                        </code>
                                                    </pre>
                <p class="mt-md-3">
                    La palabra reservada <span style="color: #d3c568">var</span>, sirve para indicarle a JavaScript que la
                    variable declarada es (valga la redundancia) variable, es decir que su valor puede cambiar en cualquier
                    momento cuando se lo indiquemos.
                </p>
            </div>
            <div class="col-lg-5 mt-md-3 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.5</span>Modificando Variables</h3>
                <p class="mt-md-3">
                    Como se pudo visualizar anteriormente, se ha mostrado un ejemplo de como se declaran variables en
                    JavaScript, también se mencionó, que las variables que posteriormente vienen acompañadas de la palabra
                    reservada var, son las variables las cuales se podrán modificar:
                </p>
                <pre>
                                                <code class="javascript">
                var tipo_string = 'Hola Mundo'
                tipo_string = 10
                console.log(tipo_string)
                                                </code>
                                            </pre>
                <div id="result1" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        10
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>
            <div class="col-lg-5 mt-md-3 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.1.6</span>Ver el tipo de variable</h3>
                <p class="mt-md-3">
                    JavaScript tiene palabras reservadas que facilitan el manejo y el desarrollo de programas con este
                    lenguaje de programación, a medida que vaya avanzando conocerá algunas. <span
                        style="color: red; font-weight: bold">typeof()</span> es una palabra
                    reservada que retorna el tipo de dato que se envié por parámetro:
                </p>
                <pre>
                                                <code class="javascript">
                    var tipo_string = 'Hola Mundo',
                          tipo_int = 10
                    console.log(typeof(tipo_string),typeof(tipo_int))
                                                </code>
                                            </pre>
                <div id="result2" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        string number
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>
        </div>

        <div class="row mx-auto p-md-4" id="ejemplos">
            <div class="col-lg-11 text-center mx-auto bg-light columna-principal">
                <h4 class="text-center mb-md-5 font-weight-bold">Ejemplos</h4>
                <div class="card-personalizada">
                    <div class="cardheader">
                        <h5>Ejemplo # 1</h5>
                    </div>
                    <div class="cardboton">
                        <a href="{{ route('tipodatos-ejemplo1') }}" class="btn">Ir al ejemplo</a>
                    </div>
                </div>
                <div class="card-personalizada mx-lg-4 mt-4 mt-lg-0">
                    <div class="cardheader">
                        <h5>Ejemplo # 2</h5>
                    </div>
                    <div class="cardboton">
                        <a href="{{ route('tipodatos-ejemplo2') }}" class="btn">Ir al ejemplo</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        var status1 = 0,
            status2 = 0
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

    </script>
@endsection
