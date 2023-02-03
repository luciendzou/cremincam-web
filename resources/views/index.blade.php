<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description"
        content="Un Établissement de MICROFINANCE de 1ère catégorie au capital de 90 000 000 de FCFA; Arrêté N°00000074/MINFI du 08 Janvier 2009. Registre d'inscription N°CE/CO/28/08/23476 du 03 mars 2008. Trouver votre crédit avec nous." />
    <meta name="Identifier-URL" content="https://www.cremincam.org" />
    <link rel="canonical" href="https://www.cremincam.org/" />
    <meta name="Language" CONTENT="fr" />
    <meta property="og:locale" content="fr_FR">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="© cremincam.org 2020" />
    <meta name="googlebot" content="index,follow,nosnippet" />
    <meta name="google" content="translate,nositelinkssearchbox" />
    <meta http-equiv="Cache-control" content="private" />
    <meta name="keywords"
        content="banque, finance, argent, crédit, crédit bancaire, épargne, carte visa, emprunt, emprunter, dossier crédit, microfinance, trésor, caisse, yaoundé, microfinance Cameroun, microfinance yaoundé, microfinance douala, microfinance garoua, établissement microfinance, prêts bancaires, prêts" />
    <meta name="Author" content="CREMINCAM, AD-CREATION" />
    <meta property="og:title" content="La meilleure MICROFINANCE qui soit au Cameroun">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.cremincam.org/">
    <meta property="og:image" content="https://www.cremincam.org/img/logo/cremincam.png">
    <meta property="og:description"
        content="Vous recherchez une microfinance pour vous aider dans vos affaires ? ne cherchez plus. CREMINCAM a tout prévu pour vous accompagner à réaliser vos projets.">
    <meta property="og:site_name" content="CREMINCAM | Microfinance Banque Cameroun Crédit mutuelle">
    <title>CREMIN-CAM | Microfinance Cameroun - Crédit mutuelle d'Investissement du Cameroun</title>

    <!-- icon -->
    <link rel="icon" href="https://www.cremincam.org/img/icon/favicon-256x256.png">
    <link rel="apple-touch-icon" href="https://www.cremincam.org/img/icon/favicon-256x256.png">
    <link rel="apple-touch-icon-precomposed" href="https://www.cremincam.org/img/icon/favicon-256x256.png">
    <link rel="shortcut icon" href="https://www.cremincam.org/img/icon/favicon-256x256.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-one.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-two.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-three.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-four.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-five.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-six.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-covid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletters.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">

    <link rel="stylesheet" href="{{ asset('css/fixed-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brand-account.css') }}">
    <link rel="stylesheet" href="{{ asset('css/agences.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>
    <!--Header de la page-->
    <header>
        <div class="navbrand" id="navbrand">
            <div class="logobrand">
                <a href="/"><img src="{{ asset('img/logo/cremincam.png') }}" alt="" srcset=""></a>
            </div>
            <div class="menusbrand">
                <div class="first-menus">
                    <div class="menu-fs-one">
                        <h6>Choisir une option</h6>
                        <a href="" data-mdb-toggle="modal"
                            data-mdb-target="#staticBackdrop">{{ $title }}<i
                                class="ms-2 fas fa-caret-down"></i></a>
                    </div>
                    <div class="menu-fs-two">
                        <a href="/" class="btn btn-white btn-floating bg-[#fff] me-2"
                            title="A propos de CREMINCAM">
                            <i class="fas fa-landmark"></i>
                        </a>
                        <a href="/register" class="btn btn-primary btn-rounded bg-[#1d4ed8] me-2"
                            title="Créer un compte"><i class="fas fa-user-plus me-3"></i>J'ouvre un compte</a>
                        <a href="#" class="btn btn-white btn-floating bg-[#fff]" title="Me connecter à compte">
                            <i class="fas fa-unlock-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="second-menus">
                    <div class="menu-sd-one">
                        <ul id="sd-menus">
                            @foreach ($menus as $item)
                                <li class="me-4">
                                    <a  href="/{{ Str::lower(str_replace(' ', '-', $item)) }}">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-top" id="fixed-top">
            <div class="logobrand">
                <a href="/"><img src="{{asset('img/icon/cremi.png')}}" alt="" srcset=""></a>
            </div>
            <div class="menusbrand">
                <div class="menu-sd-one">
                    <ul id="sd-menus">
                        @foreach ($menus as $item)
                            <li class="me-4">
                                <a href="/{{ Str::lower(str_replace(' ', '-', $item)) }}">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="menu-sd-two">
                    <a href="/" class="btn btn-primary btn-floating bg-[#1d4ed8] me-2"
                        title="A propos de CREMINCAM">
                        <i class="fas fa-landmark"></i>
                    </a>
                    <a href="/register" class="btn btn-primary btn-floating bg-[#1d4ed8] me-2"
                        title="Créer un compte"><i class="fas fa-user-plus me-3"></i></a>
                    <a href="#" class="btn btn-primary btn-floating bg-[#1d4ed8]"
                        title="Me connecter à compte">
                        <i class="fas fa-unlock-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--Fin Header de la page-->
    <div class="containe">
        @yield('content')
    </div>

    <section class="brand-six">
        <h1>Nos partenaires</h1>
        <div class="contenu-six mt-4">
            <!-- Carousel wrapper -->
            <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="icons-part text-center">
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/minfi.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/logodgtcfm.jpeg') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/mutresor.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/téléchargement.jfif') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/ecobank.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="icons-part text-center">
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/nfc.jpg') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/UBA-logo-2.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/bicec.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/saar.jpg') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/bf_life_insurance.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="icons-part text-center">
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/wafacash.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/Ria.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/woldremit.png') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/Orange-Money.jpg') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                            <div class="icons-bg"
                                style="background: url({{ asset('img/partner/mobile-money.jpg') }});background-repeat: no-repeat;background-size: contain;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->
        </div>
    </section>

    <!-- Modal -->
    <div class="modal modal-xl fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Choisir une option <br>
                        <b>{{ $title }}<i class="ms-2 fas fa-caret-up"></i></b>
                    </h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col p-5">
                                <a class="choix-modal" href="/">
                                    <img src="{{ asset('img/header/home.png') }}" alt="">
                                    <h2>CREMIN-CAM</h2>
                                    <p>Pour tout savoir <br> sur votre microfinance.</p>
                                </a>
                            </div>
                            <div class="col p-5">
                                <a class="choix-modal" href="/particulier">
                                    <img src="{{ asset('img/header/particulier.png') }}" alt="">
                                    <h2>PARTICULIERS</h2>
                                    <p>Pour les personnels <br> d'administration, privé,
                                        étudiants, etc...</p>
                                </a>
                            </div>
                            <div class="col p-5">
                                <a class="choix-modal" href="/entreprise">
                                    <img src="{{ asset('img/header/entreprise.png') }}" alt="">
                                    <h2>ENTREPRISES</h2>
                                    <p>Pour les entreprises, <br> associations, groupes, etc...</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="newsletters"
        style="background-image: linear-gradient(to top, rgba(204, 219, 241, 0.699) 10%,rgba(242, 245, 248, 0.055) 100%), url(img/header/newsletter-background.jpg)">
        <h1>CREMIN-CAM News</h1>
        <h5>Restez à jour sur offres et services en souscrivant à notre newsletter</h5>
        <form action="/newsletters" method="post" class="news-form mt-4">
            @csrf
            <input type="email" name="email" id="email">
            <button class="btn btn-warning">Souscrire</button>
        </form>
        @error('email')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                @if ($message == 'The email field is required.')
                    Entrez votre email avant de valider
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        @if (session('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-footer text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center  px-4 py-4">
            <!-- Left
            <div class="me-5 d-none d-lg-block"><span>Rejoignez-nous sur les réseaux sociaux :</span></div>
             Left -->
            <!-- Right -->
            <div>
                <a href="" class="me-4 link-dark"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="me-4 link-dark"><i class="fab fa-twitter"></i></a>
                <a href="" class="me-4 link-dark"><i class="fab fa-instagram"></i></a>
                <a href="" class="me-4 link-dark"><i class="fab fa-linkedin"></i></a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->
        <!-- Section: Links  -->
        <section class="py-3 border-bottom">
            <div class="container linker">
                <div class="row text-center">
                    <div class="col-2 border-end">
                        <a href="/a-propos-de-nous">Qui sommes nous ?</a>
                    </div>
                    <div class="col border-end">
                        <a href="/actualités">Actualités</a>
                    </div>
                    <div class="col border-end">
                        <a href="/nous-contacter">Contact</a>
                    </div>
                    <div class="col border-end">
                        <a href="/carrières">Carrières</a>
                    </div>
                    <div class="col border-end">
                        <a href="/mentions-legales">Mentions légales</a>
                    </div>
                    <div class="col border-end">
                        <a href="/gestions-cookies">Gestion des cookies</a>
                    </div>
                    <div class="col">
                        <a href="/aides">Aide</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center px-2 py-4" style="background-color: rgba(255, 255, 255); color:rgb(116, 116, 116)">
            Copyright © <span id="year" style="color: rgb(116, 116, 116)"></span> Crédit Mutuel d'Investissement
            du
            Cameroun (CREMIN-CAM).
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/newsletters.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
        document.oncontextmenu = function() {
            return true;
        }
    </script>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
        setTimeout(function() {
            // Adding the class dynamically
            $('.alert').alert('close');
        }, 5000);
    </script>
    <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fixed-nav.js') }}"></script>

</body>

</html>
