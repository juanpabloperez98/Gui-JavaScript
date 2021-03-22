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
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.1</span>¿Qué es HTML?</h3>
                <p class="mt-3">
                    HTML (HyperText Markup Language) es un lenguaje muy sencillo que permite describir hipertexto, es decir,
                    texto presentado de forma estructurada y agradable, con enlaces (hyperlinks) que conducen a otros
                    documentos o fuentes de información relacionadas, y con inserciones multimedia (gráficos, sonido...) La
                    descripción se basa en especificar en el texto la estructura lógica del contenido (títulos, párrafos de
                    texto normal, enumeraciones, definiciones, citas, etc) así como los diferentes efectos que se quieren
                    dar (especificar los lugares del documento donde se debe poner cursiva, negrita, o un gráfico
                    determinado) y dejar que luego la presentación final de dicho hipertexto se realice por programas
                    especializados conocidos como Browsers o navegadores web (Firefox,Opera,Chrome,etc.)
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.2</span>Estructura Básica de un documento HTML</h3>
                <p class="mt-3">
                    Un documento escrito en HTML contendría básicamente las siguientes etiquetas:
                </p>

                <pre>
                    <code class="languaje-html">   &lt;html&gt;
        &lt;head&gt;
            &lt;title&gt;&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;&lt;/body&gt;
   &lt;/html&gt;
                    </code>
                </pre>

                <p>
                    Como se puede ver, html es un lenguaje de etiquetado donde cada etiqueta que se abre con el símbolo <span style="color: blue"><</span>,
                        debe ser cerrada con el símbolo <span style="color: blue">></span>. La parte del <span style="color: blue">head</span> es donde principalmente van los metadatos y
                        estilos del sito, en este también se generan etiquetas <span style="color: blue">meta</span> que sirven para que los navegadores
                        puedan identificar el sitio en sus búsquedas y entre otras cosas más, luego esta el <span style="color: blue">body</span>, que es
                        donde se crearan todo lo relaciona con el sitio (Los contenedores, títulos, párrafos, entre otros)
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.3</span>Lista de elementos HTML</h3>
                <p class="mt-3">
                    A continuación, se muestra la lista de elementos que tiene html y la explicación de cada una de ellas.
                </p>

                <table class="table mt-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Elemento</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">&lt;!DOCTYPE html&gt;</td>
                            <td class="text-left">Define que el documento esta bajo el estandar de HTML 5</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;html&gt;</td>
                            <td class="text-left">Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;head&gt;</td>
                            <td class="text-left">Representa una colección de metadatos acerca del documento, incluyendo enlaces a, o definiciones de, scripts y hojas de estilo.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;title&gt;</td>
                            <td class="text-left">Define el título del documento, el cual se muestra en la barra de título del navegador o en las pestañas de página. Solamente puede contener texto y cualquier otra etiqueta contenida no será interpretada.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;meta&gt;</td>
                            <td class="text-left">Define los metadatos que no pueden ser definidos usando otro elemento HTML.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;style&gt;</td>
                            <td class="text-left">Etiqueta de estilo usada para escribir CSS en línea.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;script&gt;</td>
                            <td class="text-left">Define ya sea un script interno o un enlace hacia un script externo. El lenguaje de programación es JavaScript</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;body&gt;</td>
                            <td class="text-left">Representa el contenido principal de un documento HTML. Solo hay un elemento <body> en un documento.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;section&gt;</td>
                            <td class="text-left">Define una sección en un documento.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;nav&gt;</td>
                            <td class="text-left">Define una sección que solamente contiene enlaces de navegación</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;article&gt;</td>
                            <td class="text-left">Define contenido autónomo que podría existir independientemente del resto del contenido.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;aside&gt;</td>
                            <td class="text-left">Define algunos contenidos vagamente relacionados con el resto del contenido de la página. Si es removido, el contenido restante seguirá teniendo sentido</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;h1&gt;,&lt;h2&gt;,&lt;h3&gt;,&lt;h4&gt;,&lt;h5&gt;,&lt;h6&gt;</td>
                            <td class="text-left">Los elemento de cabecera  implementan seis niveles de cabeceras de documentos; &lt;h1&gt; es la de mayor y &lt;h6&gt; es la de menor importancia. Un elemento de cabecera describe brevemente el tema de la sección que introduce.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;header&gt;</td>
                            <td class="text-left">Define la cabecera de una página o sección. Usualmente contiene un logotipo, el título del sitio Web y una tabla de navegación de contenidos.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;footer&gt;</td>
                            <td class="text-left">Define el pie de una página o sección. Usualmente contiene un mensaje de derechos de autoría, algunos enlaces a información legal o direcciones para dar información de retroalimentación.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;p&gt;</td>
                            <td class="text-left">Define una parte que debe mostrarse como un párrafo.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;hr&gt;</td>
                            <td class="text-left">Representa un quiebre temático entre párrafos de una sección o articulo o cualquier contenido.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;ul&gt;</td>
                            <td class="text-left">Define una lista de artículos sin orden.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;ol&gt;</td>
                            <td class="text-left">Define una lista ordenada de artículos.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;li&gt;</td>
                            <td class="text-left">Define un artículo de una lista enumerada.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;div&gt;</td>
                            <td class="text-left">Representa un contenedor genérico sin ningún significado especial.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">&lt;a&gt;</td>
                            <td class="text-left">Representa un hiperenlace, enlazando a otro recurso.</td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    Estos son algunos de los elementos que se pueden encontrar en html, hay muchos más, pero estos son los principales o mas usados a la hora de realizar la maquetación de una aplicación web	
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.4</span>Atributos de una etiqueta</h3>
                <p class="mt-3">
                    Los atributos de una etiqueta básicamente son metadatos que permiten caracterizar una etiqueta en específico. 
                    Como ya se ha visto, html trabaja con etiquetas que tienen diferentes funcionalidades, ya sea servir como contenedor o servir como enlace. 
                    A lo largo de una maquetación es posible que se utilicen varias de las mismas etiquetas, por lo que en algunas ocasiones 
                    será necesario poder identificar una etiqueta específica, ya sea para cambiar sus estilos o para realizar una acción o evento con 
                    esta misma, es por eso que existen los atributos de una etiqueta. Al hablar de atributos se pueden mencionar las clases, los id’s, target, 
                    href, entre otros, hay muchos atributos que pueden tener una etiqueta, pero para esta guía solamente se verán 2, los cuales son <span style="color: blue">clases</span> e <span style="color: blue">id’s</span>. A continuación, se muestra un ejemplo con una etiqueta <span style="color: blue; font-weight: bold">&lt;div&gt;</span>
                </p>
                <pre>
                    <code class="languaje-html">   &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Nombre del documento&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id="contenedorId" class="contenedorClass"&gt;&lt;/div&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                    </code>
                </pre>

                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Nótese en la línea 7 se crea una etiqueta &lt;div&gt;, esta tiene un atributo id con el nombre <span style="color: blue">contenedorId</span> y una clase con el nombre <span style="color: blue">contenedorClass</span>, más adelante se verá la importancia de los atributos en las etiquetas. Otro ejemplo de atributo sería el de la etiqueta &lt;html&gt; de la línea 2, el cual tiene un atributo <span style="color: blue">lang</span> que tiene como valor “en” que significa que la pagina principalmente es en inglés, esto no tiene mucha relevancia por ahora es por eso que se dejara de esa forma
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Abrir Nota</a>
                </div>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.5</span>Atributo ID</h3>
                <p class="mt-3">
                    Como se ha visto y se ha mencionado, los atributos sirven para identificar etiquetas de un documento html debido a que puede haber varias de las mismas etiquetas. Por ejemplo, puede haber varias etiquetas &lt;div&gt; utilizadas en una maquetación, entonces ¿Cómo se haría para identificar una de esas etiquetas?, la respuesta es simple, a través de un atributo id, el cual debe ser único en todo el documento y no puede repetirse en ninguna otra etiqueta (de cualquier tipo)
                </p>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.1.6</span>Atributo CLASS</h3>
                <p class="mt-3">
                    Bueno, ya se entiendo bien para que se usa el atributo id, pero ahora supóngase que se necesita identificar varias etiquetas que van a compartir un mismo evento o un mismo estilo (Por estilo se hace referencia a CSS que en la siguiente sección se va a tratar mejor), entonces ¿Cómo se haría para poder identificar varias etiquetas que van a compartir un mismo estilo?, bueno es sencillo, a través del atributo class, se puede identificar varias etiquetas, por lo que puede repetirse una o varias clases en varias etiquetas
                </p>
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
                        <a href="{{ route('html-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
            } else {
                $('#boton-probar4').text('Probar')
                status4 = 0
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
