<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Home Two || Crystalo || Responsive HTML 5 Template</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images\proprio\icon.jpg')}}">
    <link rel="icon" type="image/png" href="{{asset('images\proprio\icon.jpg')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('images\proprio\icon.jpg')}}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>Nous avons des réponses</p>
                    <ul>
                        <li>+243 819813887</li>
                        <li>contact@ywca-drc.org</li>
                        <li>Lun - Ven: 9h00 à 16h00</li>
                    </ul>
                </div>
                <div class="top-style2-right">
                    <ul class="top-right-menu">
                        <li><a href="{{route('about')}}">A propos</a></li>
                        <li><a href="{{route('gallery')}}">Gallérie</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="{{route('home')}}">
                        {{-- <img src="images/resources/logo.png" alt="Awesome Logo"> --}}
                        {{-- <img src="images\proprio\cropped-LogoMitSchrift.png" alt="Awesome Logo" width="280"> --}}
                        <img src="{{asset('images\proprio\logo.png')}}" alt="Awesome Logo" width="250">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('home')}}">Accueil</a></li>
                                <li class="dropdown"><a href="#">A propos de nous</a>
                                    <ul>
                                        <li><a href="{{route('about')}}">A propos de YWCA DRC</a></li>
                                        <li><a href="{{route('faq')}}">FAQ’s</a></li>
                                        <li><a href="{{route('become.member')}}">Devenir membre</a></li>
                                        <li><a href="{{route('about.logo')}}">Notre logo</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        @foreach ($services as $service)
                                        <li><a href="{{route('service',['service' => $service->name])}}">{{$service->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('gallery')}}">Gallérie</a></li>
                                <li><a href="{{route('posts')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        {{-- <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div> --}}
                        {{-- <div class="cart-box">
                            <a href="shoping-cart.html"><span class="icon-bag"><span class="number">0</span></span></a>
                        </div> --}}
                        <div class="button">
                            <a class="btn-one" href="{{route('don')}}">Faire un don<span ></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->

        @yield('content')

        <!--Start footer area Style4-->
        <footer class="footer-area style4">
            <div class="container">
                <div class="row">
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-widget marbtm50-s4">
                            <div class="our-info-box">
                                <div class="footer-logo">
                                    <a href="index-2.html">
                                        <img src="{{asset('images/footer/footer-logo.png')}}" alt="Awesome Logo">
                                    </a>
                                </div>
                                <div class="text">
                                    <p>Unir les jeunes filles et les femmes de toute origine qui croient en Jésus Christ en une communauté où elles apprendront à toujours mieux connaitre l’amour de Dieu tel que révélé en son fils Jésus-Christ et à prendre conscience de leur responsabilité.</p>
                                </div>
                                <div class="follow-us-social-links clearfix">
                                    <span>Suivez-nous sur:</span>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                        <div class="single-footer-widget s4">
                            <div class="title-style2">
                                <h3>Liens utiles</h3>
                            </div>
                            <div class="usefull-links">
                                <ul class="float-left">
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li><a href="{{route('service')}}">Services</a></li>
                                    <li><a href="{{route('about')}}">A propos</a></li>
                                    <li><a href="{{route('faq')}}">FAQ's</a></li>
                                </ul>
                                <ul class="float-left borders-left">
                                    <li><a href="{{route('gallery')}}">Gallérie</a></li>
                                    <li><a href="{{route('posts')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                        <div class="single-footer-widget pdtop50-s4">
                            <div class="title-style2">
                                <h3>NEWSLETTER</h3>
                            </div>
                            <div class="subscribe-box">
                                <form class="subscribe-form" action="#">
                                    <input type="email" name="email" placeholder="Votre Email">
                                    <button class="btn-one" type="submit">Souscrire<span class="flaticon-next"></span></button>
                                </form>
                                <div class="text">
                                    <p><span>*</span>Souscrivez pour recevoir nos récentes nouvelles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </footer>
        <!--End footer area style4-->

        <!--Start Footer Contact Info Area-->
        <section class="footer-contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="footer-contact-info clearfix">
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-global"></span>
                                        </div>
                                        <div class="text">
                                            <p>N° 02 Av. Mercure Q. Résidentiel <br> C. Limete-Kinshasa</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-support1"></span>
                                        </div>
                                        <div class="text">
                                            <p>+243 819813887<br>+243 812700501<br> <span>Lun - ven :</span> 9h00—16h00</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-shipping-and-delivery"></span>
                                        </div>
                                        <div class="text">
                                            <p>contact@ywca-drc.org<br> ywcardc@yahoo.fr</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Footer Contact Info Area-->

        <!--Start footer bottom area-->
        <section class="footer-bottom-area style3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright-text text-center">
                            <p><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End footer bottom area-->

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appear.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/isotope.js')}}"></script>
    <script src="{{asset('js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/jquery.enllax.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    <!---
<script src="js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/mapapi.js"></script>
--->
    <script src="{{asset('js/map-helper.js')}}"></script>

    <script src="{{asset('assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('assets/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('assets/html5lightbox/html5lightbox.js')}}"></script>

    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>

    <!-- thm custom script -->
    <script src="{{asset('js/custom.js')}}"></script>



</body>


<!-- index-2 06:43:55 GMT -->
</html>
