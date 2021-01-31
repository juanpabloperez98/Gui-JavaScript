@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/ejemplos.css') }}">
    <style>
        #exampleDiv{
            width: 200px;height: 200px;background-color: blue;
        }
        #exampleDiv:hover{
            height: 180px;
            width: 180px;
            background-color: green;
        }
    </style>
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
                    Cree un contenedor en HTML que cuando se le coloque el mouse encima, este cambie de color y de tamaño 
                </p>
                <div id="botones">
                    <a href="#" class="btn" id="iniciar">Empezar</a>
                </div>
            </div>
            <div class="col-lg-6 mx-auto desactivate" id="codigo">
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
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <div class="text-center" id="resultado-operacion">
                        <div id="exampleDiv" class="m-auto"></div>
                    </div>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    <a href="#" class="btn desactivate" id="reiniciar">Reiniciar</a>
                </div>
            </div>

            <div class="col-lg-6 mx-auto desactivate" id="codigo2">
                <pre>
                    <code class="css">   div{
        height: 200px;
        width: 200px;
        background-color: blue;
    }
    div:hover{
        height: 180px;
        width: 180px;
        background-color: green;
    }
                    </code>
                </pre>
            </div>
        </div>
    </main>
@endsection


@section('scripts')

    <script>

        $('#iniciar').on('click', (e) => {
            e.preventDefault()
            $('#enunciado').toggle('explode')
            $('#codigo').toggle('explode')
            $('#codigo2').toggle('explode')
        })

        $('#ejecutar').on('click', (e) => {
            e.preventDefault()
            $('#ejecutar').toggle('explode')
            $('#reiniciar').toggle('explode')
            $('#result').toggle('explode')
        })
        $('#reiniciar').on('click', (e) => {
            e.preventDefault()
            location.reload()
        })  

    </script>

@endsection
