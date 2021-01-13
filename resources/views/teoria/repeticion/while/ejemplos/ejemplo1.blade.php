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
                <h4 class="font-weight-bold">Ejemplo # 1</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Realizar un programa que le pida dos números al usuario. El programa pedirá de nuevo el segundo número mientras no sea mayor que el primero. El programa terminará escribiendo los dos números
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n1 = parseInt(prompt("Ingrese número 1: ")),
        n2 = parseInt(prompt("Ingrese número 2: "))
    while(n1 > n2){
        console.log("N1 es mayor a N2... El programa continua")
        n2 = parseInt(prompt("Ingrese número 2: "))
    }
    console.log("Programa finalizado")        
                    </code>
                </pre>
                
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <p class="text-center" id="resultado-operacion" style="color: white"></p>
                </div>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    {{-- <a href="#" class="btn desactivate" id="sig">Siguiente</a> --}}
                    <a href="#" class="btn desactivate" id="exp">Ver explicación</a>
                </div>
            </div>
            <div class="col-lg-6 desactivate" id="code-explain">
                <pre>
                    <code class="javascript">    Se crea una variable "n1" y se iguala al primer número que ingrese el usuario
    Se crea una variable "n2" y se iguala al segundo número que ingrese el usuario
    Se declara una sentencia while, esta sentencia se ejecutará siempre que "n1" sea mayor a "n2" (Dejará de repetirse el ciclo hasta que el segundo número sea mayor al primer número ingresado)
    Si "n1" es mayor a "n2" entonces se entra al ciclo, por lo siguiente se imprime que "n1" es mayor a "n2"
    Se vuelve a pedir el segundo número al usuario y se iguala a la variable "n2" (Esto es para que "n2" no siempre valga lo mismo y no se quede en un ciclo INFINITO)
    Se cierra el ciclo while
    Una vez se sale del ciclo while es porque "n2" ya es mayor que "n1", entonces se imprime que el programa ha finalizado
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
            cond_finish = false, 
            cont = 0,
            sum_show = 1,
            placeholders_form1 = ['Ingrese numero1: ','Ingrese numero2: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            lon = list_datas_form1.length
            retorno = false
            if(list_datas_form1[0] > list_datas_form1[lon-1]){
                texto = "N1 es mayor a N2... El programa continua " + sum_show
                sum_show++
            }else{ 
                texto = "Programa finalizado" 
                retorno = true
            }
            $('#resultado-operacion').html(texto)
            return retorno
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
                // Valida si se hay que cambiar el placeholder
                if(cont < 1){
                    cont++
                    placeholder_set_inputs()         
                }else{
                    // Validar que el primer dato es mayor al segundo dato
                    retorno = show_results()
                    $('#result').removeClass('desactivate')
                    $('#datos').css('margin-top',-13)
                    if(retorno){
                        $('#datos').toggle('explode')
                        $('#exp').toggle('explode')
                    }
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
