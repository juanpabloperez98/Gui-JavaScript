@extends('layouts.app')

@section('header')
    @include('layouts.header_main')
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

    {{-- <section id="introduccionJS" class="component-basic">
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
                    El software Guía de programación en JavaScript, cuenta con 6 módulos teóricos, estos módulos buscan dar
                    un panorama al usuario sobre los distintos temas de la programación imperativa basados con ejemplos en
                    JavaScript. Este software es creado para todo público, tanto para la persona que conoce y desea mejorar
                    sus conocimientos básicos de programación como también para aquella persona que apenas está empezando a
                    programar.
                </p>
            </div>
        </div>
    </section>


    <section id="acercadepagina" class="component-basic">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-9 mx-auto">
                <h3>
                    Practica
                </h3>
                <p>
                    Cada modulo de este software cuenta con mínimo dos secciones en los cuales se explican todo lo
                    relacionado a las <span>estructuras que maneja JavaScript, como también funciones y una sección de JavaScript</span>
                    enfocado al manejo del DOM con Html, para hacer mas interactivo el aprendizaje y con el fin de que el
                    usuario pueda entender más a fondo, cada sección cuenta con un apartado de ejercicios, en los que el
                    usuario deberá completar el código, según el ejercicio que se proponga.
                </p>
            </div>
        </div>
    </section>

    {{-- <div id="teoria-elements">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-12 text-center" id="title-moduls">
                <h3>Modulos de teoría</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href="{{ route('secuencia') }}"><img src="{{ asset('imagenes/<span>estructuras_secuencia/main.png') }}"</span>
                            alt="imagen"></a>
                </div>
                <h3><a href="{{ route('secuencia') }}"><span>Estructuras de secuencia</a></h3></span>
                <p>En este módulo se encontrará todo lo relacionado con los tipos de variables que maneja JavaScript, como
                    también los operadores aritméticos y lógicos.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#"><span>Estructuras condicionales</a></h3></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#"><span>Estructuras repetitivas</a></h3></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor
                    doloremque quas dicta! Ad, quisquam.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 tema">
                <div class="img">
                    <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
                </div>
                <h3><a href="#"><span>Estructuras de datos</a></h3></span>
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

    </div> --}}
@endsection

@section('scripts')
   
@endsection
