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
                <h4 class="font-weight-bold">Ejemplo # 5</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que calcula el factorial de un nº entero y positivo.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Ingrese un número: "))
    for (var i =1; i <= n; i++) {
        factorial = 1
        for(var j = i;j > 0; j --){
            factorial *= j
        }
        console.log("Factorial de "+i+" = "+ factorial)
    }
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
                    <code class="javascript">    Se declara la variable "n" y se iguala a lo que ingrese el usuario convertido a entero
    Se declara un ciclo for superior, que ira iterando desde 1 hasta el valor de "n", utilizando como variable iteradora a "i"
    Se declara una variable llamada "factorial", esta se iguala a 1
    Ahora se declara el ciclo inferior, que ira desde el valor de la variable "i" hasta 0, por lo que el operador tendrá que ser de decremento
    Se ira multiplicando el valor de la variable factorial en j por cada iteración que se haga en el ciclo inferior
    Se cierra el ciclo for de la línea 4
    Se imprime el valor de la variable "factorial", que hace referencia a el factorial de "i" en esa iteración
    Se cierra  el ciclo for superior de la línea 2
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
            placeholders_form1 = ['Ingrese numero: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) && dato <11 && dato > 0 ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
            texto = ""
            
            for (var i =1; i <= n; i++) {
                factorial = 1
                for(var j = i;j > 0; j --){
                    factorial *= j
                }
                texto += "Factorial de "+i+" = "+ factorial + "<br>"
            }
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
                if(parseInt(valor) < 10){ var msg = alertify.error('Dato no valido'); }else { var msg = alertify.error('El dato debe ser menor o igual a 10'); }
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
