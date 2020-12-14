<header id="header">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <img src="{{ asset('imagenes/logo.png') }}" alt="" class="mr-2" style="width: 30px">
        <a class="navbar-brand mr-auto" id="title" href="{{ route('welcome') }}">Guia JavaScript
        </a>

        <div class="">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" id="open-toggle" href="#">
                        <img id="icon-menu" src="{{ asset('imagenes/icons/icon-menu.png') }}" alt="">
                        <img id="icon-close" class="desactivate" src="{{ asset('imagenes/icons/icon-close.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="slide-menu">
        <div class="p-4">
            <div class="mt-2 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
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
                    <a data-toggle="collapse" href="#collapseExample2" role="button"
                        aria-expanded="false" aria-controls="collapseExample2">
                        <span>Estructuras condicionales</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body text-left" style="background: none; color: white">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample3" role="button"
                        aria-expanded="false" aria-controls="collapseExample3">
                        <span>Estructuras Repetitivas</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body text-left" style="background: none; color: white">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample4" role="button"
                        aria-expanded="false" aria-controls="collapseExample4">
                        <span>Estructuras de Datos</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample4">
                    <div class="card card-body text-left" style="background: none; color: white">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample5" role="button"
                        aria-expanded="false" aria-controls="collapseExample5">
                        <span>Funciones</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample5">
                    <div class="card card-body text-left" style="background: none; color: white">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <div class="content-link-toggle ">
                    <a data-toggle="collapse" href="#collapseExample6" role="button"
                        aria-expanded="false" aria-controls="collapseExample6">
                        <span>Graficos con html</span>
                    </a>
                </div>
                <div class="collapse" id="collapseExample6">
                    <div class="card card-body text-left" style="background: none; color: white">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
            </div>
        </div>

        <div id="manuals" class="mt-5 p-4" style="background-color: #41423e">
            <a href="#" class="d-block">Manual de usuario</a>
            <a href="#" class="d-block">Manual tecnico</a>
        </div>

    </div>
    
</header>