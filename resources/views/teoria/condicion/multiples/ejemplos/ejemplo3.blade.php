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
                    En una empresa desarrolladora de video juegos, se busca poder desarrollar un juego el cual el personaje principal se mueva con las teclas A, W, D, S, donde el movimiento del personaje será izquierda, arriba, derecha, abajo, correspondientemente la tecla que haya ingresado. Se pide desarrollar un script, que valide dependiendo la tecla ingresada por el usuario hacia a donde se mueve el personaje.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var tecla = prompt("Ingresa tecla: ")
  switch(tecla){
      case 'a':case 'A':{
          console.log("Se mueve hacia la izquierda")
          break
      }
      case 'w':case 'W':{
          console.log("Se mueve hacia la arriba")
          break
      }
      case 'd':case 'D':{
          console.log("Se mueve hacia la derecha")
          break
      }
      case 's':case 'S':{
          console.log("Se mueve hacia la abajo")
          break
      }
      default:{
          console.log("Tecla no valida")
          break
      }
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
                    <code class="javascript">    Se declara la variable "tecla" y se iguala a lo que ingrese el usuario
    Se declara la sentencia switch y se pasa como condición la variable "tecla"
    Si cumple el case "a" o "A"
    Se imprime que el jugador se mueve a la izquierda
    Se utiliza el break para romper el case
    Se cierra el case
    Si cumple el case "w" o "W"
    Se imprime que el jugador se mueve hacia arriba
    Se utiliza el break para romper el case
    Se cierra el case
    Si cumple el case "d" o "D"
    Se imprime que el jugador se mueve a la derecha
    Se utiliza el break para romper el case
    Se cierra el case
    Si cumple el case "s" o "S"
    Se imprime que el jugador se mueve hacia abajo
    Se utiliza el break para romper el case
    Se cierra el case
    Si no se cumple ninguno de los case
    Se imprime que la tecla no es valida
    Se utiliza el break para romper el case
    Se cierra el default
    Por último, se cierra el switch de la línea 2
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
            placeholders_form1 = ['Ingresa tecla: '],
            list_datas_form1 = []

        var validar = (dato) => {
            return dato != ""  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var tecla = list_datas_form1[0],
                texto = ""

                switch(tecla){
                    case 'a':case 'A':{
                        texto = "Se mueve hacia la izquierda"
                        break
                    }
                    case 'w':case 'W':{
                        texto = "Se mueve hacia la arriba"
                        break
                    }
                    case 'd':case 'D':{
                        texto = "Se mueve hacia la derecha"
                        break
                    }
                    case 's':case 'S':{
                        texto = "Se mueve hacia la abajo"
                        break
                    }
                    default:{
                        texto = "Tecla no valida"
                        break
                    }
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
            // alert(valor)
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
