@extends('pole.layout')
@section('content')

<body id="simplon">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- HEADER MOCHE/////////////////////////////////////////// -->
    <?php $currentPage = "Formations diplômantes et certifiantes"; ?>
    <?php include 'include/navbar.php' ?>


    <section class="simp" id="formation">
        <div class="container">

            <div class="row forma-section-title flex">

                <div><a href="#"><img class="img-fluid" src="images/simplon1.jpg"></a>
                </div>
                <div>
                    <div>
                        <h2 class="d-block" style="color:#E30043">Développeur Web</br>Application mobile</h2>

                    </div>
                </div>

            </div>

            <div class="row forma-prereq">
                <div>
                    <h3>PRÉREQUIS</h3>
                    <p>
                        L'ADN de Simplon.co est de n'imposer comme prerequis QUE la motivation et une appétence certaine
                        pour le code Au delà, il est impératif que toutes et tous aient la même chance d'acceder a la
                        formation quels que soient age, le niveau d'étude, le milieu social l'origine, etc.

                    </p>

                    <h3>DES VALEURS PARTAGÉES</h3>
                    <p>

                        Intégrer Simplon.co est un engagement dans numérique au sens large et de l'innovation sociale.
                        Voici quelques principes qui jatonnent le parcours pédagogique des simplenien ne s.

                        une formation intensive. C'est aussi rejoindre une communaute et un écosystème, celui du
                        numérique au sens large et de l'innovation sociale. Voici quelques principes qui jalonnent le
                        parcours pédagogique des simplonien.ne.s.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="simp" id="recru">


        <div class="container-xl">


            <div class="forma-section-title">
                <h2 class="" style="color:#E30043">Recrutement</h2>
                <hr>
            </div>

            <div class="row recru-flex">

                <div id="recruc1" class="col-3 recru-card mx-auto">
                    <span>1</span>
                    Inscription en ligne dès l'ouverture des questionnaires sur simplon.co
                </div>
                <img src="images/groupe8.svg" alt="">
                <div id="recruc2" class="col-3 recru-card mx-auto">
                    <span>2</span>
                    1ère sélection des candidat-e-s sur leur degré de motivation
                </div>
                <img src="images/groupe8.svg" alt="">
                <div id="recruc3" class="col-3 recru-card mx-auto">
                    <span>3</span>
                    2ème sélection des candidat-e-s par 1 jury de professionnels du numérique
                </div>

            </div>

            =
        </div>

    </section>

    <section class="simp" id="peda">


        <div class="container-fluid">
            <div class="row peda-flex">

                <img class="imagepeda" src="images/peda-simplon.png" alt="">

                <div class="col-9 peda-txt">
                    <div class="forma-section-title">
                        <h2 class="" style="color:#E30043">Pédagogie</h2>
                        <hr>
                    </div>

                    <div class="row my-5 pt-5">

                        <div class="col-8 mx-5">

                            <h3>PÉRIODE 1</h3>
                            <p>
                                La prairie - durée 15 jours; Objectifs : appréhender l'ensemble des technos abordées
                                durant
                                la
                                formation proprement dite. Pour l'apprenant-e c'est également

                                une période de réflexion
                            </p><br>
                            <h3>PÉRIODE 2</h3>
                            <p>
                                La Formation Simplon.co - durée 7 mois (dont un mois de stage).</p>

                            <p>Elle repose sur une pédagogie par projets et sur une pédagogie active, c'est à dire sur :
                            </p>
                            <ul>

                                <li><span>des apports théoriques liés à la mise en pratique </span></li>
                                <li><span>des apprenantes qui sont moteur des apprentissages
                                        (reverse mentoring, learning by doing) </span></li>
                                <li><span>un co-apprentissage (projets collectifs, encouragement de
                                        l'entraide). Elle est également centrée sur l'adaptation aux apprenantes:</span>
                                </li>


                                <li><span>une équipe pluridisciplinaire expertise technique et pédagogique et chargé du
                                        suivi
                                        socio
                                        professionnel</span></li>
                                <li><span>des rendez-vous pédagogiques individuels réguliers </span></li>
                                <li><span>des ateliers de soutien </span></li>
                                <li><span>des
                                        simulations d'entretiens</span></li>


                                <li><span>une ouverture des espaces de travail en dehors des temps de formation</span>
                                </li>
                            </ul>
                            <p> A l'issue de la formation les apprenants peuvent prétendre à un poste de développeur.se
                                Web
                                junior.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="simp" id="encart">
        <div class="container-sm">

            <div class="row">
                <div id="cont" class="col">
                    <br>
                    <p>
                        La première promotion de Simplon.co est celle qui aura structuré les bases d'une initiative
                        vouée à
                        s'étendre et à toucher de plus en plus de monde au fur et à mesure de ses avancées.
                    </p>

                    <p>Donner le meilleur de soi-même ne concerne pas que l'avenir et les résultats personnels des
                        stagiaires, mais aussi l'exemple qu'ils pourront incarner par la suite pour les nouvelles
                        générations.</p>
                    <br>
                </div>
            </div>
        </div>

    </section>


    <section class="simp" id="peda">


        <div class="container-fluid">
            <div class="row last-section">




                <div class="col-8 mx-5">

                    <h3>Examens</h3>
                    <p>
                        réalisation de projets individuels ou colleculs permet de valider ou non certaines
                        compétences techniques à travers des évaluations formatives qui auront lieu tout au long
                        du parcours.
                    </p><br>
                    <p>Par ailleurs, à l'issue de la formation, les apprenant.e.s pourront prétendre à u we
                        professionnel RNCP niveau III - Développeur.se WEB - qui les obligera à :
                    </p>
                    <ul>

                        <li><span>rediger un dossier professionnel - Ce dossier est un élément obligatoire du
                                système de validation du titre professionnel qui permet de présenter et mettre

                                en valeur la pratique professionnelle de l'apprenant de periodes en entreprise
                                en les renseignant.</span></li>
                        <li><span>préparer une présentation, a projeter, du projet</span></li>
                        <li><span>réaliser un projet de mise en situation professionnelle</span></li>
                    </ul>
                    <h3>Projets</h3>
                    <p>pour chaque promotion un appel à projets est lancé en direction du tissu économique
                        local. Avant même d'avoir reçu leur certification les apprenant.e.si contribuent donc a
                        la numérisation et a l'acculturation de l'environnement de la fabrique.</p>
                    <h3>Stages</h3>
                    <p>Pour chaque promotion un appel à poulets est lance en direction du tissu économique
                        local. Avant meme d'avoir reculeur certification, les apprenant es dontibuent dong à la
                        n Fabrique l'environnement de la fabrique.</p>
                </div>


                <div class="d-flex justify-content-around align-items-center flex-column">
                    <div id="dlbutton" class="mt-md-5">
                        <div class="p-2">
                            <a href="https://www.poleformation-cci08.fr/wp-content/uploads/2020/02/Flyer-Num%C3%A9rique-OK.pdf"
                                target="_blank" class="">Télécharger le livret<br>des formations numériques</a>
                        </div>
                        <img src="images/file-dl.svg" alt=""><span>PDF 2,04Mo</span>
                    </div>
                    <div></div>
                </div>

            </div>
        </div>
        <div id="dashes" class="row"></div>

    </section>


</body>
<script>
    $(function () {
        $(window).resize(function () {
            var $theWindowSize = $(this).width();
            if ($theWindowSize > 991) {
                $('#menu').css('display', 'flex');
                // line2.setOptions({endSocket: 'right'});
            } else {
                // line2.setOptions({endSocket: 'auto'});
                $('#menu').css('display', 'none');
            }

        });
        $('.mobile').click(function () {
            $('#menu').css('display', 'block');
        });
        $('.close').click(function () {
            $('#menu').css('display', 'none');
        });


        new LeaderLine(
            document.getElementById('recruc1'),
            document.getElementById('recruc2'), {
                color: '#E30043',
                size: 1,
                endPlugSize: 2
            }
        );
        // middleLabel: '>',
        var line2 = new LeaderLine(
            document.getElementById('recruc2'),
            document.getElementById('recruc3'), {
                color: '#E30043',
                size: 1,
                endPlugSize: 2
            }
        );




    });

</script>
@endsection
