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
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.1</span>Operadores en JavaScript</h3>
                <p class="mt-md-3">
                    Anteriormente se vio acerca de las variables, que son, como se declaran y para que se usan. Ahora bien,
                    si se vio que la funcionalidad de las variables es efectiva a la hora de realizar un software, también
                    es de darse cuenta que no sirven de a mucho si no se pueden realizar tareas o acciones con dichas
                    variables, para eso existen los operadores en los lenguajes de programación. Los operadores son
                    herramientas que permiten manipular el valor de las variables, realizar operaciones matemáticas tales
                    como la suma, resta, multiplicación y división, al igual que operaciones lógicas sobre lógica booleana u
                    operaciones de comparación tal como mirar si un numero es mayor a otro. De esta forma, los operadores
                    permiten a los programas realizar cálculos complejos, tomar decisiones o realizar otro tipo de tareas
                    para poder realizar un software completo.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.2</span>Operadores de asignación</h3>
                <p class="mt-md-3">
                    Los operadores de asignación sirven como su nombre lo indica para asignar valores a las variables
                    declaradas, anteriormente cuando se declaraban variables se veía que se utilizado el símbolo <span
                        style="color:red;">=</span> para
                    asignar un valor a una variable. Los operadores de asignación no solo se representan con el símbolo
                    <span style="color:red;">=</span>
                    que sirve para asignar un valor especifico a una variable, también se pueden representar con los
                    símbolos <span style="color:blue;">+=</span>,<span style="color:blue;">-=</span>,<span
                        style="color:blue;">*=</span>,<span style="color:blue;">/=</span>, etc… A continuación se mostrará
                    una tabla con el contenido de dichos
                    operadores.
                </p>
                <table class="table mt-md-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Nombre</th>
                            <th scope="col">Operador Abreviado</th>
                            <th scope="col">Significado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Asignación</td>
                            <td class="text-left"> x = y</td>
                            <td>x = y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de adición</td>
                            <td class="text-left">x += y</td>
                            <td>x = x + y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de resta</td>
                            <td class="text-left">x -= y</td>
                            <td>x = x - y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de multiplicación</td>
                            <td class="text-left">x *= y</td>
                            <td>x = x * y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de división</td>
                            <td class="text-left">x /= y</td>
                            <td>x = x / y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de residuo</td>
                            <td class="text-left">x %= y</td>
                            <td>x = x % y</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Asignación de exponenciación</td>
                            <td class="text-left">x **= y</td>
                            <td>x = x ** y</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <span style="color: #d3c568;font-weight: bold;">NOTA</span>: Si no entiende alguno de los operadores de
                    asignación que ve
                    en la tabla, no es de preocuparse, más adelante se explicaran los operadores aritméticos y podrá
                    verificar con algunos ejemplos.
                </p>
            </div>
            <div class="col-lg-5 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.3</span>Incremento y decremento</h3>
                <p class="mt-md-3">
                    El incremento y el decremento como su nombre lo indica, son operadores que sirven para aumentar o
                    decrementar el valor de una variable, estos operadores solo funcionan con tipos de datos numéricos.
                </p>
                <pre>
                                    <code class="javascript">   var incremento = 10,
            decremento = 10
            incremento ++
            decremento --
            console.log(incremento,decremento)
                                    </code>
                                </pre>
                <div id="result1" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        11 9
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>
            <div class="col-lg-5 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.4</span>Operadores de comparación</h3>
                <p class="mt-md-3">
                    Los operadores de comparación, comparan sus operandos y devuelven un valor lógico en función de si la
                    comparación es verdadera (True) o Falsa (False). Los operandos pueden ser variables o valores numéricos,
                    cadenas (string), lógicos u objetos.
                </p>
                <pre>
                                    <code class="javascript">   var numero1 = 5,
            numero2 = 5,
            numero3 = 10
            console.log(numero1 == numero2)
            console.log(numero2 == numero3)
                                    </code>
                                </pre>
                <div id="result2" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        true
                        false
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>
            <div class="col-lg-11 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.5</span>Tabla operadores comparación</h3>
                <p class="mt-md-3">
                    A continuación, se muestra una tabla donde se especifican los operadores de comparación que maneja
                    JavaScript
                </p>
                <table class="table mt-md-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Operador</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Ejemplos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Igual (==)</td>
                            <td class="text-left">Devuelve true si los operandos son iguales.</td>
                            <td>3 == var1 <br>
                                "3" == var1</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">No es igual (!=)</td>
                            <td class="text-left">Devuelve true si los operandos no son iguales.</td>
                            <td>var1 != 4
                                var2 != "3"</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Estrictamente igual (===)</td>
                            <td class="text-left">Devuelve true si los operandos son iguales y del mismo tipo. Consulta
                                también Object.is y similitud en JS.</td>
                            <td>3 === var1</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Desigualdad estricta (!==)</td>
                            <td class="text-left">Devuelve true si los operandos son del mismo tipo pero no iguales, o son
                                de diferente tipo.</td>
                            <td>var1 !== "3"
                                3 !== '3'</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Mayor que (>)</td>
                            <td class="text-left">Devuelve true si el operando izquierdo es mayor que el operando derecho.
                            </td>
                            <td>var2 > var1
                                "12" > 2</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Mayor o igual que (>=)</td>
                            <td class="text-left">Devuelve true si el operando izquierdo es mayor o igual que el operando
                                derecho.</td>
                            <td>var2 >= var1
                                var1 >= 3</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Menor que (<)< /td>
                            <td class="text-left">Devuelve true si el operando izquierdo es menor que el operando derecho.
                            </td>
                            <td>var1 < var2 "2" < 12</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Menor o igual (<=)< /td>
                            <td class="text-left">Devuelve true si el operando izquierdo es menor o igual que el operando
                                derecho.</td>
                            <td>var1 <= var2 var2 <=5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-11 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.6</span>Operadores aritméticos</h3>
                <p class="mt-md-3">
                    Los operadores aritméticos, son aquellos operadores que permiten realizar las operaciones matemáticas
                    conocidas tales como la suma, resta, multiplicación, división, etc. Los operandos en los operadores
                    aritméticos, pueden tomar valores numéricos para realizar dichas operaciones, pero operaciones como la
                    suma, pueden recibir como operando dos cadenas de caracteres (string), para concatenarlas (unirlas).
                </p>
                <pre>
                                    <code class="javascript">        var num = 10,
               num2 = 5
               console.log(num+num2)
                                    </code>
                                </pre>
                <div id="result3" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        15
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Probar</a>
                </div>
                <p class="mt-md-4">
                    Como se puede ver, para este ejemplo de operadores aritméticos, se declaran dos variables con valores
                    enteros y se realiza la operación de suma, la cual da como resultado un valor de 15
                </p>
                <pre>
                        <code class="javascript">        var str1 = "Hola",
               str2 = "Mundo"
               console.log(str1+str2)
                        </code>
                    </pre>
                <div id="result4" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        HolaMundo
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar4">Probar</a>
                </div>
                <p class="my-md-4">
                    Al igual que el ejemplo anterior, se utiliza el operador suma, pero esta vez con dos variables de tipo string, lo que da como resultado una nueva cadena de caracteres (string), concatenando los valores de las variables str1 y str2
                </p>
                <table class="table mt-md-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Operador</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Ejemplo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Residuo (%)</td>
                            <td class="text-left">Operador binario. Devuelve el resto entero de dividir los dos operandos.</td>
                            <td>12 % 5 devuelve 2</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Negación unaria (-)</td>
                            <td class="text-left">Operador unario. Devuelve la negación de su operando.</td>
                            <td>Si x es 3, entonces -x devuelve -3.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Positivo unario (+)</td>
                            <td class="text-left">Operador unario. Intenta convertir el operando en un número, si aún no lo es.</td>
                            <td>+"3" devuelve 3.
                                +true devuelve 1.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Operador de exponenciación (**)</td>
                            <td class="text-left">Calcula la base a la potencia de exponente, es decir, base ^ exponente</td>
                            <td>2 ** 3 returns 8.
                                10 ** -1 returns 0.1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-11 mx-auto mt-md-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">1.2.7</span>Operadores lógicos</h3>
                <p class="mt-md-3">
                    Los operadores lógicos son operadores que se utilizan con valores booleanas, es decir, true o false. En gran parte los operadores booleanos son utilizados para realizar comparaciones que retornaran como resultado un valor booleano, como decir si un número es mayor a 10 Y el mismo numero es menor a 20, al realizar esas comparaciones, se retornara un valor booleano dado el caso de que las condiciones se cumplan. Para tener una idea mas clara, a continuación, un ejemplo
                </p>
                <pre>
                    <code class="javascript">        var num = 10,
               num2 = 25,
               numero_c = 15
        console.log(numero_c > num && numero_c < num2)
                    </code>
                </pre>
                <div id="result5" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        true
                    </p>
                </div>
                <div class="text-center mt-md-3">
                    <a href="#" class="btn btn-probar" id="boton-probar5">Probar</a>
                </div>
                <table class="table mt-md-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Operador</th>
                            <th scope="col">Uso</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">AND Lógico (&&)</td>
                            <td class="text-left">expr1 && expr2</td>
                            <td>Devuelve expr1 si se puede convertir a false; de lo contrario, devuelve expr2. Por lo tanto, cuando se usa con valores booleanos, && devuelve true si ambos operandos son true; de lo contrario, devuelve false.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">OR lógico (||)</td>
                            <td class="text-left">expr1 || expr2</td>
                            <td>Devuelve expr1 si se puede convertir a true; de lo contrario, devuelve expr2. Por lo tanto, cuando se usa con valores booleanos, || devuelve true si alguno de los operandos es true; si ambos son falsos, devuelve false</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">NOT lógico (!)</td>
                            <td class="text-left">!expr</td>
                            <td>Devuelve false si su único operando se puede convertir a true; de lo contrario, devuelve true</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mx-auto p-md-4" id="ejemplos">
            <div class="col-lg-11 text-center mx-auto bg-light columna-principal">
                <h4 class="text-center mb-md-5 font-weight-bold">Ejemplos</h4>
                <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 1</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejemplo1') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                        <div class="card-personalizada mx-md-4">
                            <div class="cardheader">
                                <h5>Ejemplo # 2</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejemplo2') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 3</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('operadores-ejemplo3') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                        <div class="card-personalizada mx-md-4">
                            <div class="cardheader">
                                <h5>Ejemplo # 4</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('tipodatos-ejemplo2') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="card-personalizada">
                            <div class="cardheader">
                                <h5>Ejemplo # 5</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('tipodatos-ejemplo1') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                        <div class="card-personalizada mx-md-4">
                            <div class="cardheader">
                                <h5>Ejemplo # 6</h5>
                            </div>
                            
                            <div class="cardboton">
                                <a href="{{ route('tipodatos-ejemplo2') }}" class="btn">Ir al ejemplo</a>
                            </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon icon-styles" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon icon-styles" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
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
