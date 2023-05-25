@extends('master')

@section('title')
{{'YWCA-DRC | Service | '.$service->name}}
@endsection

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url({{asset('images/resources/bbba.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Notre Service</span>
                                <h1>Le service {{$service->name}}</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Acceuil</a></li>
                                    <li class="active">Service</li>
                                    <li class="active">{{$service->name}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Project Description area-->
        <section class="project-description-area">
            <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="{{asset('images/pattern/project-description-pattern.jpg')}}" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="project-description-image-box">
                            <img src="{{$service->image_one}}" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="project-description-content">
                            <div class="sec-title">
                                <p>Description</p>
                                <div class="title">Le service {{$service->name}}</div>
                            </div>
                            <div class="inner-content">
                                {{-- <p>Idea of denouncing pleasures and praising pain was born will give you a com-pleted account system, and expound the actual teachings of the great explorer of the truth, the master builder of human happiness. No one rejects,
                                    dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                <div class="bottpm-text">
                                    <p>Because those who do not know how pursue, Complete account that all system, expound the actual teachings of the great explorer of the truth,</p>
                                </div>
                                <ul>
                                    <li>Nam libero tempore, cum soluta</li>
                                    <li>Est eligendi optio cumque nihil impedit quo</li>
                                    <li>Omnis dolor repellendus temporibus autem </li>
                                </ul> --}}

                                {{-- {!! $service->description !!} --}}
                                {!! nl2br($service->description) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Description area-->

        <!--Start Video Image Holder Area-->
        <section class="video-image-holder-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="video-holder-box">
                            <div class="img-holder">
                                <img src="{{$service->image_one}}" alt="Awesome Image">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <div class="inner text-center">
                                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="YWCA-DRC Vidéo" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-project-image-gallery">
                            <img src="{{$service->image_two}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video Image Gallery Area-->

        <!--Start Similar projects Area-->
        <section class="similar-projects-area">
            <div class="container-fluid similar-projects-content">
                <div class="similar-project-title text-center">
                    @if ($photos->count())
                    <h2>Photos du services</h2>
                    @endif

                </div>
                <div class="row">
                    <!--Start Single Similar Project-->
                    @foreach ($photos as $photo)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-similar-project">
                            <div class="img-holder">
                                <img src="{{$photo->link}}" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <span>{{$photo->description}}</span>
                                {{-- <h3><a href="#">{{$photo->description}}</a></h3> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End Single Similar Project-->

                </div>
            </div>
        </section>
        <!--End Similar projects Area-->

@endsection
