@extends('master')

@section('title')
{{'YWCA-DRC | Services'}}
@endsection

@section('content')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url({{asset('images/resources/bbba.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Nos Service</span>
                                <h1>Notre gamme de services</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Acceuil</a></li>
                                    <li class="active">Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start services style1 area-->
        <section class="services-style1-area">
            <div class="container">
                <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <p>Que Faisons-Nous</p>
                    <div class="title">Certains services <span>spéciaux</span></div>
                    <p class="bottom-text">Pour l’intérêt du genre féminin nous organisons des services de qualité favorisant son intégration dans la société.</p>
                </div>
                <div class="row">

                    @foreach ($services as $service)
                    @if ($service->name == 'Psychothérapie')

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-lamp"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Psychothérapie</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="count">
                                            <h1>01</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Psychothérapie</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Notre service de traitement par des moyens psychologiques.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif ($service->name == 'Sport, Art et Créativité')

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-guarantee-certificate1"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Sport, Art & Créativité</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-guarantee-certificate1"></span>
                                        </div>
                                        <div class="count">
                                            <h1>02</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Sport, Art & Créativité</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Les activités visant à promouvoir le sport, l’art et la créativité.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif ($service->name == 'Sensibilisation')

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-hr1"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Sensibilisation</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-hr1"></span>
                                        </div>
                                        <div class="count">
                                            <h1>03</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Sensibilisation</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Conscientiser la femme et la jeune fille pour les conduire à agir pour le propre bénéfice.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif ($service->name == 'Médical')
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-hr1"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Médical</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-hr1"></span>
                                        </div>
                                        <div class="count">
                                            <h1>04</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Médical</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Notre service d’actes thérapeutique visant le maintien de la santé parfaite du genre féminin.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($service->name == 'Juridique')
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-kitchen"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Juridique</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-kitchen"></span>
                                        </div>
                                        <div class="count">
                                            <h1>05</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Juridique</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Nos spécialistes du droit et des juristes mis à la disposition du genre féminin.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($service->name == 'Formation')
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-hr1"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Formation</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-hr1"></span>
                                        </div>
                                        <div class="count">
                                            <h1>06</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Formation</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href=""><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Nos activités d’apprentissage organisées pour augmenter les capacités du genre féminin.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href=""><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @endforeach

                    <!--End single service style1-->
                </div>
            </div>
        </section>
        <!--End services style1 area-->

@endsection
