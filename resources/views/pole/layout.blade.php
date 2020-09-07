<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Acceuil - Formation CCI Ardennes</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


</head>

<body>
    <!-- <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section> -->
    <div id="header" class="clearfix">
        <div id="header-content" class="container clearfix">
            <h1><a href="{{route('pole.index')}}"><img class="logo"
                        src="https://www.poleformation-cci08.fr/wp-content/themes/Template-cci/images/logo.jpg"
                        alt="CCI Ardennes" width="100%" /></a></h1>
            <ul class="social">
                <li><span>Retrouvez nous sur </span></li>
                <li><a href="https://www.facebook.com/poleformationcci08" target="_blank" class="social-facebook"
                        title="Suivez-nous sur Facebook"><img
                            src="https://www.poleformation-cci08.fr/wp-content/themes/Template-cci/images/header-logo-facebook.png"
                            alt="Facebook" width="40" height="40" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="user-interface">
        @guest
        <div class="user-interface-element">
            <a class="a-ui" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Se connecter</a>
        </div>
        @if (Route::has('register'))
        <div class="user-interface-element">
            <a class="a-ui" href="{{ route('register') }}"><i class="fas fa-user"></i> S'inscrire</a>
        </div>
        @endif
        @else
        <div class="user-interface-element">
            {{ Auth::user()->name }}
        </div>
        <div class="user-interface-element">
            <a class="a-ui" href="/admin">Dashboard</a>
        </div>
        <div class="user-interface-element">
            <a class="a-ui" href="/admin">Mon compte</a>
        </div>
        <div class="user-interface-element">
            <a class="a-ui" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="fas fa-sign-out-alt"></i> Se déconnecter</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
    </div>
    <div id="navigation" class="clearfix">
        <div class="">

            <div id="containerLvl1" class="container">
                <div class="mobile">
                    <div class="img-mobile">
                    <i class="fas fa-bars" style="color:white; font-size:20px"></i>
                    </div> <p>MENU</p>
                </div>
                <ul onclick="myFunction(event)" id="menu" class="niv1 current">
                    <li id="menu-item-101"
                        class="menu-item active menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-72  menu-item-101">
                        <a href="{{route('pole.index')}}" aria-current="page">Accueil</a></li>
                    <li id="menu-item-415"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-415  menu-item-has-children menu-item-415">
                        <a href="/pole/formation-diplomantes">Formations
                            diplômantes et certifiantes</a></li>
                    <li id="menu-item-414"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-414 ">
                        <a href="/pole/formation-continue">Formation continue</a>
                    </li>
                    <li id="menu-item-1241"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1241 ">
                        <a href="/pole/nuit">Nuit
                            de l&rsquo;Orientation et de l&rsquo;Etudiant</a></li>
                    <li id="menu-item-1057"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057">
                        <a href="/pole/apprenant">Vie de
                            l&rsquo;Apprenant</a></li>
                    <li id="menu-item-1361"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1361">
                        <a href="/pole/cv-offre-emploi">CVthèque et
                            Offres d&#8217;emploi</a></li>
                    <li id="menu-item-113"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113 ">
                        <a href="/pole/contact">Contact</a></li>

                    <li class="mobileToggle close">
                        <p>X FERMER</p>
                    </li>
                </ul>
                <div class="search">
                    <form method="get" id="searchform" action="https://www.poleformation-cci08.fr/">
                        <label class="hidden" for="s">Search:</label>
                        <input type="text" value="" name="s" id="s" placeholder="Rechercher" />
                        <input type="submit" value="" />
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- PRE LOADER -->

   
    <div>
        @yield('content')
    </div>
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-md-3 col-sm-8">
                        <div class="box-footer">
                            <a href="http://www.ardennes.cci.fr/" target="_blank" rel="noopener">CCI des
                                Ardennes</a>
                            <br>
                            <a href="https://www.alsace.cci.fr/" target="_blank" rel="noopener">CCI Alsace
                                Eurométropole</a>
                            <br>
                            <a href="http://www.troyes.cci.fr/" target="_blank" rel="noopener">CCI de
                                l'Aube</a>
                            <br>
                            <a href="http://www.nancy.cci.fr/">CCI Grand Nancy Métropole
                                Meurthe-et-Moselle</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-8">
                        <div class="box-footer"><a>
                                <a href="https://www.meusehautemarne.cci.fr/" target="_blank" rel="noopener">CCI
                                    Meuse Haute-Marne</a>
                                <br>
                                <a href="http://www.marne.cci.fr/" target="_blank" rel="noopener">CCI de la
                                    Marne</a>
                                <br>
                                <a href="http://www.vosges.cci.fr" target="_blank" rel="noopener">CCI des
                                    Vosges</a>
                                <br>
                                <a href="https://www.moselle.cci.fr/" target="_blank" rel="noopener">CCI
                                    Moselle
                                    Métropole Metz</a>
                                <br>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8">
                        <div class="footer-info footer-open-hour">
                            <div class="box-footer">
                                <img
                                    src="https://formation.ardennes.cci.fr//wp-content/themes/Template-cci/images/cci-grand-est-carte-france-footer.png">
                                <alt="carte repr�sentant="" la="" cci="" grand="" est"="">

                                </alt="carte>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 ">
                        <div class="copyright-text">
                            <p class="copycat"><br>Copyright &copy; 2020 <br>Simplon Charleville-Mézières

                                <br><br><a rel="nofollow" href="#" target="_blank">Mention
                                    légales</a></p>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js') }}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('js/smoothscroll.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script> 


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(function () {
            $(window).resize(function () {
                var $theWindowSize = $(this).width();
                if ($theWindowSize > 991) {
                    $('#menu').css('display', 'flex');
                } else {
                    $('#menu').css('display', 'none');
                }
            })
            $('.mobile').click(function () {
                $('#menu').css('display', 'block');
            })
            $('.close').click(function () {
                $('#menu').css('display', 'none');
            })
        })
        $(document).ready(function(){
            $('.autoplay').slick({
                arrows:false,
                autoplay:true,
                fade:true,
                speed: 500,
                autoplaySpeed:4000,
            });
});

    </script>

</body>

</html>
