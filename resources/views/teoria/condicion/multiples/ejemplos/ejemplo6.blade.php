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
                    Una empresa de tecnología desea desarrollar un programa que permita mostrar a sus clientes los productos, según la categoría que ellos escojan ver. Las categorías disponibles serán Computadores, Celulares, Cámaras Profesionales, en cada categoría habrá 3 artículos que se mostraran a los clientes
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  console.log("1)Computadores\n2)Celulares\n3)Cámaras Profesionales\n")
  var categoria = parseInt(prompt("Ingrese la opción: "))
  console.log("\n\n")
  switch(categoria){
      case 1:{
          console.log("1)Portatil lenovo\n2)All in one ASUS\n3)Portatil HP")
          break
      }
      case 2:{
          console.log("1)Samsung A50\n2)Iphone 11 pro max\n3)Nokia 11")
          break
      }
      case 3:{
          console.log("1)Phase One\n2)Hasselblad\n3)Sinar")
          break
      }
      default:{
          console.log("Opción no valida")
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
                    <code class="javascript">    Se imprime las opciones de categorías
    Se declara la variable "categoria" y se iguala a lo que ingresa el usuario convertido en entero
    Se imprimen dos saltos de líneas
    Se declara la sentencia switch y se pasa como condicional la variable "categoria"
    Si se cumple el case 1
    Entonces se imprimen los productos de la categoría de computadores
    Se rompe el case
    Se cierra el case
    Si se cumple el case 2
    Entonces se imprimen los productos de la categoría de celulares
    Se rompe el case
    Se cierra el case
    Si se cumple el case 3
    Entonces se imprimen los productos de la categoría de Cámaras
    Se rompe el case
    Se cierra el case  
    Si no se cumple ninguno de los case
    Se imprime que la opción no es valida
    Se utiliza el break para romper el default
    Se cierra el default
    Por último, se cierra el switch de la línea 4
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
            placeholders_form1 = ['Ingrese la opción: '],
            list_datas_form1 = []

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var categoria = parseInt(list_datas_form1[0])
            switch(categoria){
                case 1:{
                    texto = "1)Portatil lenovo<br>2)All in one ASUS<br>3)Portatil HP"
                    break
                }
                case 2:{
                    texto = "1)Samsung A50<br>2)Iphone 11 pro max<br>3)Nokia 11"
                    break
                }
                case 3:{
                    texto = "1)Phase One<br>2)Hasselblad<br>3)Sinar"
                    break
                }
                default:{
                    texto = "Opción no valida"
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
