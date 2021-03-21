
@include('templates.head')
@include('templates.preloader')
<div class="body">
    @include('templates.header')
    <div role="main" class="main">
        @yield('content')
    </div>
    @include('templates.footer')
</div>
@include('templates.foot')