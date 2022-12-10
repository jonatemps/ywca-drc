@extends('master')

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/bbba.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Notre gallérie</span>
                                <h1>Plusieurs images dans notre gallérie</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Acceuil</a></li>
                                    <li class="active">Gallérie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->
        <!--Start Main project area style2-->
        <section class="main-project-area style2">
            <div class="container">
                <ul class="project-filter post-filter has-dynamic-filters-counter">
                    <li data-filter=".filter-item" class="active"><span class="filter-text">Toutes les images</span></li>
                    @foreach ($services as $service)

                    <li data-filter="{{'.'.$service->id}}"><span class="filter-text">{{$service->name}}</span></li>
                    @endforeach
                </ul>
                
                <div class="row filter-layout masonary-layout">
                    <!--Start single project item-->
                    @foreach ($photos as $photo)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 filter-item {{$photo->service->id}}">
                        <div class="single-project-style5">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{$photo->link}}" alt="{{$photo->description}}">
                                    {{-- <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="project-single.html"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="title">
                                <span>{{$photo->service->name}}</span>
                                <h3><a href="project-single.html">{{$photo->description}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single project item-->
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <ul class="post-pagination martop20 text-center">
                            <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
                {!!$photos->links()!!}
            </div>
        </section>
        <!--End Main project area style2-->

@endsection
