<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AsesorAutos</title>

    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
    <!-- flaticon -->
    <link rel="stylesheet" href="public/assets/css/flaticon.css">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="public/assets/css/fontawesome.min.css">
    <!--Themefy Icons-->
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <!--Video Popup-->
    <link rel="stylesheet" href="public/assets/css/rpopup.min.css">
    <!--Slick Carousel-->
    <link rel="stylesheet" href="public/assets/css/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="public/assets/css/responsive.css">

    <style>
        @media only screen and (min-width: 768px) {
            .floatss {
                display: none;
            }
        }

        .floatss {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 130px;
            right: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .wasa {
            background-color: #25d366;
            color: #FFF;
            height: 40px;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            padding: 11px;
            font-size: 30px;
        }

        .my-floatss {
            margin-top: 16px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164608247-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164608247-1');
    </script>


</head>

<body>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=5491167887877" class="floatss" target="_blank">
        <i class="fa fa-whatsapp my-floatss"></i>
    </a>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="/automoviles" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar..." name="buscar">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- // search Popup -->

    <!--Sidebar Nav-->
    @include('includes.sidebar')
    <!--// Sidebar Nav-->

    <!--Open Menu Cart-->
    <!--// Open Menu Cart-->

    <!--location-popup-->

    <!--message-popup-->

    <!--Contact-popup-->


    <!--Full Width Sider Start-->
    <div class="full-width-slider">
        <!--Main Header Start-->
        @include('includes.header')
        <!--// Main Header End Here-->

        <!--Slider Area Start-->
        @include('includes.slider')
        <!--//Slider Area End-->
    </div>
    <!--// Full Width Sider End-->

    @include('includes.tabsection')

    <!--Featured Vehicles Section-->
    @include('includes.featuredvehicules')
    <!--// Featured Vehicles Section-->

    <!-- footer area start -->
    @include('includes.footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <img src="public/assets/img/back-to-top.png" alt="img"> </span>
    </div>
    <!-- back to top area end -->



    <!-- jquery -->
    <script src="public/assets/js/jquery-3.4.1.min.js"></script>
    <!--migrate-->
    <script src="public/assets/js/jquery-migrate.min.js"></script>
    <!-- bootstrap -->
    <script src="public/assets/js/bootstrap.min.js"></script>
    <!--Mean Menu-->
    <script src="public/assets/js/jquery.meanmenu.min.js"></script>
    <!-- waypoint -->
    <script src="public/assets/js/waypoints.min.js"></script>
    <!-- wow -->
    <script src="public/assets/js/wow.min.js"></script>
    <!--Slick Js-->
    <script src="public/assets/js/slick.min.js"></script>
    <!-- counterup -->
    <script src="public/assets/js/jQuery.rcounter.js"></script>
    <!--Custom Video Popup-->
    <script src="public/assets/js/jquery.rPopup.js"></script>
    <!--Nice Select-->
    <script src="public/assets/js/jquery.nice-select.min.js"></script>
    <!-- imageloaded -->
    <script src="public/assets/js/imagesloaded.pkgd.min.js"></script>
    <!--Google Map API-->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&callback=initMap"
        async defer></script> -->
    <!--Google Map Active-->
    <!-- <script src="public/assets/js/goolg-map-activate.js"></script> -->
    <!-- main js -->
    <script src="public/assets/js/main.js"></script>

    <script type="text/javascript">
        $("#marca_todos").change(function() {
            $.ajax({
                url: "{{ route('get_by_marca') }}?marca_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#modelo_todos').html(data.html);
                    $('#modelo_todos').niceSelect('update');
                }
            });
        });

        $("#marca_nuevos").change(function() {
            $.ajax({
                url: "{{ route('get_by_marca') }}?marca_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#modelo_nuevos').html(data.html);
                    $('#modelo_nuevos').niceSelect('update');
                }
            });
        });

        $("#marca_usados").change(function() {
            $.ajax({
                url: "{{ route('get_by_marca') }}?marca_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#modelo_usados').html(data.html);
                    $('#modelo_usados').niceSelect('update');
                }
            });
        });
    </script>

</body>

</html>