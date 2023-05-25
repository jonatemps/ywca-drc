@extends('master')

@section('title')
{{'YWCA-DRC | Devenir membre'}}
@endsection

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/bbba.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Membre</span>
                                <h1>Devenir l'un de nous</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li class="active">Devenir membre</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


<!--Start Contact details Area-->
<section class="contact-details-area">
    <div class="sec-title text-center">
        <p>Membre</p>
        <div class="title">Comment devenir <span>Notre ?</span></div>
    </div>
    <div class="parallax-background" style="background-image:url(images/parallax-background/contact-details-bg.html);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="contact-details-content">

                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="content-info-box" style="background-image:url(images/parallax-background/contact-info-box-bg.jpg);">
                                <div class="inner-content">
                                    <div class="inner">
                                        <div class="single-info-box wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                                            <div class="icon">
                                                <span class="icon-global"></span>
                                            </div>
                                            <div class="text">
                                                <h3>Visitez notre bureau</h3>
                                                <p>Flat A, 20/7, Reynolds Neck Str, North Helenaville</p>
                                            </div>
                                        </div>
                                        {{-- <div class="single-info-box white-bg wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1200ms">
                                            <div class="icon">
                                                <span class="icon-global"></span>
                                            </div>
                                            <div class="text">
                                                <h3>Visit Our Office</h3>
                                                <p>Flat A, 20/7, Reynolds Neck Str, North Helenaville</p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-details-form-box">
                                <div class="title-box">
                                    <h2>Formulaire du demande d'adhésion</h2>
                                </div>
                                <div class="contact-details-box">
                                    <form class="contact-details-form" action="{{route('become.member')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="nom" value="" placeholder="Nom" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="prenom" value="" placeholder="Prénom" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 ">
                                                <div class="single-box">
                                                    <select name="genre" class="selectpicker" data-width="100%" required="">
                                                        <option selected="selected">Sélectionnez votre Genre</option>
                                                        <option>Féminin</option>
                                                        <option>Masculin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 mt-4">
                                                <div class="single-box">
                                                    <select name="pays" class="selectpicker" data-width="100%" required="">
                                                        <option selected="selected">Sélectionnez votre pays</option>
                                                        @foreach ($countries as $country)
                                                            <option>{{$country['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="ville" value="" placeholder="Ville" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="telephone" value="" placeholder="Téléphone" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="single-box">
                                                    <input type="text" name="adresse" value="" placeholder="Adresse" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="single-box">
                                                    <button class="btn-one" type="submit">Soumettre<span class="flaticon-next"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact details Area-->

@endsection
