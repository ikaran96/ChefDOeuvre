@extends('pole.layout')
@section('content')

<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">
        <div class="autoplay">
            <div class="item item-first" style="background-image: url('{{ asset('img/slider1.jpg')}}')">
                <div class="caption">
                    <div class="container-slick">
                        <div>
                            <h3>Bienvenue</h3>
                            <h1>Pôle Formation de la CCI des Ardennes </h1>
                        </div>
                    </div>
                </div>
                <div class="color-overlay"></div>
            </div>
            <div class="item item-second" style="background-image: url('{{ asset('img/slider2.jpg')}}')">
                <div class="caption">
                    <div class="container-slick">
                        <div>
                            <h3>Bienvenue</h3>
                            <h1>Pôle Formation de la CCI des Ardennes </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third" style="background-image: url('{{ asset('img/slider3.jpg')}}')">
                <div class="caption">
                    <div class="container-slick">
                        <div>
                            <h3>Bienvenue</h3>
                            <h1>Pôle Formation de la CCI des Ardennes </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- ABOUT -->
<section style="background-color:#5B5B5B" id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                        <h2>Découvrez nous !</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <p>Bienvenue sur le site du <strong>Pôle Formation de la CCI des
                                Ardennes</strong>.
                            Dans un monde en constante évolution,

                            savoir adapter ses compétences est l’une des clés du succès des
                            entreprises.

                            Faire de la <strong>formation</strong> un levier de croissance est une
                            démarche
                            en cohérence avec la vocation du <strong>Pôle Formation.</strong></p>
                        <p><strong>Le Pôle Formation de la CCI des Ardennes</strong> vous accueille
                            dès à
                            présent sur

                            le Campus Sup Ardenne, 8 rue Claude Chrétien à Charleville-Mézières

                            (Parc de Haute Technologie du Moulin Leblanc)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                    <img src="{{ asset('img/about-interieur.jpg')}}" class="img-responsive" alt="">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Nos Actualités</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2019/10/Anglais-CC-D%C3%A9butant.pdf"
                        target="_blank">
                        <img src="{{ asset('img/anglais.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2019/10/Japonais-CC-D%C3%A9butant.pdf"
                        target="_blank">
                        <img src="{{ asset('img/japonais.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2019/10/Italien-CC-D%C3%A9butant.pdf"
                        target="_blank">
                        <img src="{{ asset('img/italien.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <hr>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.7s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2020/01/Visuel-M%C3%A9tiers-du-num%C3%A9rique.jpg"
                        target="_blank">
                        <img src="{{ asset('img/numerique.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2020/06/Visuel-ISCEE-2pl.jpg"
                        target="_blank">
                        <img src="{{ asset('img/iscee.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.9s">
                    <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2020/02/Visuel-ifag.jpg"
                        target="_blank">
                        <img src="{{ asset('img/ifag.jpg')}}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
</section>
@endsection
