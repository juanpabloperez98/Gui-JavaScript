@include('layouts.head')

<main id="main1">
    <div id="contentImage">
        <div class="row mx-auto" style="max-width: 1111px">
            <div class="col-lg-7" id="back-opacity" style="">
                <h3 style="color: white; font-weight: bold">Aprende a programar con JavaScript</h3>
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
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium voluptatibus, sint labore a
                quisquam, aliquid animi fugit aperiam porro eum eligendi voluptatum eveniet, mollitia unde sit saepe ad
                praesentium error dolorum asperiores magni maxime provident veniam repudiandae! Nemo, quidem enim.
            </p>
        </div>
    </div>

</section>

<section id="teoria" class="component-basic">
    <div class="row mx-auto" style="max-width: 1111px">
        <div class="col-lg-9 mx-auto" id="columna">
            <h3 style="color: white; font-weight: bold">Teoria</h3>
            <p style="color: white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium voluptatibus, sint labore a
                quisquam, aliquid animi fugit aperiam porro eum eligendi voluptatum eveniet, mollitia unde sit saepe ad
                praesentium error dolorum asperiores magni maxime provident veniam repudiandae! Nemo, quidem enim.
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
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Estructuras de secuencia</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 tema">
            <div class="img">
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Estructuras condicionales</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 tema">
            <div class="img">
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Estructuras repetitivas</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 tema">
            <div class="img">
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Estructuras de datos</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 tema">
            <div class="img">
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Funciones</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 tema">
            <div class="img">
                <a href=""><img src="{{ asset('imagenes/Operadores.png') }}" alt=""></a>
            </div>
            <h3><a href="#">Graficos con HTML</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut doloribus sit amet autem dolor doloremque quas dicta! Ad, quisquam.</p>
        </div>
    </div>

</div>

@include('layouts.footer')
