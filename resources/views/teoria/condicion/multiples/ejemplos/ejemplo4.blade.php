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
                    Realice un programa que convierta de centímetros a pulgadas y de libras a kilogramos según la opción que escoja el usuario
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  alert("1)Convertir de centímetros a pulgadas\n2)Convertir de líbra a kilogramos")
  var op = parseInt(prompt("Ingresa opción: ")),
         val = parseFloat(prompt("Ingresa valor: "))
  switch(op){
      case 1:{
          var pulgadas = val/2.54
          alert("Centímetros: " + val + " Pulgadas: "+ pulgadas)
          break
      }
      case 2:{
          var kilogramos = val * (1/2.21)
          alert("líbra: " + val + " kilogramos: "+ kilogramos)
          break
      }
      default:{
          alert("Opción no valida")
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
                    <code class="javascript">    Se imprime a través de un alert, las opciones que puede escoger el usuario (NOTA: alert es otra manera de poder imprimir mensajes por pantalla)
    Se declara la variable op, que se iguala a la opción que ingresa el usuario convertida a entero
    Se declara la variable "val", que se iguala al valor que ingreso el usuario, convertido a float
    Se declara la sentencia switch y se coloca como condición la variable "op"
    Si se cumple el case 1
    Entonces se declara la variable "pulgadas" y se iguala al valor de dividir "val" entre 2.54 (NOTA: esta es la manera en cómo se convierte de centímetros a pulgadas) 
    Luego se imprime el valor ingresado por el usuario, y el valor convertido a pulgadas
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 2
    Entonces se declara la variable "kilogramos" y se iguala al valor de multiplicar "val" entre (1/2.21) (NOTA: esta es la manera en cómo se convierte de libras a kilogramos) 
    Luego se imprime el valor ingresado por el usuario, y el valor convertido a kilogramos
    Se utiliza el break para romper el case
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
            max_inputs = 2, 
            cont = 0,
            placeholders_form1 = ['Ingresa opción: ','Ingresa valor: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseFloat(dato)
            return !isNaN(dato) && dato > 0  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
                var op = parseInt(list_datas_form1[0]),
                    val = parseFloat(list_datas_form1[1]),
                    texto = ""

                switch(op){
                    case 1:{
                        var pulgadas = val/2.54
                        texto = "Centímetros: " + val + " Pulgadas: "+ pulgadas
                        break
                    }
                    case 2:{
                        var kilogramos = val * (1/2.21)
                        texto = "líbra: " + val + " kilogramos: "+ kilogramos
                        break
                    }default:{
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
