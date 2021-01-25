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
                    Realizar un programa que, mediante una función denominada permuta,
                    implemente la permutación (Cambiar de valores) de los valores de dos variables enteras que se rellenaron en la función principal.
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   function permutua (n1,n2) {
        var val1 = n2,
            val2 = n1
        return {
            val1_ : val1,
            val2_ : val2
        }
    }
    var numero1 = parseInt(prompt("Ingrese el primer número: ")),
        numero2 = parseInt(prompt("Ingrese el segundo número: "))
    console.log("Valores actuales: "+numero1+"  "+numero2)
    numeros = permutua(numero1,numero2)
    console.log("Valores permutuados: "+numeros["val1_"]+"  "+numeros["val2_"])
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
                    <code class="javascript">    Se crea una función llamada "permutua", la cual recibe como parámetro dos valores que se almacenaran en las variables "n1" y "n2" respectivamente
    Dentro de la función, se declara una variable "val1" y se iguala a "n2"
    Se declara otra variable llamada "val2" y se iguala a "n1"
    Se retorna un objeto
    Se declara la clave "val1_" con el valor de la variable "val1"
    Se declara la clave "val2_" con el valor de la variable "val2"
    Se cierra el objeto del retorno (<span style="color: rgba(244, 219, 79, 1)">NOTA</span>: se retorna un objeto pues de esta manera garantizamos poder retornar los dos valores que se desean, de la misma manera se hubiese podido retornar una lista con dichos valores)
    Se cierra la función
    Se declara la variable "numero1" y se iguala a lo que ingrese el usuario por pantalla
    También se declara la variable "numero2" y se iguala a lo que ingrese el usuario por pantalla
    Se imprimen los valores actuales de "numero1" y "numero2"
    Se crea una variable llamada "numeros" y se iguala al llamado de la función "permutua()" la cual se le pasa como parámetro las variables "numero1" y "numero2", lo que retorna esta función (Que es un diccionario), se almacenara en la variable "numeros" 
    Se imprime los valores permutuados
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
            cont = 0,
            placeholders_form1 = ['Ingrese el primer número: ','Ingrese el segundo número: '],
            list_datas_form1 = [],
            num_max = 2

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var n = parseInt(list_datas_form1[0]),
                n2 = parseInt(list_datas_form1[1])
                val1 = n2,
                val2 = n
            texto = "Valores actuales: "+n+"  "+n2
            texto += "<br>Valores permutuados: "+val1+"  "+val2
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
                if(cont < num_max){
                    placeholder_set_inputs()
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    show_results() 
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = "Dato no valido"
                var msg_ = alertify.error(msg);
                msg_.delay(1.3)

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
