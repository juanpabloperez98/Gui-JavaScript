<header id="header">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <img src="{{ asset('imagenes/logo.png') }}" alt="" class="mr-2" style="width: 30px">
        <a class="navbar-brand mr-auto" id="title" href="{{ route('welcome') }}">Guía JavaScript
        </a>

        <div class="">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" id="open-toggle" href="#">
                        <img id="icon-menu" src="{{ asset('imagenes/icons/icon-menu.png') }}" alt="">
                        <img id="icon-close" class="desactivate" src="{{ asset('imagenes/icons/icon-close.png') }}"
                            alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="slide-menu">
        <div class="p-4" style="height: 90%;overflow-y: scroll;">
            <div class="mt-2 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>Estructuras de Secuencia</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body text-left" style="background: none; color: white">
                        En este módulo se encontrará todo lo relacionado con los tipos de variables que maneja
                        JavaScript, como también los operadores aritméticos y lógicos.
                    </div>
                    <div id="boton">
                        <a href="{{ route('secuencia') }}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                        aria-controls="collapseExample2">
                        <span>Estructuras condicionales</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body text-left" style="background: none; color: white">
                        En este módulo, se explicarán las estructuras condicionales tales como lo son el if, if-else, y
                        switch, que sirven para el control del flujo de un programa.
                    </div>
                    <div id="boton">
                        <a href="{{ route('condicion') }}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                        aria-controls="collapseExample3">
                        <span>Estructuras Repetitivas</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body text-left" style="background: none; color: white">
                        En este módulo, se explicarán las estructuras de repetición o ciclos, en los cuales se mostrarán
                        su sintaxis y funcionamiento, como también la explicación de cada uno de los ciclos.
                    </div>
                    <div id="boton">
                        <a href="{{ route('repeticion') }}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                        aria-controls="collapseExample4">
                        <span>Estructuras de Datos</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample4">
                    <div class="card card-body text-left" style="background: none; color: white">
                        El objetivo de este módulo es aprender acerca de las estructuras de datos, cuales son y como
                        manejarlas. En este módulo se encontrarán temas relacionado a lo que son vectores, matrices y
                        objetos.
                    </div>
                    <div id="boton">
                        <a href="{{ route('datos') }}" class="btn btn-primary">Ir al módulo</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                        aria-controls="collapseExample5">
                        <span>Funciones</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample5">
                    <div class="card card-body text-left" style="background: none; color: white">
                        En la siguiente sección se va a mostrar el concepto de funciones en JavaScript, en esta sección se podrá encontrar ejemplos y ejercicios de funciones como también la importancia de porque utilizarlas
                    </div>
                    <div id="boton">
                        <a href="{{ route('funciones') }}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false"
                        aria-controls="collapseExample6">
                        <span>Manejo del DOM</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample6">
                    <div class="card card-body text-left" style="background: none; color: white">
                        En este módulo se explicará acerca de las tecnologías implementadas para el desarrollo web como son HTML5, CSS y JavaScript. Se dará un repaso rápido sobre estas tres tecnologías mencionadas anteriormente y se mostraran ejemplos de como se puede manejar el DOM con JavaScript
                    </div>
                    <div id="boton">
                        <a href="{{ route('dom') }}" class="btn btn-primary">Ir al modulo</a>
                    </div>
                </div>
            </div>

            <div id="manuals" class="mt-5 p-4" style="background-color: #41423e">
                <a href="https://drive.google.com/file/d/1CgxZv6LGrHleNeVrhw2W1UUxUrTGHDhb/view?usp=sharing" target="_blank" class="d-block">Manual de usuario</a>
                <a href="https://drive.google.com/file/d/1ZSQXtXOJyme4fAVHg4eg8cs5x0GVtZgQ/view?usp=sharing" target="_blank" class="d-block">Manual tecnico</a>
            </div>
        </div>
    </div>

</header>
