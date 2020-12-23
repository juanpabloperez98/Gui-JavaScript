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
                    Se desea crear un juego de azar, el cual consiste en pedirle al usuario un numero del 1 al 10, el programa deberá crear en una variable un numero aleatorio y validar si el numero ingresado por el usuario es mayor al generado por el programa, de ser así, se imprime que el usuario ha ganado el juego, de lo contrario se especifica que el usuario ha perdido
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var numero_usuario = parseInt(prompt("Ingrese un numero del 1 al 10: "))
  if(numero_usuario > 0 && numero_usuario <= 10){
      var numero_juego = Math.random() * (11 - 1) + 1
      numero_juego = parseInt(numero_juego)
      console.log("Numero usuario: "+ numero_usuario + " Numero juego: "+ numero_juego)
      numero_usuario > numero_juego ? console.log("Usted ha ganado el juego!!") : console.log("Usted ha perdido el juego!!")
  }else{ console.log("El numero ingresado no es valido") }
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
                    <code class="javascript">    Primero se define una variable llamada "numero_usuario", y se iguala a lo que ingrese el usuario convertido a entero
    Se valida ahora si el numero ingresado por el usuario esta en el rango de 1 y 10 (es decir, que sea mayor a cero y menor o igual a 10)
    Ahora se crea la variable llamada "numero_juego", esta se iguala a lo que retorne la función Math.random() * (11-1) – 1. (<span style="color: rgba(244, 219, 79, 1)">NOTA</span>:  Math.random() retorna números enteros aleatorios, al multiplicar por (11-1) – 1, se esta definiendo el rango de números en los que se desea que se generen los valores aleatorios. Donde 11 es el máximo valor sin incluir (es decir, que no se tiene en cuenta), y 1 es el mínimo valor incluido)
    Ahora el valor que hay en la variable "numero_juego", se convierte a entero y se vuelve almacenar en la misma variable "numero_juego"
    Se imprime el numero ingresado por el usuario, y el numero aleatorio generado por el juego
    Ahora usando una condición ternaria, se valida si la variable "numero_usuario" es mayor a la variable con numero aleatorio "numero_juego", de cumplirse la condición, se imprime que el se ha ganado el juego, de lo contario se imprime que se ha perdido el juego
    Por último, si la condición de la línea 2, no se cumple, significa que el dato ingresado por el usuario no esta entre el rango de 1 y 10, entonces se imprime que el dato no es valido
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
            placeholders_form1 = ['Ingrese un numero del 1 al 10: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato)  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var numero_usuario = parseInt(list_datas_form1[0]),
                texto = ""

                if(numero_usuario > 0 && numero_usuario <= 10){
                    var numero_juego = Math.random() * (11 - 1) + 1
                    numero_juego = parseInt(numero_juego)
                    texto = "<span style='color: greenyellow'>Numero usuario</span>: "+ numero_usuario + " <span style='color: greenyellow'>Numero juego</span>: "+ numero_juego
                    numero_usuario > numero_juego ? texto += "<br>Usted ha ganado el juego!!":texto += "<br>Usted ha perdido el juego!!" 
                }else{ texto = "El numero ingresado no es valido"  }



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
                $('#datos').toggle('explode')
                $('#exp').toggle('explode')
                $('#result').toggle('explode')
                show_results()
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
