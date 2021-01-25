<header id="header">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <img src="{{ asset('imagenes/logo.png') }}" alt="" class="mr-2" style="width: 30px">
        <a class="navbar-brand mr-auto" id="title" href="{{ url('/') }}">Guia JavaScript
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @switch($page)
                    @case('tipodatos')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('operadores') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('secuencia') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('tipodatos-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-secuencia/tipos-datos/#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('operadores')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('condicion') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('secuencia') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('operadores-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('operadores-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('operadores-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-secuencia/operadores/#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('operadores-ejercicios')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('operadores-ejercicios-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('simplesydobles-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-condicion/simplesydobles/#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('simplesydobles')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('multiples') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('condicion') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('simplesydobles-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('simplesydobles-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('simplesydobles-ejercicios')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('simplesydobles-ejercicios-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('multiples')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('repeticion') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('condicion') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('multiples-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-condicion/multiples#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('multiples-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('multiples-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('multiples-ejercicios')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('multiples-ejercicios-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('for')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('whileindex') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('repeticion') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('for-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-repeticion/for#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('for-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('for-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('while')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dowhileindex') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('repeticion') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('while-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-repeticion/while#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('while-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('while-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('dowhile')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('datos') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('repeticion') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('dowhile-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-repeticion/dowhile#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('dowhile-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dowhile-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('lista')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('matrices') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('datos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('lista-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-datos/listas#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('lista-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lista-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('matrices')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('objetos') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('datos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('matrices-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-datos/matrices#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('matrices-ejemplos')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('matrices-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('objetos')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('funciones') }}">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('datos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('objetos-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estructuras-datos/objetos#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('objetos-ejemplos')
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('objetos-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('functions')
                    <li class="nav-item">
                        <a class="nav-link" href="#ejemplos">
                            <img src="{{ asset('imagenes/icons/ejemplo.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Ejemplos/Ejercicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('imagenes/icons/icon-next.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Siguiente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('funciones') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('funciones-ejemplos-index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('funciones/functions#ejemplos') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @case('funciones-ejemplos')
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('funciones-ejemplo-index') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                    @break
                    @default
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#title-moduls') }}">
                            <img src="{{ asset('imagenes/icons/icon-back.png') }}" alt="icon-back"
                                style="width: 20px; margin: 0px 5px 0px 0px">
                            Volver
                        </a>
                    </li>
                @endswitch
            </ul>
        </div>
    </nav>
</header>
