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
                <h4 class="font-weight-bold">Ejemplo # 4</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que una vez que solicita dos números por teclado, los pasa
                    a una función donde se calcula la suma de éstos. La función devolverá dicho resultado, pero en el caso de que salga negativo, deberá cambiarle el signo antes de devolverlo. Imprimir el resultado en la función principal. 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   function suma(n1,n2) {
        var sum = n1 + n2
        sum < 0 ? sum = sum * -1 : null
        return sum
    }
    var n1 = parseInt(prompt("Ingrese el número 1: ")),
        n2 = parseInt(prompt("Ingrese el número 2: ")),
        suma_ = suma(n1,n2)
    console.log("La suma de los números es: "+ suma_)
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
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea la función "suma" que recibe como parámetro dos valores que serán almacenados en las variables "n1" y "n2"
    Se declara una variable llamada "sum" y se iguala a la suma de las variables "n1" + "n2"
    Con una condición ternaria se valida si la variable "sum" es menor a cero (Para verificar si es negativo), de ser así entonces se actualiza el valor de la variable "sum" multiplicando su valor por -1, de no cumplirse la condición, entonces no se hace nada 
    Se retorna la variable "sum"
    Se cierra la función
    Ahora se declara una variable "n1" y se iguala al primer número que ingrese el usuario
    Después se declara una variable "n2" y se iguala al segundo número que ingrese el usuario
    Y siguiente se crea la variable "suma_" y se iguala al valor que retorne la función "suma()" pasándole los valores "n1" y "n2"
    Se imprime el valor de la suma
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

        function suma(n1,n2) {
            var sum = n1 + n2
            sum < 0 ? sum = sum * -1 : null
            return sum
        }

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n1 = parseInt(list_datas_form1[0]),
                n2 = parseInt(list_datas_form1[1]),
                texto = "",
                suma_ = suma(n1,n2)
            texto = "La suma de los números es: "+ suma_
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
