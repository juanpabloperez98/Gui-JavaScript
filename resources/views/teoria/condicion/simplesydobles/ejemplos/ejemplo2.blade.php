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
                <h4 class="font-weight-bold">Ejemplo # 2</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    El programa debe pedir al usuario ingresar tres estaturas, luego de ser digitadas, se imprimirán en pantalla de forma ascendente.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var estatura_1 = parseInt(prompt("Ingresa estatura 1: ")),
          estatura_2 = parseInt(prompt("Ingresa estatura 2: ")),
          estatura_3 = parseInt(prompt("Ingresa estatura 3: "))
  if(estatura_1 > estatura_2 && estatura_1 > estatura_3){
      if(estatura_2 >= estatura_3){
          console.log(estatura_3,estatura_2,estatura_1)
      }else{
          console.log(estatura_2,estatura_3,estatura_1)
      }
  }else if(estatura_2 > estatura_3 && estatura_2 > estatura_1){
      if(estatura_3 >= estatura_1){
          console.log(estatura_1,estatura_3,estatura_2)
      }else{
          console.log(estatura_3,estatura_1,estatura_2)
      }
  }else if(estatura_3 > estatura_1 && estatura_3 > estatura_2){
      if(estatura_2 >= estatura_1){
          console.log(estatura_1,estatura_2,estatura_3)
      }else{
          console.log(estatura_2,estatura_1,estatura_3)
      }
  }else{
      console.log("Todas las estructuras son iguales")
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
                    <code class="javascript">    Se pide la estatura numero 1 al usuario y se guarda en una variable llamada "estatura_1" con el valor convertido a entero
    Se pide la estatura numero 2 al usuario y se guarda en una variable llamada "estatura_2" con el valor convertido a entero
    Se pide la estatura numero 3 al usuario y se guarda en una variable llamada "estatura_3" con el valor convertido a entero
    Se valida ahora que "estatura_1" sea mayor a "estatura_2" y mayor a "estatura_3"
    Si la condición anterior se cumple, entonces ahora se valida si "estatura_2" es mayor o igual a "estatura_3"
    Si la condición de la línea anterior también se cumple, entonces se imprimen las estaturas en orden ascendente, primero "estatura_3", segundo "estatura_2", por último "estatura_1"
    Si por el contrario "estatura_2" no es mayor o igual a "estatura_3"
    Entonces, se imprime en el orden correspondiente, primero "estatura_2", segundo "estatura_3", por último "estatura_1"
    Se cierra el condicional de la línea 5
    Ahora, si no se cumple la condición de la línea 4, entonces se valida si "estatura_2" sea mayor a "estatura_3" y mayor a "estatura_1"
    Si la condición anterior se cumple, entonces ahora se valida si "estatura_3" es mayor o igual a "estatura_1"
    Si la condición de la línea anterior también se cumple, entonces se imprimen las estaturas en orden ascendente, primero "estatura_1", segundo "estatura_3", por último "estatura_2"
    Si por el contrario "estatura_3" no es mayor o igual a "estatura_1"
    Entonces, se imprime en el orden correspondiente, primero "estatura_3", segundo "estatura_1", por último "estatura_2"
    Se cierra el condicional de la línea 11
    Ahora, si no se cumple la condición de la línea 10, entonces se valida si "estatura_3" sea mayor a "estatura_1" y mayor a "estatura_2"
    Si la condición anterior se cumple, entonces ahora se valida si "estatura_2" es mayor o igual a "estatura_1"
    Si la condición de la línea anterior también se cumple, entonces se imprimen las estaturas en orden ascendente, primero "estatura_1", segundo "estatura_2", por último "estatura_3"
    Si por el contrario "estatura_2" no es mayor o igual a "estatura_1"
    Entonces, se imprime en el orden correspondiente, primero "estatura_2", segundo "estatura_1", por último "estatura_3"
    Se cierra el condicional de la línea 17
    Si, por el contrario, ninguna de las condiciones anteriores se cumplió
    Entonces se imprime por pantalla que todas las estructuras son iguales
    Se cierra el condicional de la línea 4
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
            dato2 = 0,
            cont = 0,
            max_inputs = 3, 
            placeholders_form1 = ['Ingresa estatura 1: ','Ingresa estatura 2: ','Ingresa estatura 3: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato)  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var estatura_1 = list_datas_form1[0]
                estatura_2 = list_datas_form1[1]
                estatura_3 = list_datas_form1[2],
                texto = ""

            if(estatura_1 > estatura_2 && estatura_1 > estatura_3){
                if(estatura_2 >= estatura_3){
                    texto = estatura_3+"  "+estatura_2+"  "+estatura_1
                }else{
                    texto = estatura_2+"  "+estatura_3+"  "+estatura_1
                }
            }else if(estatura_2 > estatura_3 && estatura_2 > estatura_1){
                if(estatura_3 >= estatura_1){
                    texto = estatura_1+"  "+estatura_3+"  "+estatura_2
                }else{
                    texto = estatura_3+"  "+estatura_1+"  "+estatura_2
                }
            }else if(estatura_3 > estatura_1 && estatura_3 > estatura_2){
                if(estatura_2 >= estatura_1){
                    texto = estatura_1+"  "+estatura_2+"  "+estatura_3
                }else{
                    texto = estatura_2+"  "+estatura_1+"  "+estatura_3
                }
            }else{
                texto = "Todas las estructuras son iguales"
            }
            $('#resultado-operacion').text(texto)
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
