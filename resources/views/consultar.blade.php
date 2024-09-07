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
                    </div>
                    <!--Slider Active Class-->
                </div>

            </div>

            <div class="col-lg-5">
                <!--Product Description-->
                <div class="product-description pl-lg-4">
                    <h4 class="title">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion .' '.$auto->anio }} </h4>
                    <h3><b>{{ $auto->descripcion }}</b></h3>
                    <!--// Title-->
                    <div class="common-price-style">
                        Precio: <span class="black">{{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</span>
                    </div>
                    <!--// Price-->
                    <hr>
                    <!--// Color List-->

                    <div class="car-assets">

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


                        <!--// car assets item-->
                    </div>
                    <!--// Car Assets-->

                </div>
                <!--// Product Description-->
                @if(!isset($enviado))
                <form action="" class="contact-form needs-validation" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" cols="30" rows="10" id="message" name="message">Estoy interesado en: {{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion.' '.$auto->descripcion.' '.$auto->anio }}&#13;&#10;&#13;&#10;</textarea>
                            </div>
                            <div class="cart-wrap padding-top-15 padding-bottom-30">
                                <div class="main-btn-wrap">
                                    <input class="main-btn" type="submit" value="Consultar">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @else
                <div class="product-description pl-lg-4">
                    <h4 class="title" style="color: var(--main-color-one)"><br>Gracias por contactarnos !<br><br> Su consulta sobre el {{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion .' '.$auto->anio }} fué enviada con éxito y la brevedad nos contactaremos con Ud. </h4>
                </div>
                @endif
            </div>

        </div>

    </div>
</div>
<!--// Product Details Tab-->

@endsection