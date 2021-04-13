@extends('index')
@section('content')
<div class="container">
    <div class="row py-5 my-5">
        <h3 class="col-md-12 text-primary mb-5">Las mazorcas más antiguas de Mesoamérica</h3>
        <div class="col-lg-6 mt-4">
            {{-- <h4 class="w-100 text-center mb-5"></h4> --}}
            <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/mazorca.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{ asset('img/investigacion.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-justify mt-4">
            <p>A pesar de que por mucho tiempo se pensó que sólo el municipio de Tehuacán era la cuna del maíz, por los rastros y evidencia de la domesticación del grano, investigaciones que realizaron el arqueólogo norteamericano Richard S MacNeish y un grupo multidisciplinario de estudiosos a través del Proyecto Arqueológico-Botánico Tehuacán, se pudo precisar que fue en varios municipios.</p>
            <p>Los restos fueron encontrados principalmente en cuevas entre los años 1960 y 1963 por Richard S MacNeish. Dentro de la investigación se establecieron fases del desarrollo cultural de este valle en las cuevas de El Riego, Coxcatlán, Abejas, Purrón, Ajalpan, Santa María, Palo Blanco y Venta Salada.</p>
            <p class="w-100">Estamos en el Valle de Tehuacán, específicamente en la cueva de Coxcatlán, donde en los años 60 Richard McNisch, un eminente arqueólogo norteamericano, hace el hallazgo más impresionante de los últimos años, la mazorca más antigua del mundo, de hace 7 mil años. En la cueva de  Coxcatlan.</p>
        </div>
        <div class="col-lg-6 text-justify">
            <p>El lugar de origen del maíz se ubica en el municipio de Coxcatlán, en el valle de Tehuacán, Estado de Puebla, en el centro de México. Este valle se caracteriza por la sequedad de su clima, con un promedio anual de lluvia muy reducido; alberga principalmente específicamente especies vegetales y animales propias de tierra caliente y seca. Las región  cuenta con numerosos endemismos, lo que la convierte un territorio "unico".</p>
            <p>El antropólogo estadounidense Richard Stokton MacNeish, encontró restos arqueológicos de plantas de maíz, que se estima datan de hace, aproximadamente, ocho milenios. indicios de los procesos que llevaron al pueblo nativo de este valle a dominar el cultico de este cereal, que hoy en día es de vital importancia para el mundo, Han sido encontrados en la cueva de Coxcatlán, Ajalpan y otros sitios de la zona.</p>
            <p>Esto fue posible gracias a la condiciones tan secas del clima de Tehuacán, que impidieron la descomposición de los xilote (maiz tierno) de los primeros maíces cultivados en la zona.</p>
        </div>
        <div class="col-lg-6">
            <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/mazorca_2.jpeg') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid carousel-img-md-2 border-radius-0" src="{{ asset('img/antiguos.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <p>Considerando que en esta zona estuvo el centro de la civilización Azteca, es lógico concluir que el maíz fue logro de esta cultura y fue parte importante de su alimentación y de su cultura. En las galerías de las algunas pirámides, es posible observar pinturas, grabados y esculturas que representan al maíz.</p>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{ asset('img/cueva.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center align-items-center justify-content-center d-flex">
            <div class="w-100">
                <h4 class="text-primary">Richard McNisch</h4>
                <p class="w-100">"En sus investigaciones arqueológicas y botánicas empieza investigando desde la Isla de Panick en el círculo polar ártico, cruzando Canadá, Estados Unidos, México, Centroamérica, Sudamérica, continúa en Escocia, continua en Europa, África, llega a China y finalmente llega a la conclusión de que el maíz más primitivo del  planeta se encontró aquí, en esta cueva de Coxcatlán"</p>
            </div>
        </div>
    </div>
</div>
@endsection