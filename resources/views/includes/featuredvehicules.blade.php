<section class="featured-vehicles-section padding-top-110 padding-bottom-160">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 px-0">
                <!--Section Title-->
                <div class="section-title text-center">
                    <div class="padding-bottom-15">
                        <h6 class="title both-line uppercase gray"> Mirá nuestros vehiculos destacados </h6>
                    </div>
                    <h2 class="heading-02 padding-bottom-70">Vehiculos Destacados</h2>
                </div>
                <!--// Section Title End-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-vehicle-slider">
                    <div class="vehicle-slider-active">
                        @foreach($autos as $auto)
                        <!--Home 02 Vehicle Slider items-->
                        <div class="h2-vehicle-slider-items">
                            <div class="items-head">
                                <img src="/public/assets/img/autos/{{ $auto->id }}/{{ $auto->imagen_1 }}" alt="img">
                            </div>
                            <div class="items-body">
                                <h5 class="heading-05">{{ $auto->modelo->marca->descripcion.' '.$auto->modelo->descripcion }} | {{ $auto->moneda}} {{ number_format($auto->precio, 0, ',', '.') }}</h5>
                                <h5 class="heading-06">{{ $auto->descripcion }}</h5>
                                <ul class="list-items-wrap">
                                    <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                            Año:</span> {{ $auto->anio }} </li>
                                    <li class="list-items"> <i class="flaticon-painting"></i><span class="title">
                                            Color:</span> {{ $auto->color }} </li>
                                    <li class="list-items"> <i class="flaticon-fuel-station"></i><span class="title"> Combustible: </span> {{ $auto->tipo_combustible->descripcion }} </li>
                                </ul>
                            </div>
                            <div class="main-btn-wrap text-center">
                                @if($auto->vendido == 0)
                                <a href="/auto/{{ $auto->id }}" class="main-btn gray-border uppercase">VER EN DETALLE</a>
                                @else
                                <span class="main-btn black-border" style="background-color: red !important;"><i class="flaticon-shopping-cart" style="color: #FFF !important"></i>
                                    <b style="color: #FFF !important"> VENDIDO !</b>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!--//Home 02 Vehicle Slider items-->
                        @endforeach
                    </div>
                    <!--// Slider Active -->
                </div>
                <!--// Featured Vehicle Slider-->

            </div>
        </div>
        <!--// Row-->
    </div>
    <!--Container Fluid-->

</section>