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
                    Cree 3 etiqueta &lt;p&gt; cada una con un atributo id diferente
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
        &lt;p id="p1"&gt;
            Esta es la etiqueta p1
        &lt;/p&gt;
        &lt;p id="p2"&gt;
            Esta es la etiqueta p2
        &lt;/p&gt;
        &lt;p id="p3"&gt;
            Esta es la etiqueta p3
        &lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>
                <div id="result" class="result desactivate">
                    <h6 class="text-center font-weight-bold" style="color: white">Resultado</h6>
                    <div class="text-center" id="resultado-operacion">
                        <p style="color: white">Esta es la etiqueta p1</p>
                        <p style="color: white">Esta es la etiqueta p2</p>
                        <p style="color: white">Esta es la etiqueta p3</p>
                    </div>
                </div>
                <div id="botones">
                    <a href="#" class="btn" id="ejecutar">Ejecutar</a>
                    <a href="#" class="btn desactivate" id="reiniciar">Reiniciar</a>
                </div>
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