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
                        <img class="img-fluid border-radius-0" src="{{ asset('img/mazorca.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <img class="img-fluid border-radius-0" src="{{ asset('img/investigacion.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-justify">
            <h4 class="text-success"></h4>
            <p class="w-100">En sus investigaciones arqueológicas y botánicas empieza investigando desde la Isla de Panick en el círculo polar ártico, cruzando Canadá, Estados Unidos, México, Centroamérica, Sudamérica, continúa en Escocia, continua en Europa, África, llega a China y finalmente llega a la conclusión de que el maíz más primitivo del  planeta se encontró aquí, en esta cueva de Cuaxcatlán</p>
        </div>
    </div>
</div>
@endsection