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
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.1</span>Estructuras de selección simple if</h3>
                <p class="mt-3">
                    La sentencia if se le conoce como una estructura de selección simple, y cumple con la tarea de permitir realizar o no, una determinada acción o sentencia. Esta estructura de selección basa su criterio evaluativo de si debe o no realizar una acción tomando en cuenta la evaluación de una expresión en función de una condición es decir si la comparación da como resultado un verdadero o falso.
                </p>
            </div>
            <div class="col-lg-5 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.2</span>Sintaxis condicional if</h3>
                <p class="mt-3">
                    La sintaxis de una sentencia if consta de la palabra clave if seguida de una expresión booleana encerrada entre paréntesis. Esta expresión está seguida por un bloque de sentencias delimitado por llaves de cierre. 
                </p>
                <pre>
                    <code class="javascript">   if( <span style="color: greenyellow">condicion</span> ){
        bloque de sentencias
    }
                    </code>
                </pre>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.3</span>Ejemplo condicional if</h3>
                <p class="mt-3">
                    Supongamos que se desea imprimir por pantalla si una variable <span style="color: blue; font-weight: bold">numero1</span> es mayor a una variable llamada <span style="color: blue; font-weight: bold">numero2</span>. Anteriormente si se deseaba mostrar la validación se retornaba un <span style="color: green;font-weight: bold">true</span> o un <span style="color: green;font-weight: bold">false</span>, dependiendo el resultado, ahora se desea que se muestre por pantalla, textualmente que la variable <span style="color: blue; font-weight: bold">numero1</span> es mayor que la variable <span style="color: blue; font-weight: bold">numero2</span>
                </p>
                <pre>
                                    <code class="javascript">   var numero1 = 6,
          numero2 = 10
    if(numero1>numero2){
        console.log("El numero1 es mayor que el numero 2")
    }
                                    </code>
                                </pre>
                <div id="result1" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        El numero1 es mayor que el numero 2
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Probar</a>
                </div>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.4</span>Estructuras de selección dobles if-else</h3>
                <p class="mt-3">
                    Similar a la estructura de selección simple if, la sentencia if-else, también valida que se cumpla una condición basando su resultado en una expresión booleana <span style="color: green;font-weight: bold">true</span> o <span style="color: green;font-weight: bold">false</span>, pero a diferencia a la estructura de selección simple, la estructura de selección doble, permite realizar una acción u otra dependiendo la condición. Es decir, si se cumple la condición realice una acción determinada, pero si no se cumple la condición entonces, realice otra acción diferente. por lo general estas estructuras son mutuamente excluyentes, es decir que se cumple una acción o la otra.
                </p>
                <pre>
                                    <code class="javascript">   if( <span style="color: greenyellow">condicion</span> ){
        Bloque de codigo    
    }else{
        Bloque de codigo
    }
                                    </code>
                                </pre>
            </div>
            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.5</span>Ejemplos Estructuras de selección dobles</h3>
                <p class="mt-3">
                    Ahora miremos un ejemplo similar al anterior en la estructura de selección simple, supongamos que se pide desarrollar un programa que valida si una variable <span style="color: blue; font-weight: bold">numero1</span> es mayor a otra variable llamada <span style="color: blue; font-weight: bold">numero2</span>, si la condición se cumple entonces se quiere que se sumen las dos variables, de no cumplirse la condición, entonces se restan las dos variables.
                </p>

                <pre>
                    <code class="javascript">       var numero1 = 5,
              numero2 = 5
        if(numero1>numero2){
            console.log(numero1 + numero2)
        }else{
            console.log(numero1 - numero2)
        }
                    </code>
                </pre>

                <div id="result2" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        0
                    </p>
                    <p class="text-left" style="color: white">
                        <span style="color: #F0DB4F">NOTA:</span> Nótese que los dos números son iguales, por lo que la condición no se cumple ya que <span style="color: blue; font-weight: bold">numero1</span> debe ser mayor a <span style="color: blue; font-weight: bold">numero2</span>, entonces entra al else.
                    </p>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
                
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.6</span>Estructura else if</h3>
                <p class="mt-3">
                    Como se ha visto anteriormente, las estructuras de selección doble disponen de dos bloques de sentencias que se ejecutan cuando se cumple o no una determinada condición. Ahora las estructuras else-if, sirven para cuando se requiera validar más de dos condiciones, es decir, si no se cumple una determinada condición, se pase a validar otra nueva condición diferente a la anterior.
                </p>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.7</span>Síntaxis else if</h3>
                <p class="mt-3">
                    La sintaxis de una estructura else-if, es similar a la del if-else, solo que adicional a esta, en la parte del else, se coloca una nueva validación if, que permitirá que se valide una nueva condición.
                </p>
                <pre>
                    <code class="javascript">   if( <span style="color: greenyellow">condicion</span> ){
        bloque de sentencias
    }else if( <span style="color: greenyellow">condicion 2</span> ){
        bloque de sentencias
    }else{
        bloque de sentencias
    }
                    </code>
                </pre>
            </div>


            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">2.1.8</span>Ejemplos Estructura else if</h3>
                <p class="mt-3">
                    Miremos un ejemplo para tener mas claro la estructura <span style="color: blue; font-weight: bold">else-if</span>. Supongamos que se requiere validar si una persona se encuentra en un rango de edad, y dependiendo de este rango de edad poder indicarle si esta joven, es un adulto o ya está en la vejez, para este ejercicio, se tomara como parámetro que una persona es joven si su edad se encuentra entre 1 y 25, adulto si su edad se encuentra entre 26 – 60 y vejez si se encuentra mayor a 60, de no estar en ninguno de estos rangos, se dirá que la edad es no valida.
                </p>

                <pre>
                    <code class="javascript">  var edad = 50
  if(edad > 0 && edad < 26){
      console.log("Aun es joven")
  }else if(edad > 25 && edad <= 60){
      console.log("Ya es adulto")
  }else if(edad > 60){
      console.log("Esta en vejez")
  }else{
      console.log("Edad no valida")
  }
                    </code>
                </pre>

                <div id="result3" class="result px-md-3 desactivate" style="margin-top: -59px">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" style="color: white">
                        Ya es adulto
                    </p>
                    {{-- <p class="text-left" style="color: white">
                        <span style="color: #F0DB4F">NOTA:</span> Nótese que los dos números son iguales, por lo que la condición no se cumple ya que <span style="color: blue; font-weight: bold">numero1</span> debe ser mayor a <span style="color: blue; font-weight: bold">numero2</span>, entonces entra al else.
                    </p> --}}
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
                        <a href="{{ route('simplesydobles-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>
                    
                    <div class="cardboton">
                        <a href="{{ route('operadores-ejercicios-index') }}" class="btn">Ir a los Ejercicios</a>
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
