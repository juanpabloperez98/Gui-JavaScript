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
                    En una heladería, se desea optimizar la atención a sus clientes, por ende, se pide realizar un software, que responda a un usuario que quiere comprar un helado cuanto le costará en función del topping que elija.
                    <ul class="container">
                        <li>El helado sin topping cuesta	$2000.</li>
                        <li>El topping de oreo cuesta $2500.</li>
                        <li>El topping de KitKat cuesta $3000.</li>
                        <li>El topping de brownie cuesta $4000.</li>
                        <li>En caso de no disponer del topping solicitado por el usuario el programa escribirá por pantalla "no tenemos este topping, lo sentimos. ", y a continuación informar del precio del helado sin ningún topping.</li>
                    </ul>
                    Finalmente, el programa escribe por pantalla el precio del helado con el topping seleccionado (o ninguno).
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var topping = prompt("Ingrese que topping desea: "),
         precio = 2000
  if(topping == "oreo"){
      console.log("Agregado topping: oreo")
      precio += 500
  }else if(topping == "kitkat"){
      console.log("Agregado topping: kitkat")
      precio += 1000
  }else if(topping == "brownie "){
      console.log("Agregado topping: brownie")
      precio += 2000
  }else{ console.log("no tenemos este topping, lo sentimos. ") }
  console.log("Total a pagar: "+ precio)
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
                    <code class="javascript">    Se crea la variable "topping" y se iguala a lo que ingrese el usuario por teclado
    Ahora se declara la variable "precio" y se inicializa en 2000 por defecto
    Se valida si el topping ingresado por el usuario es igual a oreo
    Si la condición anterior se cumple, entonces se imprime que se agrega el topping oreo
    La variable "precio" se aumenta en 500 que es el valor adicional que cuesta el topping
    Si, por el contrario, la condición de la línea 3 no se cumple, entonces se valida ahora, si "topping" es igual a kitkat
    Si la condición anterior se cumple, entonces se imprime que se agrega el topping kitkat
    La variable "precio" se aumenta en 500 que es el valor adicional que cuesta el topping
    Si, por el contrario, la condición de la línea 6 no se cumple, entonces se valida ahora, si "topping" es igual a brownie
    Si la condición anterior se cumple, entonces se imprime que se agrega el topping brownie
    La variable "precio" se aumenta en 2000 que es el valor adicional que cuesta el topping
    Si no se cumple ninguna de las condiciones anteriores, entonces se imprime que no se tiene el topping solicitado por el usuario
    Por último, se imprime el valor a pagar, imprimiendo la variable "precio".
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
            placeholders_form1 = ['Ingrese que topping desea: '],
            list_datas_form1 = []

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var topping = list_datas_form1[0],
                precio = 2000,
                texto = ""

                if(topping == "oreo"){
                    texto = "Agregado topping: oreo"
                    precio += 500
                }else if(topping == "kitkat"){
                    texto = "Agregado topping: kitkat"
                    precio += 1000
                }else if(topping == "brownie "){
                    texto = "Agregado topping: brownie"
                    precio += 2000
                }else{ texto = "no tenemos este topping, lo sentimos. " }
                texto += "<br>Total a pagar: "+ precio
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
            if(valor != ""){
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
