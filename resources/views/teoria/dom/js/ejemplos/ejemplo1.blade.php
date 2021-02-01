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
                    Cree un documento HTML que contenga un contenedor &lt;div&gt;, luego se le va a pedir al usuario que ingrese que el texto que desea agregar a una etiqueta &lt;p&gt;, este se guardara en una variable y se añadirá a la etiqueta &lt;p&gt; luego la etiqueta &lt;p&gt; se añadirá al contenedor que hay en el HTML
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 desactivate" id="codes">
                <div class="row mx-auto">
                    <div class="col-lg-12 mx-auto">
                        <h4>Codigo HTML</h4>
                        <pre>
                            <code class="languaje-html">   &lt;head&gt;
        &lt;title&gt;Document&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;&lt;/div&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                            </code>
                        </pre>
                    </div>

                    <div class="col-12 mx-auto">
                        <h4>Codigo CSS</h4>
                        <pre>
                            <code class="css">   div{
        height: 300px;
        width: 300px;
        background-color: blue;
    }
                            </code>
                        </pre>
                    </div>

                    <div class="col-12 mx-auto">
                        <h4>Codigo JS</h4>

                        <pre>
                            <code class="javascript">   var msg = prompt("Ingrese mensaje"),
        p = document.createElement('p'),
        mensaje = document.createTextNode(msg)
        div = document.querySelector('div')
    p.appendChild(mensaje)
    div.appendChild(p)
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
                    </div>

                    <div class="col-12" id="botones">
                        <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                        <a href="#" class="btn desactivate" id="reiniciar">Reiniciar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 desactivate" id="result">
                <div class="row mx-auto">
                    <div class="col-12">
                        <h4>Resultado</h4>
                        <div class="text-center" id="resultado-operacion">
                            <div class="m-auto" style="width: 300px;height: 300px;background-color: blue;">
                                <p id="msg" style="color: white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('scripts')

    <script>

        var dato1 = 0,
            cont = 0,
            num_max = 1
            placeholders_form1 = ['Ingrese mensaje:'],
            list_datas_form1 = []

        var placeholder_set_inputs = () => {
            $('#dato').attr('placeholder',placeholders_form1[cont])
        }

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codes').toggle('explode')
        })

        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#ejecutar').toggle('explode')
            // $('#reiniciar').toggle('explode')
            // $('#result').toggle('explode')
            $('#datos').toggle('explode')
            placeholder_set_inputs()
        })


        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val(),
                val = valor != "" ? true : false
            if(val){
                dato1 = valor
                list_datas_form1.push(dato1)
                $('#formulario')[0].reset()
                cont++
                if(cont < num_max){
                    placeholder_set_inputs()
                }else{
                    $('#reiniciar').toggle('explode')
                    $('#result').toggle('explode')
                    $('#datos').toggle('explode')
                    $('#msg').text(dato1)
                }     
            }else{
                alertify.set('notifier', 'position', 'bottom-center');
                var msg = alertify.error('Dato no valido');
                msg.delay(1.3)
            }
        })
        $('#reiniciar').on('click', (e) => {
            e.preventDefault()
            location.reload()
        })  
    </script>

@endsection