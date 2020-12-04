@extends('layouts.app')

@section('header')
    <header id="header">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <img src="{{ asset('imagenes/logo.png') }}" alt="" class="mr-2" style="width: 30px">
            <a class="navbar-brand" id="title" href="#">Guia JavaScript
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Manual Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manual Tecnico</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> --}}
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>
    </header>
@endsection

@section('content')
    <main id="main1">
        <div id="contentImage">
            <div class="row mx-auto" style="max-width: 1111px">
                <div class="col-lg-7" id="back-opacity" style="">
                    <h3 style="color: white; font-weight: bold">Guía de programación con JavaScript</h3>
                    <p style="color: white; font-weight: bold;font-size: 20px;margin-top: 30px">Software creado por la
                        Universidad Tecnologica de pereria</p>
                </div>
                <div class="col-lg-5" id="logoutp" style="">
                    <img src="{{ asset('imagenes/UTP.png') }}" alt="" style="max-width: 500px">
                </div>
            </div>
        </div>
    </main>

    <section id="acercadepagina" class="component-basic">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-9 mx-auto">
                <h3>
                    Guia JavaScript
                </h3>
                <p>
                    Bienvenidos a la guía de JavaScript, este software es creado y desarrollado por la Universidad
                    tecnológica de Pereira, tiene como objetivo poder enseñar el lenguaje de programación JavaScript,
                    fundamentándose en el paradigma imperativo. En este software se encontrará ejemplos y ejercicios
                    dinámicos, los cuales le ayudaran en la comprensión y entendimiento de no solo este lenguaje de
                    programación sino también, de la lógica que se debe manejar en cualquier lenguaje que permite el
                    paradigma imperativo.
                </p>
            </div>
        </div>
    </section>

   {{--  <section id="introduccionJS" class="component-basic">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-9 mx-auto">
                <h3>Introducción a JavaScript</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium voluptatibus, sint labore a
                    quisquam, aliquid animi fugit aperiam porro eum eligendi voluptatum eveniet, mollitia unde sit saepe ad
                    praesentium error dolorum asperiores magni maxime provident veniam repudiandae! Nemo, quidem enim.
                </p>
                <div class="text-center">
                    <a href="#" class="btn">Ir a la Introducción</a>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="teoria" class="component-basic">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-9 mx-auto" id="columna">
                <h3 style="color: white; font-weight: bold">Teoria</h3>
                <p style="color: white">
                    A continuación, se muestra la parte teórica del software, este software cuenta con 6 módulos, en cada
                    módulo se encontrarán temas específicos que le permitirán afianzar sus conocimientos en programación
                    como también afianzarlos. Este software es creado para todo público, tanto para la persona que conoce y
                    desea mejorar sus conocimientos básicos de programación como también para aquella persona que apenas
                    está empezando a programar.
                </p>
            </div>
        </div>
    </section>

    <div id="teoria-elements">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-12 text-center" id="title-moduls">
                <h3>Modulos de teoría</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href="{{ route('secuencia') }}"><img src="{{ asset('imagenes/estructuras_secuencia/main.png') }}"
                            alt="imagen"></a>
                </div>
                <h3><a href="{{ route('secuencia') }}">Estructuras de secuencia</a></h3>
                <p>En este módulo se encontrará todo lo relacionado con los tipos de variables que maneja JavaScript, como
                    también los operadores aritméticos y lógicos.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#">Estructuras condicionales</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#">Estructuras repetitivas</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#">Estructuras de datos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#">Funciones</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#">Graficos con HTML</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
        </div>

    </div>
@endsection
