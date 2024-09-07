<!--Tab Section-->
<div class="home-02_tab-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-wrapper">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-car" data-toggle="tab" href="#newcar" role="tab">Nuevos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="use-car" data-toggle="tab" href="#usecar" role="tab">Usados</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <form action="/automoviles" class="contact-form needs-validation">
                                <div class="select-box-wrap">
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="marca" id="marca_todos">
                                                <option selected> MARCA </option>
                                                @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="modelo" id="modelo_todos">
                                                <option selected value=""> MODELO </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="main-btn-wrap text-center">
                                            <input class="main-btn" type="submit" value="BUSCAR AUTOS">
                                        </div>
                                    </div>
                                    <!--// Items-->
                                </div>
                            </form>
                            <!--// Select Box Wrap-->
                        </div>
                        <div class="tab-pane fade" id="newcar" role="tabpanel" aria-labelledby="new-car">
                            <form action="/automoviles" class="contact-form needs-validation">
                                <input type="hidden" name="condicion" value="nuevo">
                                <div class="select-box-wrap">
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="marca" id="marca_nuevos">
                                                <option selected> MARCA </option>
                                                @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="modelo" id="modelo_nuevos">
                                                <option selected value=""> MODELO </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="main-btn-wrap text-center">
                                            <input class="main-btn" type="submit" value="BUSCAR AUTOS">
                                        </div>
                                    </div>
                                    <!--// Items-->
                                </div>
                            </form>
                            <!--// Select Box Wrap-->
                        </div>
                        <div class="tab-pane fade" id="usecar" role="tabpanel" aria-labelledby="use-car">
                            <form action="/automoviles" class="contact-form needs-validation">
                                <input type="hidden" name="condicion" value="usado">
                                <div class="select-box-wrap">
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="marca" id="marca_usados">
                                                <option value="" selected> MARCAS </option>
                                                @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="custom-select-box">
                                            <select name="modelo" id="modelo_usados">
                                                <option selected value=""> MODELO </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--// Items-->
                                    <div class="items">
                                        <div class="main-btn-wrap text-center">
                                            <input class="main-btn" type="submit" value="BUSCAR AUTOS">
                                        </div>
                                    </div>
                                    <!--// Items-->
                                </div>
                            </form>

                            <!--// Select Box Wrap-->
                        </div>
                    </div>
                </div>
                <!--// Tab Wrapper-->
            </div>
        </div>
        <!--// Row-->
    </div>
    <!--// Container-->
</div>
<!--// Tab Section-->