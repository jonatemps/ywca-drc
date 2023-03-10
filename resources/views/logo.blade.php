@extends('master')

@section('content')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/bbba.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>YWCA-DRC</span>
                                <h1>A propos du Logo</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <li><a href="{{route('about')}}">A propos</a></li>
                                    <li class="active">A propos du logo</li>
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
                <img src="images/pattern/project-description-pattern.jpg" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="project-description-image-box">
                            <img src="images\proprio\logo.png" alt="Awesome Image" width="550">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="project-description-content">
                            <div class="sec-title">
                                <p>Description</p>
                                <div class="title">A propos de<br> notre logo</div>
                            </div>
                            <div class="inner-content">
                                <p>Notre identit?? visuelle mise ?? jour est con??ue pour mieux refl??ter le type d'organisation que nous sommes : dynamique, globale, transformationnelle, diversifi??e et inclusive.</p>
                                <div class="bottpm-text">
                                    <p><span>A quoi correspond le logo ?</span> Le logo mis ?? jour conserve un ??l??ment d'origine - le triangle. En outre, il met l'accent sur l'acceptation du changement et d??montre la nature connect??e du mouvement de la YWCA mondiale.</p>
                                </div>
                                <ul>
                                    <li>Triangle bleu : repr??sente le corps, l'??me et l'esprit</li>
                                    <li>Rubans : repr??sentent la diversit?? et l'??volution avec des couleurs symboliques sp??cifiques :</li>
                                    <li>???	Bleu : stabilit?? et tradition</li>
                                    <li>???	Rose : un mouvement de femmes</li>
                                    <li>???	Vert : croissance, paix et respect de l'environnement</li>
                                    <li>???	Rouge : notre pouvoir et notre passion pour le leadership et les droits des femmes</li>
                                    <li>???	Jaune : notre ??nergie positive et nos perspectives</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Description area-->

@endsection
