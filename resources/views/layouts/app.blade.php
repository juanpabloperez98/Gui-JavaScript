<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Guia JavaScript</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- Bootstrao --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- Alertify  --}}
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
                    <p style="color: white">El contenido de esta pagina es creado y pertenece a la Universidad
                        Tecnologica
                        de Pereira</p>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-3 mb-md-0 mb-3">

                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3 mb-md-0 mb-3">

                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
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
        /* window.sr = ScrollReveal()
        sr.reveal('#back-opacity', {
            duration: 2000,
            origin: 'top',
            distance: '200px'
        })
        sr.reveal('#logoutp', {
            duration: 2000,
            origin: 'bottom',
            distance: '100px'
        })
        sr.reveal('#acercadepagina', {
            duration: 2000,
            origin: 'left',
            distance: '100px'
        })
        sr.reveal('#navbar', {
            duration: 2000,
            origin: 'left',
            distance: '100px'
        })
        sr.reveal('#teoria', {
            duration: 2000,
            origin: 'bottom',
            distance: '50px'
        })
        sr.reveal('#teoria-elements', {
            duration: 2000,
            origin: 'top',
            distance: '150px'
        })
        sr.reveal('#footer', {
            duration: 2000,
            origin: 'left',
            distance: '150px'
        }) */

    </script>
    @yield('scripts')
</body>

</html>
