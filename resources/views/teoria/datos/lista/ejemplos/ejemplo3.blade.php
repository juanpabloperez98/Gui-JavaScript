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
                    Se requiere realizar un programa que guarde la temperatura de los 5 días de la semana, y después muestre en pantalla:
                    <ul class="container">
                        <li>Las temperaturas de cada día</li>
                        <li>La temperatura mayor</li>
                    </ul>

                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var temperaturas = [],
        dias = ["lunes","martes","miercoles","jueves","viernes"]
    for (var i = 0; i < 5; i++) {
        alert("Día "+dias[i]+": ")
        temp = parseFloat(prompt("Ingrese la temperatura: "))
        temperaturas.push(temp)
    }
    console.log("Temperaturas: "+ temperaturas)
    var mayor = 0
    for (var i = 0; i < 5; i++) {
        mayor < temperaturas[i] ? mayor = temperaturas[i] : null
    }
    console.log("Temperatura mayor: "+ mayor)
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
                    <code class="javascript">    Se crea una variable llamada "temperaturas", esta se iguala a una lista vacía
    Se declara una lista llamada "dias", esta contiene los días de la semana
    Ahora se crea un ciclo for que inicia con una variable iteradora "i=0" y vas hasta un máximo de 5, su incremento es de 1 en 1
    Se utiliza un alert para imprimir en una ventana emergente el día de la semana correspondiente
    Luego en una variable llamada "temp", se guardará la temperatura que ingrese el usuario
    Se agrega a la lista "temperaturas" la temperatura ingresada por el usuario y almacenada en la variable "temp"
    Se cierra el ciclo for
    Se imprime por pantalla la lista de temperaturas
    Se crea una variable llamada "mayor" y se iguala a cero
    Se crea el mismo ciclo for que se creo en la línea 3
    Con una condicional ternaria, se valida si la variable "mayor" es menor al dato que se encuentre en la lista "temperaturas" en la posición "[ i ]", de cumplirse la condición entonces, la variable "mayor" se actualiza al valor que se encuentre en la lista de temperaturas en el índice "i", de lo contrario no se hace nada y se especifica con el null
    Se cierra el ciclo for
    Por último, se imprime el valor de la temperatura máxima, que esta almacenada en la variable "mayor"
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
            placeholders_form1 = ['Ingrese la temperatura: '],
            list_datas_form1 = [],
            mayor = 0,
            dias = ["lunes","martes","miercoles","jueves","viernes"]


        var validar_float = (dato) => {
            dato = parseFloat(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {

            var retorno = false,
                texto = "",
                lon = list_datas_form1.length

            cont ++
            cont < 5 ? alert("Día "+dias[cont]+": ") : null
            if(cont == 5){
                texto = "Temperaturas: "+ list_datas_form1
                for (var i = 0; i < 5; i++) {
                    mayor < parseFloat( list_datas_form1[i]) ? mayor = list_datas_form1[i] : null
                }
                texto += "<br>Temperatura mayor: "+ mayor
                retorno = true
            }
            $('#resultado-operacion').html(texto)
            return retorno
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
            alert("Día "+dias[cont]+": ")
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar_float(valor)){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                retorno = show_results()
                if(retorno){
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
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
