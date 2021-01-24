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
                    Crear un objeto vacío al cual se le vayan agregando claves ingresadas por el usuario, el programa finalizara cuando el número de claves creadas sean mayor o igual 3
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var objeto = {},
        n = 0
    do {
        var clave = prompt("Ingrese nombre de la clave: "),
            valor = prompt("Ingrese valor de la clave: ")
        objeto[clave] = valor
        n++
    } while (n < 3);
    console.log(objeto)
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
                    <code class="javascript">    Se crea la variable "objeto", la cual se iguala a un objeto vacío
    Luego se declara una variable llamada "n"
    Se declara un ciclo do while (Empezando con el do)
    Se crea dentro del ciclo una variable "clave" y se iguala al nombre de la clave que digite el usuario
    Se declara una variable llamada "valor" y se iguala al valor de la clave que ingrese el usuario
    Ahora se le agrega al objeto una nueva clave "objeto[clave]" y se iguala al valor ingresado por el usuario que esta almacenado en la variable "valor"
    La variable "n" aumenta en 1
    Se valida que el ciclo se va a repetir, siempre y cuando "n" sea menor que 3
    Se imprime el objeto con las claves y valores ya agregados
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
            max_inputs = 6, 
            cont = 0,
            placeholders_form1 = ['Ingrese nombre de la clave:','Ingrese valor de la clave:','Ingrese nombre de la clave:','Ingrese valor de la clave:','Ingrese nombre de la clave:','Ingrese valor de la clave:'],
            list_datas_form1 = []

        var validar = (dato) => {
            return dato != "" ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var texto = "",
                c1 = list_datas_form1[0],
                v1 = list_datas_form1[1],
                c2 = list_datas_form1[2],
                v2 = list_datas_form1[3],
                c3 = list_datas_form1[4],
                v3 = list_datas_form1[5],
            texto = '{'
            texto += c1+":"+v1+","
            texto += c2+":"+v2+","
            texto += c3+":"+v3
            texto += "}"
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
