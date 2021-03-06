<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Guía JavaScript</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('imagenes/icons/favicon.ico') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- Bootstrao --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- Alertify --}}
    <link rel="stylesheet" href="{{ asset('js/alertifyjs/css/alertify.css') }}">
    <link rel="stylesheet" href="{{ asset('js/alertifyjs/css/themes/default.css') }}">

    {{-- Highlight --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.0/styles/monokai.min.css">

    {{-- Stylesself --}}
    @yield('styles')
</head>

@yield('header')

<body>

    <div id="app">
        @yield('content')
    </div>


    <footer class="page-footer font-small pt-4" id="footer">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">
                        <img src="{{ asset('imagenes/logo.png') }}" alt="" style="width: 30px">
                        Guía JavaScript
                    </h5>
                    <p style="color: white">El contenido de esta página es creado y pertenece a la Universidad
                        Tecnologica
                        de Pereira</p>
                </div>

                
                {{-- <div class="col-md-8">
                    <h5 class="text-uppercase">Links</h5>
                </div> --}}
                <hr class="clearfix w-100 d-md-none pb-3">


                <div class="col-md-3 mb-md-0 mb-3">

                    {{-- <h5 class="text-uppercase">Links</h5>
                    --}}

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('secuencia') }}">Estructuras de secuencia</a>
                        </li>
                        <li>
                            <a href="{{ route('condicion') }}">Estructuras condicionales</a>
                        </li>
                        <li>
                            <a href="{{ route('repeticion') }}">Estructuras repetitivas</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3 mb-md-0 mb-3">

                    {{-- <h5 class="text-uppercase">Links</h5>
                    --}}

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('datos') }}">Estructuras de datos</a>
                        </li>
                        <li>
                            <a href="{{ route('funciones') }}">Funciones</a>
                        </li>
                        <li>
                            <a href="{{ route('dom') }}">Manejo del DOM</a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <div class="footer-copyright text-center py-3" style="color: white">© 2020 Copyright:
            <a href="https://www.utp.edu.co/"> Universidad Tecnologica de Pereira</a>
        </div>

    </footer>

    {{-- Bootstrao --}}
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- Highlight --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.0/highlight.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.8.0/dist/highlightjs-line-numbers.min.js">
    </script>

    {{-- ScrollReveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- Alertify --}}
    <script src="{{ asset('js/alertifyjs/alertify.js') }}"></script>


    <script>
        hljs.initHighlightingOnLoad();
        hljs.initLineNumbersOnLoad();

        $('#open-toggle').on('click', (e) => {
            e.preventDefault()
            $('#slide-menu').toggleClass('activate-slide')
            $('#icon-menu').toggleClass('desactivate')
            $('#icon-close').toggleClass('desactivate')
        })

    </script>
    @yield('scripts')
</body>

</html>
