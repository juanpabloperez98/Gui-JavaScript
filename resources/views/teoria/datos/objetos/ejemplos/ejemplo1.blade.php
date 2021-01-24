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
                    Crear un programa que le pida al usuario un nombre, apellido y correo electrónico, y se guarde en un objeto, al final se deberá mostrar el objeto creado
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var nombre_ = prompt("Ingrese nombre: "),
        apelliido_ = prompt("Ingrese apellido: "),
        email_ = prompt("Ingrese email: ")
    var objeto = {
        nombre: nombre_,
        apellido: apelliido_,
        email:email_ 
    }
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
                    <code class="javascript">    Se crea la variable "nombre_" y se iguala al nombre que ingrese el usuario por pantalla
    Se crea la variable "apellido_" y se iguala al apellido que ingrese el usuario por pantalla
    Se crea la variable "email_" y se iguala al email que ingrese el usuario por pantalla
    Se crea el objeto con el nombre "objeto"
    Se crea una clave llamada "nombre" y su valor será lo que haya en la variable "nombre_"
    Se crea una clave llamada "apellido" y su valor será lo que haya en la variable "apellido_"
    Se crea una clave llamada "email" y su valor será lo que haya en la variable "email_"
    Se cierra el objeto
    Se imprime el objeto pasándole al console.log la variable "objeto"
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
            max_inputs = 3, 
            cont = 0,
            placeholders_form1 = ['Ingrese nombre: ','Ingrese apellido: ','Ingrese email: '],
            list_datas_form1 = []

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var nombre_ = list_datas_form1[0],
                apelliido_ = list_datas_form1[1],
                email_ = list_datas_form1[2],
                texto = ""
            var objeto = {
                nombre: nombre_,
                apellido: apelliido_,
                email:email_ 
            }
            texto = '{'
            texto += " nombre:"+objeto["nombre"]+","
            texto += " apellido:"+objeto["apellido"]+","
            texto += " email:"+objeto["email"]+""
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
