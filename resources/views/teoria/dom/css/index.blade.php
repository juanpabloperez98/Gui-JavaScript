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
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.1</span>¿Qué es CSS?</h3>
                <p class="mt-3">
                    Lenguajes CSS o hoja de estilos, es un lenguaje que define la apariencia de un documento escrito en un lenguaje de etiquetado como lo es HTML. Como se sabe, HTML es un lenguaje de etiquetas que tiene elementos definidos para poder estructurar o crear el cuerpo base de una página web, pero solo HTML no podría generar una página visualmente atractiva como las que se conocen hoy en día, es ahí donde entra a jugar un papel importante CSS. <br>
                    CSS permite darles estilos a las etiquetas utilizadas en HTML, dándole la apariencia deseada tales como colores, espacios entre elementos, tipos de letras, entre otros estilos. CSS es un tema extremadamente amplio, que para poder entender en plenitud este lenguaje, es necesario realizar una guía completa de el mismo, en esta sección se tocaran temas base y sencillos, se recomienda al usuario afianzar los conocimientos en este lenguaje de estilos.
                </p>
            </div>
            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.2</span>Sintaxis</h3>
                <p class="mt-3">
                    CSS identifica a un elemento ya sea por su atributo o por el nombre propiamente de la etiqueta, acompañado de corchetes <span style="color: blue">{ }</span>, de los cuales dentro de ellos se podrán los estilos que se desee dar a un elemento o etiqueta
                </p>

                <pre>
                    <code class="css">   div{
        Bloque de sentencias
    }
                    </code>
                </pre>

                <p>
                    Al utilizar esta sintaxis se está accediendo a todos los elementos <span style="color: blue">&lt;div&gt;</span> que haya en el documento HTML
                </p>
            </div>

            <div class="col-lg-11 mx-auto mt-3 mt-lg-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.3</span>Identificar por atributo</h3>
                <p class="mt-3">
                    Como se vio anteriormente en el ejemplo de la sintaxis, es posible acceder a darle estilos a una etiqueta HTML, pero como se menciono en la sección pasada de HTML, las etiquetas pueden tener atributos que permiten identificarlas para poder ser alteradas de alguna manera (en este caso, poder alterar sus estilos). Para poder darle estilos a una etiqueta HTML a través de sus atributos es necesario colocar a que atributo se hará referencia (Sea el atributo <span style="color: blue">class</span> o el atributo <span style="color: blue">id</span>)
                </p>

                <div class="row mx-auto">
                    <div class="col-lg-6">
                        <pre>
                            <code class="css">  #nombre_id{
        Bloque de sentencias                            
    }   
                            </code>
                            </pre>
                    </div>
                    <div class="col-lg-6">
                        <pre>
                            <code class="css">   .nombre_clase{
        Bloque de sentencias                            
    }
                            </code>
                            </pre>
                    </div>
                </div>
                <div id="result1" class="result px-md-3 text-center desactivate" style="margin-top: -59px; width: 97%; margin: auto">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">NOTA</h6>
                            <p class="text-left mt-4" style="color: white;">
                                Como se puede observar en el primer ejemplo, se utiliza el símbolo <span style="color: blue; font-weight: bold">#</span> para decir que se va acceder a un elemento a través de su atributo <span style="color: blue;">id</span>, y en el otro ejemplo se utiliza el símbolo <span style="color: blue; font-weight: bold">.</span> para decir que se va acceder a un elemento a través de su atributo <span style="color: blue;">class</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar1">Abrir Nota</a>
                </div>

                {{-- <table class="table mt-3">
                    <thead>
                        <tr style="background-color: #d3c568; color: white">
                            <th scope="col">Elemento</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">&lt;!doctype html&gt;</td>
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
                </table> --}}
            </div>

            <div class="col-lg-11 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.4</span>Márgenes</h3>
                <p class="mt-3">
                    Las márgenes se definen como los espacios externos que hay entre el documento y el elemento al que se le esté aplicando las márgenes, por lo general esto es aplicado a elementos caja (como lo son el main, div, aside)
                </p>

                <div style="width: 400px" class="m-auto">
                    <img class="w-100" src="{{ asset('imagenes/dom/css/margin.png') }}" alt="margin-img">
                </div>

                <p class="mt-3">
                    Su sintaxis es similar a esto:
                </p>

                <pre>
                    <code class="css">   #id_elemento{
        margin: 1px 2px 1px 2px                    
    }
                    </code>
                </pre>

                <p class="mt-3">
                    La notación <span style="color: blue">margin</span> define 4 valores en pixeles que se toman como el margen superior, el margen derecho, el margen inferior y el margen izquierdo, como se pudo ver en el ejemplo, pero también se puede definir una margen según se requiera. 
                </p>


                <pre>
                    <code class="css">   #id_elemento{
        margin-top: 1px;
        margin-right: 2px;                    
        margin-bottom: 1px;
        margin-left: 2px;
    }
                    </code>
                </pre>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.5</span>Background-color</h3>
                <p class="mt-3">
                    Para definir colores de fondo para un elemento se utiliza el estilo background-color, en los cuales se puede definir un color con el nombre del color en inglés (CSS ya identifica el color) o a través de código hexadecimal o RGB
                </p>
                <pre>
                    <code class="css">   .class_elemento{
        background-color: Blue
    }
                    </code>
                </pre>

                <div id="result2" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <div style="width: 100px; height: 100px; background-color: blue; margin: auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar2">Probar</a>
                </div>
            </div>

            <div class="col-lg-5 mx-auto mt-3 bg-light columna-principal">
                <h3 class="text-md-center"><span class="spancolor mr-2">6.2.6</span>Width - Height</h3>
                <p class="mt-3">
                    A los elementos se les puede definir un alto y un ancho en pixeles para ver la totalidad de espacio que pueden ocupar en el documento
                </p>
                <pre>
                    <code class="css">   .class_elemento{
        width: 100px;
        height: 200px;
        background-color: red;
    }
                    </code>
                </pre>
                <div id="result3" class="result px-md-3 text-center desactivate" style="margin-top: -59px">
                    <div class="row mx-auto">
                        <div class="col-lg-12">
                            <h6 class=" font-weight-bold" style="color: white">Resultado</h6>
                            <div style="width: 100px; height: 200px; background-color: red; margin: auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-probar" id="boton-probar3">Probar</a>
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
                        <a href="{{ route('css-ejemplo-index') }}" class="btn">Ir a los ejemplos</a>
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
