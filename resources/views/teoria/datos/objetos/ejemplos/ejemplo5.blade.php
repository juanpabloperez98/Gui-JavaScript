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
                    Pedir al usuario un código de respuesta http (200,404,503) el cual se va a almacenar en una clave de un objeto y se mostrara por pantalla el mensaje correspondiente al código:
                    <ul class="container">
                        <li>Si el código es 200 el mensaje será: "Respuesta con exito!!"</li>
                        <li>Si el código es 404 el mensaje será: "Error 404 not found!!"</li>
                        <li>Si el código es 503 el mensaje será: "Servicio no disponible!!"</li>
                    </ul>
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var codigo = parseInt(prompt("Ingrese codigo de respuesta del servidor: ")),
        val = codigo == 200 || codigo == 404 || codigo == 503 ? true : false
    if(val == true){
        var message = ""
        switch(codigo){
            case 200:{
                message = "Respuesta con exito!!"
                break
            }
            case 404:{
                message = "Error 404 not found!!"
                break
            }
            case 503:{
                message = "Servicio no disponible!!"
                break
            }
        }
        var respuesta = {
            codigo_: codigo,
            message_: message,
        }
        console.log(respuesta)
    } else { console.log("Codigo de respuesta no valido") }
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
                    <code class="javascript">    Se crea una variable llamada "codigo" y se iguala al código que ingrese el usuario
    Utilizando una condición ternaria, se valida si el código ingresado por el usuario es igual a 200 o 404 o 503 de ser así se guarda en la variable "val" un booleano true, de lo contrario se guarda un false
    Se valida si "val" es igual a true
    Se declara una variable "message" y se iguala a un string vacío
    Se crea un switch case, el cual se le pasa la variable "codigo"
    Se valida en caso de que "codigo" sea 200
    Se actualiza el valor de la variable "message" a un mensaje de respuesta exitoso
    Se utiliza la palabra reservada break para romper el switch case
    Se cierra el case
    Se valida en caso de que "codigo" sea 404
    Se actualiza el valor de la variable "message" a un mensaje de respuesta Not Found
    Se utiliza la palabra reservada break para romper el switch case
    Se cierra el case
    Se valida en caso de que "codigo" sea 200
    Se actualiza el valor de la variable "message" a un mensaje de respuesta que el servicio no está disponible
    Se utiliza la palabra reservada break para romper el switch case
    Se cierra el case
    Se cierra el Switch
    Ahora se crea un objeto llamado "respuesta" 
    Se declara una clave "codigo_" que tiene como valor la variable "codigo"
    Se declara una clave "message_" que tiene como valor la variable "message"
    Se cierra el objeto
    Se imprime el objeto "respuesta" creado
    Si la condición de la línea 3 no se cumple, entonces se imprime que el código de respuesta no es valido
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
            cont = 0,
            placeholders_form1 = ['Ingrese codigo de respuesta del servidor: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var codigo = parseInt(list_datas_form1[0]),
                val = codigo == 200 || codigo == 404 || codigo == 503 ? true : false,
                texto = ""
            if(val == true){
                var message = ""
                switch(codigo){
                    case 200:{
                        message = "Respuesta con exito!!"
                        break
                    }
                    case 404:{
                        message = "Error 404 not found!!"
                        break
                    }
                    case 503:{
                        message = "Servicio no disponible!!"
                        break
                    }
                }
                texto = '{'
                texto += " codigo_:"+codigo+","
                texto += " message_:"+message
                texto += "}"

            } else { texto = "Codigo de respuesta no valido" }
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
