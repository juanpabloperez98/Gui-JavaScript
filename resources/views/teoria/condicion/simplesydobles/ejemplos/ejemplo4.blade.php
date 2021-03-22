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
                    En una tienda se desea realizar un programa que permita determinar un descuento dependiendo el valor de la venta generada, si la venta supero los $ 35000 pesos se hará un descuento del 10%, de lo contrario se hará un descuento del 4%.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var monto_venta = parseFloat(prompt("Ingrese valor de la venta generada: ")),
      descuento = 0
  if(monto_venta > 35000){
      descuento = monto_venta*10/100
  }else{
      descuento = monto_venta*4/100
  }
  console.log("El total a pagar es: " + (monto_venta-descuento))
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
                    <code class="javascript">    Primero se crea la variable "monto_venta", esta se iguala a lo que ingrese el usuario, convertido a Float
    Luego se declara la variable "descuento" y esta se inicializa en 0
    Ahora se valida si el monto ingresado por el usuario es mayor a $35000
    Si la condición anterior se cumple, entonces, la variable "descuento" se actualiza a la operación de multiplicar "monto_venta" por el 10 % (10/100)
    Si por el contrario la condición no se cumple
    Entonces se hace la misma operación que la línea 4, pero esta vez sería por el 2% (2/100)
    Se cierra el condicional de la línea 3
    Se imprime el total a pagar que sería la resta entre "monto_venta" y "descuento"
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
            placeholders_form1 = ['Ingrese valor de la venta generada: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseFloat(dato)
            return !isNaN(dato) && dato > 0  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var monto_venta = parseFloat(list_datas_form1[0]),
                texto = ""

                if(monto_venta > 35000){
                    descuento = monto_venta*10/100
                }else{
                    descuento = monto_venta*4/100
                }
                texto = "El total a pagar es: " + (monto_venta-descuento)

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
