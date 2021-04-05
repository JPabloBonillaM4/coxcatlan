@extends('index')
@section('content')
<div class="container">
    <div class="row py-5 my-5">
        <h3 class="col-md-12 text-primary mb-3">Nuestra historia</h3>
        <div class="col-lg-12 mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                {{-- <img class="img-fluid border-radius-0" src="img/blog/wide/blog-20.jpg" alt=""> --}}
                                {{-- <iframe width="100%" height="500px" src="{{ asset('video/historia_1.mp4') }}"></iframe> --}}
                                <video width="100%" height="500" controls>
                                    <source src="{{ asset('video/historia_1.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                {{-- <iframe width="100%" height="500px" src="{{ asset('video/historia_2.mp4') }}"></iframe> --}}
                                <video width="100%" height="500" controls>
                                    <source width="100%" src="{{ asset('video/historia_2.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-justify">
                    <p>En el tiempo antiguo salieron de un chicomoxtoc que en la lengua española quiere decir siete cabeceras, cinco señores principales llamados Xelhuanhuetzin Sichitexictla y con ellos una mujer llamada Ahuacoatle a quien ellos adoraban y reconocían por su diosa, de quien entendían valerse en sus tribulaciones y aflicciones y en sus batallas, suertes y casos buenos, la diosa era sobre todos los demás ídolos que tenían, los cuáles no van especificados por ser tantos, sin número, porque sobre un caso por pequeño que fuese alzaban un dios y le ponían el nombre que querían, estos cinco señores eran todos tan queridos de los mazehuales en igual, que ninguno de ellos se conocían ventaja, tanto que no sabían a cuál de ellos se diese la gobernación en que ordenaron que entre ellos lo dejasen a la suerte y al que le cupiese que aquel quedase por un gobernador, porque era tanto el señorío de ellos, que no sabían los mazehuales a quien lo darían y así estando todos en este acuerdo echadas las suertes entre ellos, salió por su gobernador y cabeza de ellos el Xelhuan y por tal fue elegido y alzado por ellos y al tiempo que lo reconocieron y alzaron por su rey y señor le echaron al cuello muchas joyas y piedras ricas todas de diferentes colores y ensartadas y puestas al cuello a manera de cadena, que es lo que ellos llaman Cuzcate, de donde resultó y quedó el nombre del dicho pueblo Cuzcatlán.</p>
                    <p></p>
                </div>
                <div class="col-lg-12 text-justify">
                    <p>Actualmente se escribe este nombre con X pero su pronunciación y su etimología nos lo indican. Es indudable que sus aborígenes pertenecieron a la raza Popoloca y esta creencia es de asegurarse, tanto porque el pueblo está en la zona que ocupó aquella desconocida y antiquísima raza, consta que en su jurisdicción se hablaba en dicho año (1580) sin decir en que pueblo, el idioma chuchón o sea Popoloca. El señorío de Cuzcatlán fue muy rico e importante en la época precortesiana. Parece que por el siglo XIV o XV el cacicazgo o señorío del pueblo era tan extenso que llegaba hasta Mazateopan y tan importante que en su censo se calcula en 40000 habitantes.</p>
                </div>
                <div class="col-lg-6 text-justify">
                    <p>Cuando Hernán Cortés llegó a Tenochtitlán se tuvo luego noticia de su arribo en Cozcatlán y en todos los pueblos del rumbo, con las exageraciones siguientes respecto de las poderosas armas que traían y de unos grandes animales que montaban y manejaban a su arbitrio los españoles, así como de las intenciones de someter a Moctezuma y demás imperios del Anahuac al dominio de Carlos V; ya sea por temor a las armas castellanas o por odio a Moctezuma de quien eran tributarios, por una u otra causa, con el señor de Coxcatlán y el de Tehuacán fue a ver a Hernán Cortés cuando se hallaba en Tepeaca, después de la derrota que le infringió Cuitláhuac y le ofreció vasallaje en el año de 1520, llevándolo en un cajón con "gran cantidad de oro y piedras preciosas".</p>
                    <p>Se han realizado estudios arqueológicos que confirman la existencia de comunidades aldeanas dedicadas a la Agricultura hace 3000 años a.C.</p>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/history/history_1.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/history/history_2.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/history/history_3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/history/history_4.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail border-0 p-0 d-block">
                                <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/history/history_5.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="col-md-12 text-center mt-5">Imágenes históricas</h4>
        <div class="col-lg-12">
            <div class="masonry-loader masonry-loader-showing">
                <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_6.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Seis</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_7.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Siete</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_8.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Ocho</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_9.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Nueve</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_10.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">10</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_11.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Once</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/history_12.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Doce</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="masonry-item">
                        <a href="portfolio-single-wide-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('img/history/rupestre.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Pestre</span>
                                        <span class="thumb-info-type">Ver completa</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection