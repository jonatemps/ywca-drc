@extends('master')

@section('title')
{{'YWCA-DRC | Article | '.$post->title}}
@endsection

@section('content')



        <!--Start Single Post Info Area-->
        <section class="single-post-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-post-info-content text-center">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>Par <a href="#">{{$post->user->name}}</a></li>
                                    <li>On <a href="#">{{$post->created_at}}</a></li>
                                    <li>Catégorie <a href="#">{{$post->category->name}}</a></li>
                                </ul>
                            </div>
                            <h1 class="blog-title">{{$post->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Single Post Info Area-->

        <!--Start blog single area-->
        <section id="blog-area" class="blog-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <div class="single-blog-post">
                                <div class="main-image-box">
                                    <img src="{{$post->image}}" alt="Awesome Image">
                                </div>
                                <div class="top-text-box">
                                    <p>{!! nl2br($post->content) !!}</p>
                                </div>


                                <div class="tag-with-social-links-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner-content clearfix">
                                                <div class="tag-box pull-left">
                                                    <p>Tags:</p>
                                                    <ul>
                                                        @foreach ($categories as $category)
                                                        <li><a href="#">{{$category->name}},</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="social-links-box pull-right">
                                                    <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Nous joindre sur:</p>
                                                    <ul class="sociallinks fix">
                                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Start prev next option-->
                                <div class="blog-prev-next-option">
                                    @if (isset($prev_post->id))
                                    <div class="single prev">
                                        <div class="image-thumb">
                                            <img src="{{asset($prev_post->image)}}" alt="Image">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="link">
                                                        <a href="{{route('post',['title' => $prev_post->title,'id' => $prev_post->id])}}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Article Précedent</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3><a href="{{route('post',['title' => $prev_post->title,'id' => $prev_post->id])}}">{{$prev_post->title}}</a></h3>
                                        </div>
                                    </div>
                                    @endif
                                    @if (isset($next_post->id))
                                    <div class="single next">
                                        <div class="image-thumb">
                                            <img src="{{asset($next_post->image)}}" alt="Image">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="link">
                                                        <a href="{{route('post',['title' => $next_post->title,'id' => $next_post->id])}}">Article Suivant<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3><a href="{{route('post',['title' => $next_post->title,'id' => $next_post->id])}}">{{$next_post->title}}</a></h3>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!--End prev next option-->
                            </div>

                            <div class="author-box-holder">
                                <div class="inner-box">
                                    <div class="img-box">
                                        <img src="{{asset('images/blog/author.png')}}" alt="Awesome Image">
                                    </div>
                                    <div class="text">
                                        <h3>{{$post->user->name}}, <span>Auteur</span></h3>
                                        {{-- <p>Denouncing pleasure and praising pain was born and I will give you a complete all account of the system, and expound the actual teachings.</p> --}}
                                        {{-- <div class="author-social-links">
                                            <p>Follow On:</p>
                                            <ul class="fix">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="inner-comment-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-blog-title-box">
                                            <h2>Read Comments</h2>
                                        </div>
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images/blog/comment-1.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>Steven Rich</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Omnis iste natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optiocumque nihil impedit quo minus id quod maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box mar-left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images/blog/comment-2.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>William Cobus</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->
                                        <!--Start single comment outer box-->
                                        <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="single-comment-box">
                                                <div class="img-box">
                                                    <img src="images/blog/comment-3.png" alt="Awesome Image">
                                                </div>
                                                <div class="text-box">
                                                    <div class="top">
                                                        <div class="name">
                                                            <h3>Van Wimbilton</h3>
                                                            <span>March 10, 2019</span>
                                                        </div>
                                                        <div class="reply-button">
                                                            <a href="#"><span class="icon-reload"></span>Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>Natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single comment outer box-->

                                    </div>
                                </div>
                            </div> --}}
                            <!--Start add comment box-->
                            {{-- <div class="add-comment-box">
                                <div class="single-blog-title-box">
                                    <h2>Post a Comment</h2>
                                </div>
                                <form id="add-comment-form" action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="fname" value="" placeholder="Name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="comment" placeholder="Your Comments" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn-one" type="submit">Post a Comment<span class="flaticon-next"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                            <!--End add comment box-->

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
                                    <div class="title">Catégories</div>
                                </div>
                                <ul class="categories clearfix">
                                    @foreach ($categories as $category)
                                    <li><a href="#">{{$category->name}}<sup>{{'('.$category->posts->count().')'}}</sup></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--End single sidebar-->
                            <!--Start single sidebar-->
                            <div class="single-sidebar">
                                <div class="sidebar-title">
                                    <div class="title">Articles récents</div>
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
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
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
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
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
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
                                                        <a href="#"><span class="icon-comment"></span>84</a>
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
                                                        <a href="#"><span class="icon-heart"></span>1k</a>
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
        <!--End blog single area-->


@endsection
