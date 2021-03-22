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
                    Hacer un programa que lea dos números, y luego hacer la diferencia entre estos dos. Si la diferencia es menor o igual a 5, mostrar en pantalla todos los números comprendidos entre el numero 1 y el numero 2.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">  var numero1 = parseInt(prompt("Ingrese numero 1: ")),
         numero2 = parseInt(prompt("Ingrese numero 2: ")),
         diferencia = numero1 - numero2,
         numero_menor = 0
  diferencia < 0 ? diferencia = -diferencia : diferencia    
  numero1 > numero2 ? numero_menor = numero2 : numero_menor = numero1
  if(diferencia > 0 && diferencia <= 5){
      switch(diferencia){
          case 1:{
              var n1 = numero_menor, n2 = numero_menor + 1
              console.log("Numeros: "+ n1+"-"+n2)
              break
          }
          case 2:{
              var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2
              console.log("Numeros: "+ n1+"-"+n2+"-"+n3)
              break
          }
          case 3:{
              var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3
              console.log("Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4)
              break
          }
          case 4:{
              var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3, n5 = numero_menor + 4
              console.log("Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4+"-"+n5)
              break
          }
          case 5:{
              var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3, n5 = numero_menor + 4, n6 = numero_menor + 5
              console.log("Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4+"-"+n5+"-"+n6)
              break
          }
      }
  }else{ console.log("La diferencía no es menor o igual a 5") }
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
                    <code class="javascript">    Se declara la variable "numero1" y se iguala al dato que ingrese el usuario convertido a entero
    Se declara la variable "numero2" y se iguala al dato que ingrese el usuario convertido a entero
    Después se declara la variable "diferencia", y se iguala a la resta de "numero1" menos "numero2"
    Siguiente, se declara "numero_menor" y se iguala a cero (<span style="color: #F0DB4F; font-weight: bold;">NOTA</span>: esta variable servirá más adelante para verifica cuál de los dos números ingresados es el menor)
    Se utiliza una condición ternaria para validar si la variable "diferencia" es negativa, de ser negativa, se actualiza su valor usando el operador de negación, si no es negativa entonces se deja tal cual
    Se utiliza otra condición ternaria para validar cual número es mayor, de ser "numero1" mayor a "numero2", entonces la variable "numero_menor" se actualiza al valor de la variable "numero1", de no cumplirse esa condición, entonces la variable "numero_menor" se actualiza al valor de la variable "numero2"
    Se valida sí la variable "diferencia" esta entre el rango de 0 – 5
    Si la condición se cumple, se declara la sentencia switch pasándole de condición la variable "diferencia"
    Si se cumple el case 1
    Se declaran dos variables "n1" que será igual a "numero_menor" y "n2" que será igual a "numero_menor" + 1
    Se imprimen las variables "n1" y "n2"
    Se utiliza el break para romper el case
    Se cierra el case 1
    Si se cumple el case 2
    Se declaran tres variables "n1" que será igual a "numero_menor", "n2" que será igual a "numero_menor" + 1 y "n3" que será igual a "numero_menor" + 2
    Se imprimen las variables "n1", "n2" y "n3"
    Se utiliza el break para romper el case
    Se cierra el case 2
    Si se cumple el case 3
    Se declaran cuatro variables "n1" que será igual a "numero_menor", "n2" que será igual a "numero_menor" + 1, "n3" que será igual a "numero_menor" + 2 y "n4" que será igual a "numero_menor" + 3
    Se imprimen las variables "n1", "n2", "n3" y "n4"
    Se utiliza el break para romper el case
    Se cierra el case 3
    Si se cumple el case 4
    Se declaran cuatro variables "n1" que será igual a "numero_menor", "n2" que será igual a "numero_menor" + 1, "n3" que será igual a "numero_menor" + 2, "n4" que será igual a "numero_menor" + 3 y "n5" que será igual a "numero_menor" + 4 
    Se imprimen las variables "n1", "n2", "n3", "n4" y "n5"
    Se utiliza el break para romper el case
    Se cierra el case 4
    Si se cumple el case 5
    Se declaran cuatro variables "n1" que será igual a "numero_menor", "n2" que será igual a "numero_menor" + 1, "n3" que será igual a "numero_menor" + 2, "n4" que será igual a "numero_menor" + 3, "n5" que será igual a "numero_menor" + 4 y "n6" que será igual a "numero_menor" + 5 
    Se imprimen las variables "n1", "n2", "n3", "n4", "n5" y "n6"
    Se utiliza el break para romper el case
    Se cierra el case 5
    Se cierra el switch de la línea 8
    Si la condición de la línea 7 no se cumple, entonces se imprime que la diferencia entre números no es menor o igual a 5
                    </code>
                </pre>
                <div id="" class="result">
                    {{-- <h6 class="text-center font-weight-bold" style="color: white"></h6> --}}
                    <p class="text-center" id="resultado-operacion" style="color: white">
                        <span style="color: #F0DB4F;font-weight: bold">Nota</span>: No es la manera mas optima de resolver el problema, pero para entender un poco sobre la sentencia <span style="color: blue; font-weight: bold;">switch</span> se ha realizado de esta manera 
                    </p>
                </div>
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
            max_inputs = 2, 
            placeholders_form1 = ['Ingrese numero 1: ','Ingrese numero 2: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato)  ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var numero1 = parseInt(list_datas_form1[0]),
            numero2 = parseInt(list_datas_form1[1]),
            diferencia = numero1 - numero2,
            numero_menor = 0,
            texto = ""

            diferencia < 0 ? diferencia = -diferencia : diferencia    
            numero1 > numero2 ? numero_menor = numero2 : numero_menor = numero1
            if(diferencia > 0 && diferencia <= 5){
                switch(diferencia){
                    case 1:{
                        var n1 = numero_menor, n2 = numero2 + 1
                        texto = "Numeros: "+ n1
                        break
                    }
                    case 2:{
                        var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2
                        texto = "Numeros: "+ n1+"-"+n2+"-"+n3
                        break
                    }
                    case 3:{
                        var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3
                        console.log(n2)
                        texto = "Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4
                        break
                    }
                    case 4:{
                        var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3, n5 = numero_menor + 4
                        texto = "Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4+"-"+n5
                        break
                    }
                    case 5:{
                        var n1 = numero_menor, n2 = numero_menor + 1, n3 = numero_menor + 2, n4 = numero_menor + 3, n5 = numero_menor + 4, n6 = numero_menor + 5
                        texto = "Numeros: "+ n1+"-"+n2+"-"+n3+"-"+n4+"-"+n5+"-"+n6
                        break
                    }
                }
            }else{ texto = "La diferencía no es menor o igual a 5" }

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
