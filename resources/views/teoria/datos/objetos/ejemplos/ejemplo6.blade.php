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
                    Crear una lista de objetos los cuales almacenaran la información de un usuario tales como (nombre, apellido, ciudad). Se puede agregar hasta max 5 personas y al final se deberá mostrar toda la información de los objetos almacenados a la lista
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">   var n = parseInt(prompt("Numero de objetos a crear: "))
    val = n > 0 && n <= 5 ? true : false
    if (val == true) {
        objetos_lista = []
        for (var i = 0; i < n; i++) {
            const nombre = prompt("Ingrese el nombre: "),
                apellido = prompt("Ingrese el apellido: "),
                ciudad = prompt("Ingrese la ciudad: ")
            objeto = {
                nombre_:nombre,
                apellido_:apellido,
                ciudad_:ciudad,
            }
            objetos_lista.push(objeto)
        }
        for (var i = 0; i < objetos_lista.length; i++) {
            console.log(objetos_lista[i])
        }
    } else { console.log("Número no valido") }
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
                    <code class="javascript">    Se crea una variable "n" y se iguala al valor que ingrese el usuario por pantalla
    Luego con una condición ternaria se valida si "n" es mayor a cero y menor a 5, de ser así la variable "val" se convierte en verdadera, de lo contrario se convertirá en falsa
    Se valida si "val" es igual a true
    Si la condición se cumple, se declara una variable llamada "objetos_lista" y se iguala a una lista vacía
    Se declara un ciclo for que va desde "i=0" hasta "i < n" y su incremento será de 1 en 1
    Se declara una constante "nombre" y se iguala al nombre que ingrese el usuario
    Se declara una constante "apellido" y se iguala al apellido que ingrese el usuario
    Se declara una constante "ciudad" y se iguala a la ciudad que ingrese el usuario
    Ahora se crea un objeto con los datos pedidos anteriormente
    Se declara una clave "nombre_" que tiene como valor la variable "nombre"
    Se declara una clave "apellido_" que tiene como valor la variable "apellido"
    Se declara una clave "ciudad_" que tiene como valor la variable "ciudad"
    Se cierra el objeto
    Ahora se le agrega a la lista "objetos_lista" el objeto que se acaba de crear
    Se cierra el ciclo for
    Se declara un ciclo for que va desde "i=0" hasta la longitud de la lista de objetos y su incremento será de 1 en 1
    Se imprime lo que se obtenga de la lista de objetos en la posición "[ i ]"
    Se cierra el ciclo for
    Si la condición de la línea 3 no se cumple, entonces se imprime que el número no es valido
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
            indez = 0
            placeholders_form1 = ['Numero de objetos a crear: ','Ingrese el nombre: ','Ingrese el apellido: ','Ingrese la ciudad:'],
            list_datas_form1 = [],
            N = 0

        var validar = (dato) => {
            return dato != "" ? true:false 
        }

        var placeholder_set_inputs = (index) => {
            $('#dato').attr('placeholder',placeholders_form1[index])
        }

        const show_results = () => {
            var salida = true,
                i = 1,
                j = 0,
                texto = ""
            while(j < N){
                nombre = list_datas_form1[i]
                apellido = list_datas_form1[i+1]
                ciudad = list_datas_form1[i+2]

                texto += '{'
                texto += " nombre_:"+nombre+","
                texto += " apellido_:"+apellido+","
                texto += " ciudad_:"+ciudad
                texto += "}"
                texto += "<br>"
                j++
                i += 3
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
            placeholder_set_inputs(0)
        })

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val()
            if(validar(valor)){
                dato1 = valor
                cont == 0 ? N = parseInt(dato1) : null
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                cont ++
                if(cont <= (N*3) && (N > 0 && N <= 5)){
                    indez ++
                    placeholder_set_inputs(indez)
                    indez == 3 ? indez = 0 : null
                }else{
                    $('#datos').toggle('explode')
                    $('#exp').toggle('explode')
                    $('#result').toggle('explode')
                    N > 0 && N <= 5 ? show_results() : $('#resultado-operacion').html("Número no valido")
                }
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                if(parseInt(valor) < 20){ var msg = alertify.error('Dato no valido'); }else { var msg = alertify.error('El dato debe ser menor o igual a 20'); }
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
