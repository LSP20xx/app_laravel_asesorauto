@extends('layouts.app')

@section('content')


<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('public/assets/img/contact/01.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Contactanos</h1>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li>Contactanos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->

<!--Cantact-->
<div class="contact-page padding-top-115 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="left-content">
                    <div class="section-title">
                        <h2 class="heading-02 padding-bottom-20">Estemos en contacto</h2>
                        <p><br />
                            <strong>Fabio Villavicencio</strong> - Director General<br />
                            <strong>Tel&eacute;fono: </strong>15 6788 7877<br />
                            <strong>E-mail:</strong> <a href="mailto:fabio@asesorautos.com.ar">fabio@asesorautos.com.ar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
            @if(!isset($enviado))
                <form action="" class="contact-form needs-validation" method="post">
                <input type="hidden" name="tipo" value="contacto">
                @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Telefono</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="subject">Asunto</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" cols="30" rows="10" id="message" name="message" required></textarea>
                            </div>
                            <div class="main-btn-wrap">
                                <input class="main-btn black" type="submit" value="Enviar">
                            </div>

                        </div>
                    </div>
                </form>
                @else
                    <h4 class="title" style="color: var(--main-color-one)"><br>Gracias por contactarnos !<br><br>{{ $respuesta }}</h4>
                @endif
            </div>
        </div>
    </div>
</div>
<!--// Cantact-->

@endsection