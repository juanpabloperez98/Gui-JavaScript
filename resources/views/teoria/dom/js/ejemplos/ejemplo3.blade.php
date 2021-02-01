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
                <h4 class="font-weight-bold">Ejemplo # 3</h4>
            </div>
            <div class="col-lg-6 mx-auto" style="background-color: white; padding: 15px; border-radius: 10px" id="enunciado">
                <p>
                    Crear un programa que le pida al usuario en número de veces que quiere crear un contenedor &lt;div&gt; (No mayor a 5 contenedores), y los agregue a un contenedor &lt;main&gt;, cada contenedor debe tener unos mismos estilos (color de fondo verdes, ancho de 100 y alto de 100, y una margen superior de 20px)
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
        &lt;main&gt;&lt;/main&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                            </code>
                        </pre>
                    </div>

                    <div class="col-12 mx-auto">
                        <h4>Codigo JS</h4>

                        <pre>
                            <code class="javascript">   var n_veces = parseInt(prompt("Número de veces a crear el contenedor div: ")),
        main = document.querySelector('main'),     
        estilos = 'background-color:green;width:100px;height:100px;margin-top:20px'
    if(n_veces > 0 && n_veces <= 5){
        for (var i = 0; i < n_veces; i++) {
            div = document.createElement('div')
            div.setAttribute('style',estilos)
            main.appendChild(div)
        }
    }
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
                            <div class="m-auto" id="content_modifeid">
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
            placeholders_form1 = ['Número de veces a crear el contenedor div: '],
            list_datas_form1 = [],
            estilos = 'background-color:green;width:100px;height:100px;margin-top:20px'

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
            $('#datos').toggle('explode')
            placeholder_set_inputs()
        })


        var resultado = (num) => {
            main = document.getElementById('content_modifeid')
            estilos = 'background-color:green;width:100px;height:100px;margin-top:20px'
            for (var i = 0; i < num; i++) {
                div = document.createElement('div')
                div.setAttribute('style',estilos)
                main.appendChild(div)
            }
        }

        $('#formulario').submit((e) => {
            e.preventDefault()
            var valor = $('#dato').val(),
                valor = parseInt(valor)
                val = valor > 0 && valor <= 5 ? true : false
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
                    resultado(dato1)
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