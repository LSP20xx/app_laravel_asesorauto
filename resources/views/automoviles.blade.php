@extends('layouts.app')

@section('content')

<!--Breadcrumb Start-->
<div class="breadcrumb-area style-03" style="background: url('public/assets/img/breadcrumb/04.png')">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1 class="page-title">Automóviles</h1>
                <ul class="page-list">
                    <li><a href="/">Home</a></li>
                    <li>Automóviles</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->


<!--Blog Page Content-->
<div class="blog-page-content padding-top-120 padding-bottom-160">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Shop Page Grig View-->
                <div class="shop-page-grid-view">
                    <div class="product-filtering-area">
                        <div class="filter-left" id="btnContainer">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home-grid">
                                        <i class="ti ti-layout-grid2-alt"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#single-grid">
                                        <i class="ti ti-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-right">
                            <span class="sorting-text">Order por</span>
                            <div class="custom-select-box">
                                <select>
                                    <option value="ban">Más recientes</option>
                                    <option value="ban">Menos recientes </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--// Product Filtering Area-->

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-grid">

                            <div class="grid-list-wrapper padding-top-30">
                                <!-- Grid List Column-->
                                @foreach ($autos as $auto)
                                <div class="grid-list-column-item style-02">
                                    @if($auto->es_usado = 0)
                                    <span class="price-drop-tag">Nuevo</span>
                                    @endif
                                    <h5 class="title padding-top-30">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion}}</h5>
                                    <h6 class="sub-title">Año {{ $auto->anio}} | {{ $auto->kilometraje }} km </h6>
                                    <div class="thumb">
                                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                                    </div>
                                    <!--// Thumbnail-->
                                    <div class="price-wrap">
                                        <div class="price">
                                            <div class="common-price-style">
                                                <span class="black">{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="price-wrap">
                                        <div class="main-btn-wrap padding-top-10">
                                            @if($auto->vendido == 0)
                                            <a href="/auto/{{ $auto->id}}" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                                Ver en detalle
                                            </a>
                                            @else
                                            <span class="main-btn black-border" style="background-color: red !important;"><i class="flaticon-shopping-cart" style="color: #FFF !important"></i>
                                                <b style="color: #FFF !important"> Vendido !</b>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--// Price Wrap-->
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">{{ $auto->tipo_combustible->descripcion }}</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">Combustible</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">{{ $auto->color }}</div>
                                            <div class="icon flaticon-painting"></div>
                                            <div class="force">Color</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power"> {{ $auto->es_usado = 1 ?  'Usado' : 'Nuevo' }}</div>
                                            <div class="icon flaticon-car"></div>
                                            <div class="force">Condicion</div>
                                        </div>

                                    </div>
                                    <!--// Car Functional Wrap-->
                                </div>
                                <!--// Grid List Column-->
                                @endforeach

                            </div>
                            <!--// Grid List Wrapper-->
                        </div>

                        <div class="tab-pane fade" id="single-grid">
                            <div class="grid-list-wrapper padding-top-40">
                                <!-- list View Item-->
                                @foreach ($autos as $auto)
                                <div class="grid-list-column-item list-view style-02">
                                    @if($auto->es_usado = 0)
                                    <span class="price-drop-tag">Nuevo</span>
                                    @endif
                                    <div class="grid-list-column-item__wrap">
                                        <div class="thumb">
                                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                                        </div>
                                        <div class="grid-list-column-item__content">
                                            <h5 class="title">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion}}</h5>
                                            <h6 class="sub-title">Año {{ $auto->anio}} | {{ $auto->kilometraje }} km </h6>
                                            <div class="common-price-style">
                                                Precio: <span class="black">{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</span>
                                            </div>
                                            <div class="main-btn-wrap padding-top-20">
                                                <a href="/auto/{{ $auto->id}}" class="main-btn black-border"><i class="flaticon-shopping-cart"></i>
                                                    Ver en detalle
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="car-functional-wrap">
                                        <div class="car-functional-wrap__item">
                                            <div class="power">{{ $auto->tipo_combustible->descripcion }}</div>
                                            <div class="icon flaticon-fuel-station"></div>
                                            <div class="force">Combustible</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power">{{ $auto->color }}</div>
                                            <div class="icon flaticon-painting"></div>
                                            <div class="force">Color</div>
                                        </div>
                                        <div class="car-functional-wrap__item">
                                            <div class="power"> {{ $auto->es_usado = 1 ?  'Usado' : 'Nuevo' }}</div>
                                            <div class="icon flaticon-car"></div>
                                            <div class="force">Condicion</div>
                                        </div>
                                    </div>
                                    <!--// Car Functional Wrap-->

                                </div>
                                <!--// list View Item-->
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!--// Shop Page Grid View-->

                <!-- Pagination-->
                <div class="col-lg-12 margin-bottom-60">
                    {{ $autos->appends(request()->input())->links() }}
                </div>
                <!--// Pagination-->
            </div>


            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="widget widget_search blog-bg">
                        <form action="" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar" name="buscar">
                            </div>
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--// Search Widget -->

                    <div class="widget blog-bg">
                        <h5 class="widget-title border-bottom">Buscar por:</h5>
                        <form action="" class="contact-form needs-validation">
                        <div class="price-filter">
                            <div class="row padding-bottom-10">
                                <div class="col-lg-4">
                                    Marca
                                </div>
                                <div class="col-lg-8">
                                    <div class="custom-select-box">
                                        <select class="wide" name="marca">
                                            <option value="">Todas</option>
                                            @foreach ($marcas as $marca)
                                            <option value="{{ $marca->id}}">{{ $marca->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row padding-bottom-10">
                                <div class="col-lg-4">
                                    Precio
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Desde" name="precio_desde">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Hasta" name="precio_hasta">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    Año
                                </div>
                                <div class="col-lg-4">
                                    <div class="custom-select-box">
                                        <select name="anio_desde">
                                            @foreach ($anios as $anio)
                                            <option value="{{ $anio }}">{{ $anio }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="custom-select-box">
                                        <select name="anio_hasta">
                                            @php
                                            $anios = array_reverse($anios);
                                            @endphp
                                            @foreach ($anios as $anio)
                                            <option value="{{ $anio }}">{{ $anio }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="price-slider-amount">
                                <input type="submit" value="Filtrar" />
                            </div>
                        </div>
                        </form>
                    </div>
                    <!--// Price Filter widget-->

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
                    <!--// New Product Widget-->
                </div>

            </div>
        </div>
    </div>
    <!--// Container-->
</div>
<!--// Blog Page Content-->

@endsection