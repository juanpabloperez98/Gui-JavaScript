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
                    Realizar un programa que le permita al usuario ingresar un entero de dos dígitos, y determinar si sus DOS dígitos son números primos
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
                <pre>
                    <code class="javascript">    var num = parseInt(prompt("Ingrese numero: ")),
        primo_d1 = false,
        primo_d2 = false
    if(num > 9 && num < 100){
        var digito1 = parseInt(num/10),
            digito2 = parseInt(num%10)
        switch(digito1){
            case 2:case 3:case 5:case 7:{
                primo_d1 = true
                break
            }
        }
        switch(digito2){
            case 2:case 3:case 5:case 7:{
                primo_d2 = true
                break
            }
        }
        if(primo_d1 == true && primo_d2 == true){
            console.log("Los DOS digitos son primos")
        }else{ console.log("Los DOS digitos no son primos") }
    }else{ console.log("El numero no es de dos digitos") }
                    </code>
                </pre>
                <div id="datos" class="desactivate">
                    <form action="" class="text-center" id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato">
                        </div>
                        <input type="submit" class="btn submit" id="submit" value="Siguiente">
                    </form>
                    {{-- <form action="" class="text-center desactivate" id="formulario2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="dato2" placeholder="Ingrese numero 2">
                        </div>
                        <input type="submit" class="btn submit" id="submit2" value="Siguiente">
                    </form> --}}
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
                    <code class="javascript">    Primero se pide un número al usuario, y se guarda en la variable llamada "num"
    Se declara una variable llamada "primo_d1" y se iguala a false
    Se declara una variable llamada "primo_d2" y se iguala a false
    Se valida que el numero ingresado por el usuario sea un número mayor a 9 y menor a 100, para validar de que sea de dos dígitos
    Si la condición se cumple, entonces se declara la variable "digito1" y se iguala al resultado de dividir la variable "num" entre 10 convertido a entero. (Esta operación permite sacar el primer digito del número)
    Ahora se declara la variable "digito2" y se iguala al resultado de la operación módulo de la variable "num" entre 10 convertido a entero. (Esta operación permite sacar el segundo digito del número)
    Se declara la sentencia swtich y se le pasa como condición la variable "digito"
    Ahora se usan los case para validar si "digito" es igual a los números primos comprendidos entre 1 y 9 (Los números primos sería 2 3 5 7) (<span style="color: #F0DB4F; font-weight: bold;">NOTA</span>: Notese que los case vienen seguidos, esta es una manera de validar varios case que comprante un mismo bloque de sentencias)
    Si, la variable de condición es igual a alguno de los case, se actualiza el valor de la variable "primo_d1" a true (Mas adelante servirá para validar sí los dígitos si son primos)
    Se utiliza la sentencia break para salir de los case
    Se cierra la sentencia case
    Se cierra la sentencia switch
    Se declara la sentencia swtich y se le pasa como condición la variable "digito2"
    Ahora se usan los case para validar si "digito2" es igual a los números primos comprendidos entre 1 y 9 (Los números primos sería 2 3 5 7) 
    Si, la variable de condición es igual a alguno de los case, se actualiza el valor de la variable "primo_d2" a true (Mas adelante servirá para validar sí los dígitos si son primos)
    Se utiliza la sentencia break para salir de los case
    Se cierra la sentencia case
    Se cierra la sentencia switch
    Ahora se valida si las variables "primo_d1" y "primo_d2" son iguales a true (<span style="color: #F0DB4F; font-weight: bold;">NOTA</span>: Es por eso que en las líneas 9 y 15 se actualizaban sus valores cuando era un dígito primo)
    Si la condición se cumple, entonces se imprime que los dígitos son primos
    Si por el contrario la condición no se cumple, entonces se imprime que los dígitos no son primos
    Si la condición de la línea 4 no se cumple, entonces se imprime que el número no es de dos dígitos
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
            max_inputs = 3, 
            placeholders_form1 = ['Ingrese numero: '],
            list_datas_form1 = []

        var validar = (dato) => {
            dato = parseInt(dato)
            return !isNaN(dato) ? true:false 
        }

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        const show_results = () => {
            var num = list_datas_form1[0],
            primo_d1 = false,
            primo_d2 = false,
            texto = ""

            if(num > 9 && num < 100){
                var digito1 = parseInt(num/10),
                    digito2 = parseInt(num%10)
                switch(digito1){
                    case 2:case 3:case 5:case 7:{
                        primo_d1 = true
                        break
                    }
                }
                switch(digito2){
                    case 2:case 3:case 5:case 7:{
                        primo_d2 = true
                        break
                    }
                }
                if(primo_d1 == true && primo_d2 == true){
                    texto = "Los DOS digitos son primos"
                }else{ texto = "Los DOS digitos no son primos" }
            }else{ texto = "El numero no es de dos digitos" }
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
