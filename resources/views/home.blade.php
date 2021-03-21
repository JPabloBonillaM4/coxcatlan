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
                    <i class="icons icon-support text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Customer Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-layers text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Sliders</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-menu text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Buttons</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5 mb-5">
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-doc text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">HTML5 / CSS3 / JS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-user text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Icons</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-screen-desktop text-color-primary"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold mb-2">Lightbox</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
    <div class="row py-5 my-5">
        <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
            <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="{{ asset('img/img_index/letras.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Nosotros</h3>
                    <p class="text-2 mb-0">Municipio cuna del maíz en todo México</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="{{ asset('img/img_index/iglesia.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Cultura y tradicón</h3>
                    <p class="text-2 mb-0">Nuestras costumbres y creencias</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="{{ asset('img/img_index/rupestre.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Antigüedades</h3>
                    <p class="text-2 mb-0">Nuestros antepasados</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="{{ asset('img/img_index/arco.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Legado</h3>
                    <p class="text-2 mb-0">A través del tiempo</p>
                </div>
                <div>
                    <img class="img-fluid rounded-0 mb-4" src="{{ asset('img/img_index/escudo.jpeg') }}" alt="" />
                    <h3 class="font-weight-bold text-color-dark text-4 mb-0">Nuestro escudo</h3>
                    <p class="text-2 mb-0">Representación del municipio</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Conoce <strong class="font-weight-extra-bold">nuestras costumbres</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
            <a href="page-team.html" class="btn btn-success font-weight-semibold rounded-1 px-5 btn-py-2 text-2">Saber más...</a>
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