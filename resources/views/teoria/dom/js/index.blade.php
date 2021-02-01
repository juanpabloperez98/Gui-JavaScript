@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teoria/baseteoria.css') }}">
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <main id="tp-main">
        <div class="row mx-auto p-md-4">
            <div class="col-lg-11 mx-auto bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.1</span>¿Qué es DOM?</h3>
                <p class="mt-3">
                    El DOM, acrónimo de Document Object Model, es la herramienta base para manipular cualquier página web. El DOM es generado por el navegador que uses (Chrome, Firefox, etc) en el momento en que el documento HTML de una web se carga.  
                    Ese documento HTML de una web se carga en un navegador, el navegador crea un objeto (un Document Object) basado en dicho documento HTML. Este Document Object contiene múltiples propiedades y métodos que nos permiten interactuar con esa web usando nuestro código JS (aka JavaScript).
                    A ese objeto creado por el navegador, con todas sus propiedades y métodos, se le llama el Document Object Model.
                    El DOM estructura nuestra web en HTML nodes (nodos en español) , donde cada etiqueta de HTML sería un node que podría tener etiquetas "hijas", formando así una estructura de árbol, o jerarquía de nodos. 
                </p>
                <div style="width: 500px;" class="m-auto bg-dark">
                    <img class="w-100" src="{{ asset('imagenes/dom/js/dom-jerarquia.png') }}" alt="dom">
                </div>

                <p class="mt-3">
                    Esta es una representación común del DOM. Ten en cuenta que todos esos nodos descienden de un "objecto madre": el window object, a partir del cual se puede acceder a todos los nodos, porque son sus hijos.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.2</span>Tipo de nodos</h3>
                <p class="mt-3">
                    Existen dos tipos de nodos los cuales son:
                    <ul class="container">
                        <li>Element Nodes</li>
                        <li>Text Nodes</li>
                    </ul>
                    Los element nodes, son nodos de tipo elemento (etiquetas HTML) como las que ya se han visto en ejemplos anteriores ya sean &lt;div&gt; &lt;aside&gt; &lt;p&gt;, entre otros. Y los text nodes son el contenido escrito que ira dentro de los elementos nodos, si por ejemplo se quiere colocar una cadena de caracteres dentro de un elemento &lt;p&gt;, es necesario primero crear un text node para hacerlo.
                </p>
                <p>
                    Para interactuar con la página, tenemos que hacerlo a través de los nodes, obteniendo una referencia del node que queremos manipular. Con "manipular" nos referimos a hacer cosas como eliminar elementos de una página o añadir elementos.
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.3</span>Seleccionando elementos del DOM</h3>
                <p class="mt-3">
                    Para obtener la referencia del node que queremos manipular, podemos usar varios métodos que nos proporciona el DOM. Recuerda que los puedes ver todos en tu consola escribiendo "document.". <br>
                    Lo que hacemos cuando queremos obtener una referencia al node que queremos manipular, es algo así como "solicitar acceso al DOM", lo que podríamos traducir por "query access to the DOM". No es casualidad que el método que necesitemos se llame querySelector. <br>
                </p>
                <h4>Codigo HTML</h4>
                <pre>
                    <code class="languaje-html">   &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Nombre del documento&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;&lt;/div&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>
                <h4>Codigo JavaScript</h4>
                <pre>
                    <code class="javascript">   var name_ = document.querySelector('div')
    console.log(name_)
                    </code>
                </pre>

                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                &lt;div&gt;
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Tener en cuenta que esta forma de seleccionar nodos solo selecciona el primer elemento de todo el documento que coincida con nuestra selección. Es decir, en este caso, no importa que haya más &lt;div&gt; en nuestra página, porque JS lee nuestra web de arriba a abajo y sólo seleccionará el primero que encuentre.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Ejecutar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.4</span>Seleccionar por Class o ID</h3>
                <p class="mt-3">
                    Si se recuerda, anteriormente se ha definido que una etiqueta HTML tiene atributos que permiten distinguir entre una etiqueta y otra en específico, es en este punto donde se ve realmente la importancia de estos atributos para poder manipular los elementos con JavaScript.
                    Para poder acceder a las etiquetas HTML a través de sus atributos se utilizará el mismo método que se enseño anteriormente, la diferencia es que similar a CSS, para distinguir entre una clase o un id, es necesario colocar un indicador <span style="color: blue">“.”</span> O <span style="color: blue">“#”</span> respectivamente
                </p>
                <h4>Codigo HTML</h4>
                <pre>
                    <code class="languaje-html">   &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Nombre del documento&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt; id="idp">Hola mundo desde el atributo ID&lt;/p&gt;
        &lt;p&gt; class="classp">Hola mundo desde el atributo Class&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>

                <h4>Codigo JavaScript</h4>
                <pre>
                    <code class="javascript">   var name_ = document.querySelector('#idp')
    console.log(name_)
                    </code>
                </pre>
                <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <p class="text-center" style="color: white;">
                                &lt;p id="idp"&gt;
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                A pesar de tener dos etiquetas &lt;p&gt; en el documento HTML, nótese que solo se esta imprimiendo la etiqueta &lt;p&gt; que tiene como atributo el id con valor “idp”, esto debido que al quetySelector, se le esta especificando el indicador <span style="color: blue">“#”</span>.
                                De la misma manera se hubiera podido imprimir la etiqueta correspondiente a la que tiene la clase
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Ejecutar</a>
                </div>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.5</span>Crear elementos</h3>
                <p class="mt-3">
                    Como se ha podido ver, con JavaScript se puede tener acceso a los elementos de un documento HTML. Ahora se mostrará como crear un nuevo elemento, pero esta vez desde JavaScript y no desde HTML, de esta manera se busca que una pagina web pueda ser dinámica de acuerdo a eventos que pasen, por ejemplos cada vez que se haga click en un botón crea un nuevo elemento determinado, o cuando se llene un formulario poder crear un contenedor con el contenido del formulario que se llenó.
                    Para crear un elemento nuevo con JavaScript, se debe tener en cuenta si se desea o no agregar contenido textual al nuevo elemento, es por eso que a continuación, se va a mostrar como agregar a un elemento &lt;div&gt; una nueva etiqueta &lt;p&gt; con un mensaje.
                </p>

                <h4>Codigo HTML</h4>
                <pre>
                    <code class="languaje-html">   &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Nombre del documento&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;&lt;/div&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>

                <h4>Codigo JavaScript</h4>
                <pre>
                    <code class="javascript">   var div = document.querySelector('div'),
    p = document.createElement('p')
    p.innerHTML = "Esta es una etiqueta p creada con JS"
    div.appendChild(p)
                    </code>
                </pre>

                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <div style="width: 200px; height: 100px; background-color: white; margin: auto">
                                <p style="color: black">Esta es una etiqueta p creada con JS</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                La función <span style="color: blue">createElement</span> permite crear cualquier elemento o etiqueta HTML, pero es necesario agregarla dentro del DOM o dentro de una etiqueta ya perteneciente al DOM, es por eso que se utiliza el método <span style="color: blue">appendChild</span>. El <span style="color: blue">innerHtml</span> permite crear el contenido textual que va dentro de la etiqueta &lt;p&gt;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Ejecutar</a>
                </div>

            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.3.6</span>Cambiar los estilos de un elemento</h3>
                <p class="mt-3">
                    Ya se ha visto como acceder y crear elementos dentro del DOM, ahora se explicará cómo se pueden agregar estilos a los elementos creados dentro del DOM. Para cambiar o darles estilos a elementos dentro del DOM, es necesario tener en cuenta que hay varias formas de hacerlo, en esta guía se enseñara la mas sencilla de las formas que es modificando el atributo “style” al elemento correspondiente.
                </p>
                <h4>Codigo HTML</h4>
                <pre>
                    <code class="languaje-html">   &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Nombre del documento&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p id="modColor"&gt;<span id="spanEt">Este es el mensaje a cambiar</span>&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>

                <h4>Codigo JavaScript</h4>
                <pre>
                    <code class="javascript">   var p = document.querySelector('#modColor')
    p.setAttribute('style','color: Blue')
                    </code>
                </pre>

                <div id="result4" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Así como se cambio el color de letra de la etiqueta &lt;p&gt; se hubiese podido alterar cualquier estilo CSS que se requiera.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar4">Ejecutar</a>
                </div>

            </div>
        </div>


        <div class="row mx-auto p-md-4" id="ejemplos">
            <div class="col-lg-11 text-center mx-auto bg-light columna-principal">
                <h4 class="text-center mb-md-5 font-weight-bold">Ejemplos y practica</h4>

                <div class="card-personalizada">
                    <div class="cardheader">
                        <h5>Ejemplos</h5>
                    </div>

                    <div class="cardboton">
                        <a href="{{ route('js-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
                    </div>
                </div>

                <div class="card-personalizada mt-5 mt-lg-0">
                    <div class="cardheader">
                        <h5>Practica</h5>
                    </div>

                    <div class="cardboton">
                        <a href="#" class="btn">Ir a los Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        var status1 = 0,
            status2 = 0,
            status3 = 0,
            status4 = 0,
            status5 = 0



        $('#boton-probar1').on('click', (e) => {
            e.preventDefault()
            $('#result1').toggle('fold')
            if (status1 == 0) {
                $('#boton-probar1').text('X')
                status1 = 1
            } else {
                $('#boton-probar1').text('Probar')
                status1 = 0
            }
        })

        $('#boton-probar2').on('click', (e) => {
            e.preventDefault()
            $('#result2').toggle('fold')
            if (status2 == 0) {
                $('#boton-probar2').text('X')
                status2 = 1
            } else {
                $('#boton-probar2').text('Probar')
                status2 = 0
            }
        })

        $('#boton-probar3').on('click', (e) => {
            e.preventDefault()
            $('#result3').toggle('fold')
            if (status3 == 0) {
                $('#boton-probar3').text('X')
                status3 = 1
            } else {
                $('#boton-probar3').text('Probar')
                status3 = 0
            }
        })

        $('#boton-probar4').on('click', (e) => {
            e.preventDefault()
            $('#result4').toggle('fold')
            if (status4 == 0) {
                $('#boton-probar4').text('X')
                status4 = 1
                $('#spanEt').css({'color':'Blue'})
            } else {
                $('#boton-probar4').text('Probar')
                status4 = 0
                $('#spanEt').css({'color':'White'})
            }
        })

        $('#boton-probar5').on('click', (e) => {
            e.preventDefault()
            $('#result5').toggle('fold')
            if (status5 == 0) {
                $('#boton-probar5').text('X')
                status5 = 1
            } else {
                $('#boton-probar5').text('Probar')
                status5 = 0
            }
        })

    </script>
@endsection
