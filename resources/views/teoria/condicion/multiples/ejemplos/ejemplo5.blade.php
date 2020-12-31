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
                    Realizar un programa que, dependiendo de un valor entero, imprima a que mes del año pertenece ese valor entero.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var mes = parseInt(prompt("Ingrese el mes del año en numero: "))
  switch(mes){
      case 1:{
          console.log("Enero")
          break
      }
      case 2:{
          console.log("Febrero")
          break
      }
      case 3:{
          console.log("Marzo")
          break
      }
      case 4:{
          console.log("Abril")
          break
      }
      case 5:{
          console.log("Mayo")
          break
      }
      case 6:{
          console.log("Junio")
          break
      }
      case 7:{
          console.log("Julio")
          break
      }
      case 8:{
          console.log("Agosto")
          break
      }
      case 9:{
          console.log("Septiembre")
          break
      }
      case 10:{
          console.log("Octubre")
          break
      }
      case 11:{
          console.log("Noviembre")
          break
      }
      case 12:{
          console.log("Diciembre")
          break
      }
      default:{
          console.log("Valor no valido")
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
                    <code class="javascript">    Se declara la variable "mes" y se iguala a lo que ingrese el usuario por pantalla a entero
    Se declara la sentencia switch, se le pasa como condición la variable "mes"
    Si se cumple el case 1
    Entonces se imprime que el mes es enero
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 2
    Entonces se imprime que el mes es febrero
    Se utiliza el break para romper el case
    Se cierra el case 
    Si se cumple el case 3
    Entonces se imprime que el mes es marzo
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 4
    Entonces se imprime que el mes es abril
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 5
    Entonces se imprime que el mes es mayo
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 6
    Entonces se imprime que el mes es junio
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 7
    Entonces se imprime que el mes es julio
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 8
    Entonces se imprime que el mes es agosto
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 9
    Entonces se imprime que el mes es septiembre
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 10
    Entonces se imprime que el mes es octubre
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 11
    Entonces se imprime que el mes es noviembre
    Se utiliza el break para romper el case
    Se cierra el case
    Si se cumple el case 12
    Entonces se imprime que el mes es diciembre
    Se utiliza el break para romper el case
    Se cierra el case
    Si no se cumple ninguno de los case
    Se imprime que el valor no es valido
    Se utiliza el break para romper el default
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
            placeholders_form1 = ['Ingrese el mes del año en numero: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato)  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[0])
        }

        const show_results = () => {
            var mes = parseInt(list_datas_form1[0])
            switch(mes){
                case 1:{
                    texto = "Enero"
                    break
                }
                case 2:{
                    texto = "Febrero"
                    break
                }
                case 3:{
                    texto = "Marzo"
                    break
                }
                case 4:{
                    texto = "Abril"
                    break
                }
                case 5:{
                    texto = "Mayo"
                    break
                }
                case 6:{
                    texto = "Junio"
                    break
                }
                case 7:{
                    texto = "Julio"
                    break
                }
                case 8:{
                    texto = "Agosto"
                    break
                }
                case 9:{
                    texto = "Septiembre"
                    break
                }
                case 10:{
                    texto = "Octubre"
                    break
                }
                case 11:{
                    texto = "Noviembre"
                    break
                }
                case 12:{
                    texto = "Diciembre"
                    break
                }
                default:{
                    texto = "Valor no valido"
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
