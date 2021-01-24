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
                    Se tienen 3 objetos donde se guarda la información de una persona, se pide crear un programa que permite añadirle a cada uno de los objetos la información adicional correspondiente a la edad
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var persona1 = {
        nombre: "Carlos",
        apellidos: "Hernandez",
    }
    var persona2 = {
        nombre: "Cristina",
        apellidos: "Santos",
    }
    var persona3 = {
        nombre: "David",
        apellidos: "Alzate",
    }
    lista_personas = [persona1,persona2,persona3]
    for (var i = 0; i < lista_personas.length; i++) {
        const objeto = lista_personas[i];
        edad = parseInt(prompt("Ingrese la edad para "+objeto['nombre']+": "))
        objeto["edad"] = edad
    }
    console.log(persona1)
    console.log(persona2)
    console.log(persona3)
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
                    <code class="javascript">    Se crea el primer objeto que se llamara "persona1"
    Se declara una clave "nombre" que tiene como valor un nombre determinado
    Se declara una clave "apellido" que tiene como valor un nombre determinado
    Se cierra el objeto
    Se crea el primer objeto que se llamara "persona2"
    Se declara una clave "nombre" que tiene como valor un nombre determinado
    Se declara una clave "apellido" que tiene como valor un nombre determinado
    Se cierra el objeto
    Se crea el primer objeto que se llamara "persona3" con sus respectivos datos
    Se declara una clave "nombre" que tiene como valor un nombre determinado
    Se declara una clave "apellido" que tiene como valor un nombre determinado
    Se cierra el objeto
    Se crea una variable "lista_personas" que se iguala a una lista con los objetos ya creados
    Se declara un ciclo for que empieza en "i=0" y va hasta la longitud de la lista de personas (En este caso sería 3, pero de esta manera se garantiza que el programa sea dinámico)
    Dentro del ciclo for, se crea una variable llamada "objeto" y se iguala a lo que se encuentre en la lista de personas en la posición "[ i ]"
    Ahora se declara una variable llamada "edad" y se iguala al valor de la edad ingresado por el usuario
    Ahora se añade una nueva clave llamada "[ edad ]" al objeto correspondiente (Acordarse de que la variable objeto tiene almacenado un objeto de "lista_personas"), a esta clave se le iguala al valor de la variable "edad"
    Se cierra el ciclo for
    Se imprime el objeto "persona1"
    Se imprime el objeto "persona2"
    Se imprime el objeto "persona3"
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
            placeholders_form1 = ['Ingrese la edad para Carlos: ','Ingrese la edad para Cristina: ','Ingrese la edad para David: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var texto = "",
                n1 = list_datas_form1[0],
                n2 = list_datas_form1[1],
                n3 = list_datas_form1[2]

            texto = '{'
            texto += " nombre: Carlos,"
            texto += " apellido: Hernandez,"
            texto += " edad: "+ n1
            texto += "}"
            texto += "<br>"

            texto += '{'
            texto += " nombre: Cristina,"
            texto += " apellido: Santos,"
            texto += " edad: "+ n2
            texto += "}"
            texto += "<br>"

            texto += '{'
            texto += " nombre: David,"
            texto += " apellido: Alzate,"
            texto += " edad: "+ n3
            texto += "}"
            texto += "<br>"

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
