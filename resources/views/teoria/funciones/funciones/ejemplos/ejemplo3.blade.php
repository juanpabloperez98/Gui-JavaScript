@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejemplos.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="ej-main">
        <div class="row mx-auto">
            <div class="col-lg-12 p-md-3">
                <h4 class="font-weight-bold">Ejemplo # 3</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realice una función que calcule el factorial de un número enviado por parámetro y retorne el resultado del factorial, luego se le deberá pedir al usuario dos números por pantalla los cuales se pasaran a la función ya creada para calcular sus factoriales y luego sumarlos. Al final se deberá mostrar el resultado de los factoriales más la suma
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   function factorial(n) {
        for (var i = 1; i <= n; i++) {
            factorial_ = 1
            for (var j = i; j > 0; j--) {
                factorial_ *= j
            }
        }
        return factorial_
    }
    var n1 = parseInt(prompt("Ingrese el número 1: ")),
        n2 = parseInt(prompt("Ingrese el número 2: "))
    factorial_n1 = factorial(n1)
    factorial_n2 = factorial(n2)
    console.log(factorial_n1)
    console.log(factorial_n2)
    console.log("Suma de factoriales: "+ (factorial_n1+factorial_n2))
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white"></p>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea una función llamada "factorial" que se le pasa como parámetro un valor y se almacena en la variable "n"
    Se declara un ciclo for superior, que ira iterando desde 1 hasta el valor de "n", utilizando como variable iteradora a "i"
    Se declara una variable llamada "factorial_", esta se iguala a 1
    Ahora se declara el ciclo inferior, que ira desde el valor de la variable "i" hasta 0, por lo que el operador tendrá que ser de decremento
    Se ira multiplicando el valor de la variable "factorial_" en j por cada iteración que se haga en el ciclo inferior
    Se cierra el ciclo for de la línea 4
    Se cierra el ciclo for superior de la línea 2
    Se retorna el valor de la variable "factorial_"
    Se cierra la función
    Ahora se declara una variable "n1" y se iguala al primer número que ingrese el usuario
    Después se declara una variable "n2" y se iguala al segundo número que ingrese el usuario
    Se crea una variable "factorial_n1" y se iguala a lo que retorne la función "facotrial()" pasándole como parámetro la variable "n1"
    Se crea una variable "factorial_n2" y se iguala a lo que retorne la función "facotrial()" pasándole como parámetro la variable "n2"
    Se imprime el valor de la variable "facotrial_n1"
    Se imprime el valor de la variable "facotrial_n2"
    Se imprime el valor de la variable de la suma entre "facotrial_n1" y "facotrial_n2"
                    </code>
                </pre>
                <div class="text-md-center">
                    <a href="#" class="btn" id="reiniciar">Reiniciar</a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')

    <script>

        var dato1 = 0,
            cont = 0,
            placeholders_form1 = ['Ingrese el número 1: ','Ingrese el número 2: '],
            list_datas_form1 = [],
            num_max = 2

        function factorial(n) {
            for (var i = 1; i <= n; i++) {
                factorial_ = 1
                for (var j = i; j > 0; j--) {
                    factorial_ *= j
                }
            }
            return factorial_
        }

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) && dato > 0 && dato < 100 ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
                n2 = parseInt(list_datas_form1[1]),
                texto = ""
            factorial_n1 = factorial(n)
            factorial_n2 = factorial(n2)
            texto += factorial_n1
            texto += "<br>"+factorial_n2
            texto += "<br>Suma de factoriales: "+ (factorial_n1+factorial_n2)
            $('#resultado-operacion').html(texto)
        }

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codigo').toggle('explode')
        })

        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#datos').toggle('explode')
            $('#ejecutar').toggle('explode')
            $('#sig').toggle('explode')
            placeholder_set_inputs()
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                cont ++
                if(cont < num_max){
                    placeholder_set_inputs()
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    show_results() 
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = "Dato no valido"
                var msg_ = alertify.error(msg);
                msg_.delay(1.3)

            }
                       
        })


        $('#exp').on('click', (e) => {
            e.preventDefault()
            $('#exp').toggle('explode')
            $('#code-explain').toggle('explode')
        })

        $('#reiniciar').on('click', (e) => {
            e.preventDefault()
            location.reload()
        })  

    </script>

@endsection
