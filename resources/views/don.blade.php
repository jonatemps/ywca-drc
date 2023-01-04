@extends('master')

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/bbba.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Donation</span>
                                <h1>Soutenir cet œuvre.</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li class="active">Don</li>
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
        <p>Faire un DON</p>
        <div class="title">Voullez-vous nous faire <span>un Don ?</span></div>
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
                                    <h2>Formulaire du Don</h2>
                                </div>
                                <div class="contact-details-box">
                                    <form class="contact-details-form" action="" method="POST">

                                        @csrf
                                        <div class="row">

                                            <div class="col-md-12 d-flex mb-3">
                                                <div class="field-label mr-2">Titre*</div>
                                                <div class="form-check mr-2">
                                                    <input class="form-check-input" type="radio" name="titre" id="titre1" value="monsieur" checked>
                                                    <label class="form-check-label" for="titre1">
                                                      Monsieur
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="titre" id="titre2" value="madame">
                                                    <label class="form-check-label" for="titre2">
                                                      Madame
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="prenom" value="" placeholder="Prénom" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <input type="text" name="nom" value="" placeholder="Nom" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="single-box">
                                                    <input type="email" name="email" value="" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="single-box">
                                                    <input type="text" name="telephone" value="" placeholder="Téléphone" required="">
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <div class="field-label mr-2">Selectionnez votre pays</div>
                                                    <select name="pays" class="selectpicker" data-width="100%" required="">
                                                        <option>Concept Designs</option>
                                                        <option>Project Designs</option>
                                                        <option>Make Overs</option>
                                                        <option>Consulting</option>
                                                        <option>Glass & Wrought</option>
                                                        <option>Space Planning</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <div class="field-label mr-2">Selectionnez la monnaie</div>
                                                    <select name="monnaie" class="selectpicker" data-width="100%" required="">
                                                        <option>Dollar Américain (USD)</option>
                                                        <option>Franc congolais (FC)</option>
                                                        <option>Euro </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 mt-4">
                                                <div class="single-box">
                                                    <div class="field-label mr-2">Selectionnez le mode de paiement*</div>
                                                    <select name="mode" class="selectpicker" data-width="100%" required="">
                                                        <option>Banque</option>
                                                        <option>Mobile Monney</option>
                                                        <option>Comptant</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 mt-4">
                                                <div class="single-box">
                                                    <input type="text" name="montant" value="" placeholder="Montant" required="">
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        J’accepte d’être contacter par la YWCA-DRC pour sa procédure de perception du don.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-xl-12 mb-4">
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
