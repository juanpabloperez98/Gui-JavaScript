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
                <h4 class="font-weight-bold">Ejemplo # 6</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que calcule la serie de Fibonacci hasta un número ingresado por el usuario (El número no puede ser mayor a 20)
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingrese número: "))
        num1 = 0,
        num2 = 1
        serie = ""
    serie += "0-1"
    for(var i = 1; i < n; i++){
        z = num2 + num1
        serie += "-" + z 
        num1 = num2
        num2 = z 
    }
    console.log(serie)
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
                    <code class="javascript">    Se crea la variable "n" y se iguala a lo que ingresa el usuario convertido a entero
    Se crea la variable "num1" y se iguala a 0 (El inicio de la serie de Fibonacci)
    Se crea la variable "num2" y se iguala a 1 (El segundo número de la serie de Fibonacci)
    Se declara una variable llamada "serie" y se iguala a un string vacío
    La variable serie se le concatena "01"
    Luego se crea una sentencia for, que ira desde el número 1 hasta el valor de la variable "n" ingresada por el usuario
    Después se declara una variable "z", esta se iguala a la suma entre las variables "num2" y "num1"
    La variable "serie" se le concatena el valor de "z", (Esta variable contiene el valor de la suma de los dos números anteriores de la serie)
    La variable "num1" se actualiza al valor de lo que hay en la variable "num2"
    Y ahora la variable "num2" se iguala al valor de la variable z (La suma de los anteriores dos números de la serie)
    Se cierra el ciclo for de la línea 6
    Se imprime el valor de la variable "serie"
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
            max_inputs = 1, 
            cont = 0,
            placeholders_form1 = ['Ingrese número: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) && dato <20 && dato > 0 ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
            texto = "",
            num1 = 0,
            num2 = 1
            serie = ""
            serie += "0-1"
            for(var i = 1; i < n; i++){
                z = num2 + num1
                serie += "-"+z
                num1 = num2
                num2 = z 
            }
            texto = serie
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
                if(cont < max_inputs){
                    placeholder_set_inputs()
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    show_results()
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                if(parseInt(valor) < 20){ var msg = alertify.error('Dato no valido'); }else { var msg = alertify.error('El dato debe ser menor o igual a 20'); }
                msg.delay(1.3)
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
