@extends('layouts.app')

@section('content')

<div class="breadcrumb-area" style="background-image: url('public/assets/img/breadcrumb/01.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Novedades</h1>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li>Novedades</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-page-content padding-top-120 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($autos as $auto)
                <!--Blog Single item-->
                <div class="blog-single-item margin-bottom-60">
                    <div class="row">
                        <div class="col-md-6 px-lg-0">
                            <div class="thumb-area-wrap">
                                <div class="thumb-area">
                                    <div class="thumb">
                                    <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                                    </div>
<!--                                     <div class="date">
                                        <span class="day">22</span>
                                        <span class="month">Dec</span>
                                    </div> -->
                                </div>
                            </div>
                            <!--// Thumbnail Area-->
                        </div>
                        <div class="col-md-6 px-lg-0">
                            <div class="content">
                                <h4 class="title"><a href="#">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion }} | {{ $auto->anio}}</a></h4>
                                <h3><a href="#">{{ $auto->descripcion }}</a></h4>
                                <div class="post-meta">
                                </div>
                                <div class="padding-30">
                                    <p>
                                        Condicion: <b>{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</b><br>
                                        Kilometraje: <b>{{ $auto->kilometraje }}</b><br>
                                        Tipo de Combustible: <b>{{ $auto->tipo_combustible->descripcion }}</b><br>
                                        Precio: <b>{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</b><br>
                                    </p>
                                </div>
                                <div class="read-more-area">
                                    <div class="read-more">
                                        <a href="/auto/{{ $auto->id }}">Ver en Detalle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Blog Single item-->
            @endforeach
            </div>

            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="widget widget_search blog-bg">
                        <form action="/automoviles" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar" name="buscar">
                            </div>
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--// Search Widget -->
                    <div class="widget blog-bg style-01">
                        <h5 class="widget-title border-bottom">Vehiculos Destacados</h5>
                        <ul class="recent_post_item">
                            @foreach($autos_destacados as $auto)
                            <li class="single-recent-post-item">
                                <a href="/auto/{{ $auto->id }}">
                                    <div class="thumb">
                                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="popular post">
                                    </div>
                                </a>
                                <div class="content">
                                    <h5 class="title"><a href="#">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion.' '.$auto->anio }}</a></h5>
                                    <div class="common-price-style">
                                        Precio: <span class="black">{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--// Recent Post Widget-->

                </div>

            </div>
        </div>
    </div>
    <!--// Container-->
</div>
<!--// Breadcrumb End-->
@endsection