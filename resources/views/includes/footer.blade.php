<footer class="footer-area style-02" style="background-image: url('/public/assets/img/bg/footer-bg.png');">
    <div class="footer-top ">
        <div class="container">
            <div class="row">
                <div class="footer-subscribe-area">
                    <h4 class="title">Suscribite a nuestro Newsletter y obtené todas nuestras novedades</h4>
                    <div class="subscribe-area">
                        <form action="/contacto" class="contact-form needs-validation" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Ingresá tu e-mail" required>
                                <input type="hidden" name="tipo" value="newsletter">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <input type="submit" value="Suscribirme">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row padding-top-125 padding-bottom-45">
                <div class="col-lg-4 col-md-6 px-lg-0">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="index.html" class="footer-logo"> <img src="/public/assets/img/logo-asesorauto.png" alt="footer logo"></a>
                            <p>Brindamos un servicio personalizado de excelencia a nuestros Clientes, referido a la publicación y presentación de automóviles para la Compra y/o Venta.</p>

                            <div class="footer-social-icon padding-top-10">
                                <div class="banner__header__follow_us">
                                    <div class="text">SEGUINOS</div>
                                    <div class="banner__header__icon">
                                        <ul>
                                            <li><a class="icon" href="https://www.facebook.com/asesorautos" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="icon" href="https://twitter.com/AsesorautosF" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="icon" href="https://www.instagram.com/asesorautos_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a class="icon" href="https://www.linkedin.com/company/asesorautos/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 px-lg-0">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">Asesor Autos</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Automoviles</a></li>
                            <li><a href="#">Novedades</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 px-lg-0">
                    <div class="footer-widget widget widget_nav_menu">
                        <h5 class="widget-title">La Empresa</h5>
                        <ul>
                            <li><a href="#">Quienes Somos</a></li>
                            <li><a href="#">Nuestra Misión</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Términos y Condiciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-0">
                    <div class="footer-widget widget">
                        <h5 class="widget-title">Contacto</h5>
                        <div class="contact-area">
                            <ul>
                                <li><i class="icon flaticon-email"></i><a href="mailto:fabio@asesorautos.com.ar">fabio@asesorautos.com.ar</a></li>
                                <li><i class="icon flaticon-call-answer"></i><a href="#">15 6788 7877</a></li>
                                <li><i class="icon flaticon-global"></i><a href="#">www.asesorautos.com.ar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        &copy; Asesorautos 2020 All rights reserved. Powered with <span class="coypright-icon"><i class="fas fa-heart"></i></span> by
                        <a href="http://grfl.com.ar" target="_blank">GRFL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>