@extends('master')


@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(images/resources/aaaaa.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>A propos du<br> YWCA-DRC.</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active">Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Company Overview Area-->
        <section class="company-overview-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-box clearfix">
                            <div class="sec-title">
                                <p>A propos de nous.</p>
                                <div class="title">En savoir plus<br> <span>sur nous. </span></div>
                            </div>
                            <div class="text">
                                <p>La YWCA-DRC a pour mission de promouvoir le leadership et le développement du pouvoir collectif des femmes et des jeunes filles en République Démocratique du Congo en vue d’assurer durablement l’éducation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="history-content-box clearfix">
                            <div class="history-carousel owl-carousel owl-theme">
                                <!--Start Single History Content-->
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="images/proprio/20220628_120617.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>Objet 1</h3>
                                            </div>
                                            <div class="title">
                                                <h3>Nous unissons<br> les jeunes filles et les femmes</h3>
                                            </div>
                                            <div class="text">
                                                <p>Unir les jeunes filles et les femmes de toute origine qui croient en Jésus Christ en une communauté où elles apprendront à toujours mieux connaitre l’amour de Dieu tel que révélé en son fils Jésus-Christ et à prendre conscience de leur responsabilité.</p>
                                                {{-- <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Content-->
                                <!--Start Single History Content-->
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="images/proprio/IMG_20210930_115647_730.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>Objet 2</h3>
                                            </div>
                                            <div class="title">
                                                <h3>Nous Contribuons à l’autonomisation des femmes</h3>
                                            </div>
                                            <div class="text">
                                                <p>Contribuer à l’autonomisation des femmes à travers la création des groupements et des foyers sociaux d’éducation et de formation, des coopérations et des centres de pris en charge psycho-médicale.</p>
                                                {{-- <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Content-->
                                <!--Start Single History Content-->
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="images/proprio/20220628_125808.jpg" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>Object 3</h3>
                                            </div>
                                            <div class="title">
                                                <h3>Nous Œuvrons pour le respect et la promotion des droits humains</h3>
                                            </div>
                                            <div class="text">
                                                <p>Œuvrer pour le respect et la promotion des droits humains visant la dignité de la femme et de la fille congolaise et sa réintégration ainsi que celle de toute la communauté.</p>
                                                {{-- <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Content-->
                                <!--Start Single History Content-->

                                <!--End Single History Content-->
                                <!--Start Single History Content-->

                                <!--End Single History Content-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fact-counter">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="{{date("Y",time()) - 2018}}" data-speed="5000" data-refresh-interval="50">{{date("Y",time()) - 2018}}</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Année<br> d'Experience</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="5" data-speed="5000" data-refresh-interval="50">5</span>
                                    <img src="images/icon/k.png" alt="">
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Projets<br> réalisés</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="104" data-speed="5000" data-refresh-interval="50">24</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Nos<br> Membres</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="47" data-speed="5000" data-refresh-interval="50">47</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Projets<br> en cours</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>

            </div>
        </section>
        <!--End Company Overview Area-->


        <!--Start Team Area-->
        <section class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>Notre équipe</p>
                            <div class="title"><span>Un groupe</span> de valeur </div>
                        </div>
                        {{-- <div class="view-all-member style2 float-right">
                            <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a>
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/v2-1.jpg" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                {{-- <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="name text-center">
                                <p><span>CEO & Founder</span></p>
                                <h3>Alison Fletcher</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/v2-2.jpg" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                {{-- <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="name text-center">
                                <p><span>Designer</span></p>
                                <h3>Joe Wilson</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/v2-3.jpg" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                {{-- <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="name text-center">
                                <p><span>Architect</span></p>
                                <h3>White Grey</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="images/team/v2-4.jpg" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                                {{-- <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="name text-center">
                                <p><span>Manager</span></p>
                                <h3>Kevin Smith</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                </div>
            </div>
        </section>
        <!--End Team Area-->

        <!--Start Brand area style2-->
        <section class="brand-area style2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul>
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <a href="#"><img src="images/brand/6.png" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>Miesian</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand area style2-->


@endsection
