@extends('index')
@section('content')
@include('layouts.index-video')
<div class="container" id="main">
    <div class="row text-center pt-5 pb-4 mt-5 mb-4">
        <div class="col-md-10 mx-md-auto">
            <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                <span>El municipio de coxcatlan es </span>
                <span class="word-rotator-words bg-primary">
                    <b class="is-visible">increible</b>
                    <b>especial</b>
                    <b>único</b>
                </span>
                <span> para vivir y visitar.</span>
            </h1>
            <p class="lead appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                Un lugar mágico, lleno de cultura, tradición y una gran diversidad de costumbres, con un ambiente tranquilo y armonioso, perfecto para pasar unos dias con total plenitud en familia ó vivir siempre con la mejor calidad de ambiente con su ciudadanía.
            </p>
        </div>
    </div>
    <div class="row mb-lg-4">
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-book-open text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Monumentos históricos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-magic-wand text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Fiestas</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-diamond text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Artesanías</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5 mb-5">
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-cup text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Gastronomía</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-people text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Población</h4>
                    <p>De acuerdo al Conteo de Población y Vivienda 2010, este municipio tiene una población total de 19,639, siendo 9,368 hombres y 10,271 mujeres.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-location-pin text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Ubicación</h4>
                    <p>El municipio de Coxcatlán se localiza en la parte sureste del estado de Puebla. Colinda al norte Ajalpan y Zoquitlán, al sur el estado de Oaxaca, al este con Coyomeapan y al oeste con Zinacatepec y San José Miahuatlán.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="maiz" class="parallax section section-text-light section-parallax section-center py-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}" data-image-src="{{ asset('img/img_index/maiz.jpg') }}">
    <div class="d-flex justify-content-center">
        <div class="scrollable-parallax-wrapper">
            <div class="container py-5 my-5 bg-shadow">
                <div class="row justify-content-center">
                    <div class="col-lg-8 py-5 my-5">
                        <h4 class="mb-3 bg-shadow text-light py-3">Cuna del maíz</h4>
                        <p class="text-white bg-shadow font-weight-bold mb-2 py-5">Específicamente en la cueva de Coxcatlán, donde en los años 60 Richard McNisch, un eminente arqueólogo norteamericano, hace el hallazgo más impresionante de los últimos años, la mazorca más antigua del mundo, de hace 7 mil años.</p>
                        <a href="javascript:void(0);" class="btn btn-modern btn-info mb-0">Conocer más...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
    <div class="row">
        <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
            <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                <div>
                    <img class="img-fluid carousel-img-md rounded-0 mb-4" src="{{ asset('img/img_index/letras.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Nosotros</h3>
                    <p class="text-2 mb-0">Municipio cuna del maíz en todo México</p>
                </div>
                <div>
                    <img class="img-fluid carousel-img-md rounded-0 mb-4" src="{{ asset('img/img_index/iglesia.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Cultura y tradicón</h3>
                    <p class="text-2 mb-0">Nuestras costumbres y creencias</p>
                </div>
                <div>
                    <img class="img-fluid carousel-img-md rounded-0 mb-4" src="{{ asset('img/img_index/rupestre.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Antigüedades</h3>
                    <p class="text-2 mb-0">Nuestros antepasados</p>
                </div>
                <div>
                    <img class="img-fluid carousel-img-md rounded-0 mb-4" src="{{ asset('img/img_index/arco.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Legado</h3>
                    <p class="text-2 mb-0">A través del tiempo</p>
                </div>
                <div>
                    <img class="img-fluid carousel-img-md rounded-0 mb-4" src="{{ asset('img/img_index/escudo.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Nuestro escudo</h3>
                    <p class="text-2 mb-0">Representación del municipio</p>
                </div>
            </div>
        </div>
        <div id="history" class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">La <strong class="font-weight-extra-bold">fundación</strong></h2>
            <p class="lead">Nuestro origen</p>
            <p class="mb-4">Se fundó en un lugar llamado ”Tzan Tzuan Tzin” o “San Juanito”, aproximadamante en el año 1,200 despues de Cristo; sus fundadores pertenecieron a un pueblo invasor procedente de ”Chicomostoc”, que significa “siete cuevas” o “siete cabezas” y por otros pueblos que invadieron el lugar hasta entonces habitado por los Teotihuacanos.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <section class="section section-success pl-4 pr-4 match-height border-top-0">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3">Nuestra historia</h4>
                        <h5>A través del tiempo...</h5>
                        <p class="mb-2">Nombre azteca formado de "cuzcatl", sarta de joyas, piedras o gargantilla de cuentas; "tlán" cerca, junto (lugar); Cozca-tlán, quiere decir "Lugar de (los que usan) collares o gargantillas.</p>
                        <p class="mb-3">En el tiempo antiguo salieron de un chicomoxtoc que en la lengua española quiere decir siete cabeceras, cinco señores principales llamados Xelhuanhuetzin Sichitexictla y con ellos una mujer llamada Ahuacoatle a quien ellos adoraban y reconocían por su diosa.....</p>
                        <a href="javascript:void(0);" class="btn btn-modern btn-info mb-0">Conocer más</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6 p-0">
            <section class="parallax section section-parallax match-height border-top-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('img/img_index/time.jpeg') }}" style="min-height: 260px;">
            </section>
        </div>
    </div>
</div>
<section class="section section-height-3 bg-light border border-bottom-0 m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection