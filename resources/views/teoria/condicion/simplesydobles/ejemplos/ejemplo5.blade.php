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
                    Se esta realizando un video juego, al cual se pide realizar un script que, dependiendo de un valor ingresado por el usuario, el personaje se mueva para la izquierda, o para la derecha. Si el usuario ingresa 1, el personaje se moverá para la izquierda, si ingresa 2, hacia la derecha. La representación de movimiento se basa en una variable llamada posx que tendrá un valor determinado de 10, por lo que, si posx disminuye, significa que el personaje se ha movido hacia la izquierda, pero si posx aumenta es porque el personaje se ha movido hacia la derecha.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var posx = 10,
        movx = parseInt(prompt("Ingrese a donde quiere dirigir el personaje: "))
  if(movx == 1){
      posx -= 1
      console.log("El personaje se ha movido hacia la izquierda, su posición nueva es: " + posx)
  }else if(movx == 2){
      posx += 1
      console.log("El personaje se ha movido hacia la derecha, su posición nueva es: " + posx)
  }else{ console.log("Personaje no se ha movido!!") }
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
                    <code class="javascript">    Se declara la variable "posx" y se iguala a 10
    Luego, se declara la variable "movx", y se iguala a lo que ingrese el usuario, convertido a entero.
    Se valida ahora si "movx" es igual a 1
    De ser igual a 1, la variable "posx" disminuye en 1
    Luego, se imprime que el jugador se ha movido a la izquierda y se imprime la variable "posx" haciendo referencia a la nueva posición del jugador
    Si la condición de la línea 3, no se cumple, entonces se valida ahora si "movx" es igual a 2 
    Si la condición anterior si se cumple, entonces se aumenta la variable "posx" en 1
    Se imprime ahora que el jugador se ha movido hacia la derecha y se imprime "posx" haciendo referencia a la nueva posición del jugador
    Por último, si no se cumple ninguna condición, entonces se imprime que el personaje no se ha movido.
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
            placeholders_form1 = ['Ingrese a donde quiere dirigir el personaje: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseFloat(dato)
            return !isNaN(dato)  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var movx = parseFloat(list_datas_form1[0]),
                posx = 10,
                texto = ""

                if(movx == 1){
                    posx -= 1
                    texto = "El personaje se ha movido hacia la izquierda,<br> su posición nueva es: " + posx
                }else if(movx == 2){
                    posx += 1
                    texto = "El personaje se ha movido hacia la derecha,<br> su posición nueva es: " + posx
                }else{ texto = "Personaje no se ha movido!!" }

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
