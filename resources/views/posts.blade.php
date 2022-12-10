@extends('master')

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/bbba.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Notre Blog</span>
                                <h1>La (r)évolution de la communication</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Acceuil</a></li>
                                    <li class="active">Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start blog area-->
        <section id="blog-area" class="blog-large-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <!--Start Single blog Post style4-->
                            @foreach ($posts as $post)
                            <div class="single-blog-post style4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{$post->image}}" alt="Awesome Image">
                                    {{-- <div class="overlay-style-two"></div> --}}
                                    {{-- <div class="overlay">
                                        <div class="box">
                                            <div class="link-icon">
                                                <a href="{{route('post',['title' =])}}"><span class="icon-link1"></span></a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="{{route('post',['title' => $post->title,'id' => $post->id])}}">{{$post->title}}</a></h3>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>Par <a href="#">{{$post->user->name}}</a></li>
                                            <li>On <a href="#">{{$post->created_at}}</a></li>
                                            <li>Catégorie <a href="#">{{$post->category->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p>{!! nl2br(substr($post->content,0,230)).' ...' !!}</p>
                                    </div>
                                    <div class="button">
                                        <a class="btn-one" href="{{route('post',['title' => $post->title,'id' => $post->id])}}">Lire Plus<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--End Single blog Post style4-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="post-pagination text-center">
                                    {{-- <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul> --}}
                            {!!$posts->links()!!}

                            </div>

                        </div>
                    </div>

                    <!--Start sidebar Wrapper-->
                    <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-search-box">
                                <form class="search-form" action="#">
                                    <input placeholder="Your Keyword..." type="text">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!--Start single sidebar-->
                            <div class="single-sidebar categories-box">
                                <div class="sidebar-title">
                                    <div class="title">Categories</div>
                                </div>
                                <ul class="categories clearfix">
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{$category->name}}<sup>{{($category->posts->count())}}</sup></a></li>

                                    @endforeach
                                </ul>
                            </div>
                            <!--End single sidebar-->
                            <!--Start single sidebar-->
                            <div class="single-sidebar">
                                <div class="sidebar-title">
                                    <div class="title">Articles Récents</div>
                                </div>
                                <ul class="recent-post">
                                    @foreach ($recentsPosts as $post)
                                    <li>
                                        <div class="img-holder">
                                            <img src="{{$post->image}}" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{route('post')}}"><span class="icon-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <span>{{$post->created_at}}</span>
                                            <h5 class="post-title"><a href="{{route('post')}}">{{$post->title}}</a></h5>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--End single sidebar-->
                            <!--Start single sidebar-->
                            <div class="single-sidebar categories-box">
                                <div class="sidebar-title">
                                    <div class="title">Archives</div>
                                </div>
                                <div class="archives-form-box">
                                    <form name="archives_form" class="default-form" action="#" method="post">
                                        <div class="input-box">
                                            <select class="selectmenu">
                                        <option selected="selected">November 2018</option>
                                        <option>January 2018</option>
                                        <option>March 2017</option>
                                        <option>June 2018</option>
                                        <option>July 2018</option>
                                        <option>August 2019</option>
                                        <option>Febury 2019</option>
                                    </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--End single sidebar-->
                            <!--Start single-sidebar-->
                            {{-- <div class="single-sidebar">
                                <div class="sidebar-title">
                                    <div class="title">Instagram Feed</div>
                                </div>
                                <ul class="instagram">
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-1.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{route('post')}}"><span class="icon-heart"></span>1k</a>
                                                        <a href="{{route('post')}}"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-2.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{route('post')}}"><span class="icon-heart"></span>1k</a>
                                                        <a href="{{route('post')}}"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-3.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{route('post')}}"><span class="icon-heart"></span>1k</a>
                                                        <a href="{{route('post')}}"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-4.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{route('post')}}"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-5.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/sidebar/instagram-6.jpg" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="follow-us-button">
                                    <a class="btn-two" href="#">Follow On Instagram<span class="flaticon-next"></span></a>
                                </div>
                            </div> --}}
                            <!--End single-sidebar-->
                            <!--Start single-sidebar-->
                            {{-- <div class="single-sidebar tag-box clerfix">
                                <div class="sidebar-title">
                                    <div class="title">Tags</div>
                                </div>
                                <ul class="popular-tag clearfix">
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Building</a></li>
                                    <li><a href="#">Commercial</a></li>
                                    <li><a href="#">Color</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Exterior</a></li>
                                    <li><a href="#">Fabric</a></li>
                                    <li><a href="#">Ideas</a></li>
                                    <li><a href="#">Interior</a></li>
                                    <li><a href="#">Lights</a></li>
                                    <li><a href="#">Minimalist</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Traditional</a></li>
                                    <li><a href="#">Wall Painting</a></li>
                                </ul>
                            </div> --}}
                            <!--End single-sidebar-->
                        </div>
                    </div>
                    <!--End Sidebar Wrapper-->

                </div>
            </div>
        </section>
        <!--End blog area-->

@endsection
