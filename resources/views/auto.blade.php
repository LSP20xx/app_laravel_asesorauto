@extends('layouts.app')

@section('content')

<!--Breadcrumb Start-->
<div class="breadcrumb-area style-03" style="background: url('/public/assets/img/breadcrumb/04.png')">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1 class="page-title">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion}}</h1>
                <ul class="page-list">
                    <li><a href="/">Home</a></li>
                    <li>Detalle</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->

<!--Product Details Tab-->
<div class="product-details-tab padding-top-120 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="Product-tab-big">
                    <div class="product-tab-big-active">
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                        </div>
                        <!--// Single Item-->
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_2 }}" alt="img">
                        </div>
                        <!--// Single Item-->
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_3 }}" alt="img">
                        </div>
                        <!--// Single Item-->
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_4 }}" alt="img">
                        </div>
                        @if($auto->imagen_5 != null)
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_5 }}" alt="img">
                        </div>
                        @endif
                        @if($auto->imagen_6 != null)
                        <div class="product-tab-single-big-item">
                            <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_6 }}" alt="img">
                        </div>
                        @endif
                    </div>
                    <!--Slider Active Class-->
                </div>
                <!--// Product Tab Big-->

                <div class="Product-tab-small-active padding-top-30">
                    <div class="product-tab-single-small-item" data-slide-index="0">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                    </div>
                    <!--// Single Item-->
                    <div class="product-tab-single-small-item" data-slide-index="1">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_2 }}" alt="img">
                    </div>
                    <!--// Single Item-->
                    <div class="product-tab-single-small-item" data-slide-index="2">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_3 }}" alt="img">
                    </div>
                    <!--// Single Item-->

                    <!--// Single Item-->
                    <div class="product-tab-single-small-item" data-slide-index="3">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_4 }}" alt="img">
                    </div>
                    @if($auto->imagen_5 != null)
                    <div class="product-tab-single-small-item" data-slide-index="4">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_5 }}" alt="img">
                    </div>
                    @else
                    <div class="product-tab-single-small-item" data-slide-index="4">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                    </div>
                    @endif

                    @if($auto->imagen_6 != null)
                    <div class="product-tab-single-small-item" data-slide-index="5">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_6 }}" alt="img">
                    </div>
                    @else
                    <div class="product-tab-single-small-item" data-slide-index="5">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_2 }}" alt="img">
                    </div>
                    @endif
                    <!--// Single Item-->
                    <div class="product-tab-single-small-item" data-slide-index="6">
                        <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                    </div>
                    <!--// Single Item-->

                </div>
                <!--// Slider Active Class-->

            </div>

            <div class="col-lg-5">
                <!--Product Description-->
                <div class="product-description pl-lg-4">
                    <h4 class="title">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion .' '.$auto->anio }} </h4>
                    <h3><b>{{ $auto->descripcion }}</b></h3>
                    <!--// Title-->
                    <div class="common-price-style">
                        Precio: <span class="black">{{ $auto->moneda}} {{ number_format($auto->precio, 2, ',', '.') }}</span>
                    </div>
                    <!--// Price-->
                    <hr>
                    <!--// Color List-->

                    <div class="car-assets">
                        <div class="row">
                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-speedometer"></i></div>
                                <div class="content">
                                    <div class="sub-title">Kilometraje</div>
                                    <h5 class="title">{{ $auto->kilometraje }} kms</h5>
                                </div>
                            </div>

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-engine"></i></div>
                                <div class="content">
                                    <div class="sub-title">Combustible</div>
                                    <h5 class="title">{{ $auto->tipo_combustible->descripcion }}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-car"></i></div>
                                <div class="content">
                                    <div class="sub-title">Condición </div>
                                    <h5 class="title">{{ $auto->es_usado = 1 ?  'Usado' : 'Nuevo' }}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->

                            <div class="car-assets-item">
                                <div class="icon"><i class="flaticon-painting"></i></div>
                                <div class="content">
                                    <div class="sub-title">Color </div>
                                    <h5 class="title">{{ $auto->color }}</h5>
                                </div>
                            </div>
                            <!--// car assets item-->
                        </div>

                        <!--// car assets item-->
                    </div>
                    <!--// Car Assets-->

                    <div class="cart-wrap padding-top-15 padding-bottom-30">
                        <div class="main-btn-wrap">
                            <a href="/consultar/{{ $auto->id }}" class="main-btn"><i class="flaticon-shopping-cart"></i> Consultar por este automóvil</a>
                        </div>
                    </div>
                    <!--// Cart Wrap-->

                    <!--Product Information-->
                    <div class="product-information padding-bottom-100">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-overview">Equipamiento</a>
                            </li>
                        </ul>
                        <div class="tab-content description-tab-content">
                            <div class="tab-pane fade show active" id="pills-overview" role="tabpanel">
                                <div class="row">
                                    @php
                                    $contador = 0;
                                    @endphp
                                    @foreach($equipamiento as $equipo)
                                    @if(($contador % 2) == 0)
                                </div>
                                <div class="row">
                                    @endif
                                    <div class="col-lg-6">
                                        <ul class="name-of-type-wrap ">
                                            <li class="name-of-type">{{ $equipo->equipamiento->descripcion }}</li>
                                        </ul>
                                    </div>
                                    @if(($contador % 2) == 0)
                                    @php
                                    $contador = 0;
                                    @endphp
                                    @endif
                                    @php
                                    $contador = $contador + 1;
                                    @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Product Information-->

                </div>
                <!--// Product Description-->
            </div>

        </div>

    </div>
</div>
<!--// Product Details Tab-->

@endsection