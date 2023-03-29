@extends('index')
@section('content')
    <!-- Jumbotron -->
    <div class="bg-header-home">
        <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-fade m-0 p-0" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="bg-header-item" title="epargne vip"
                        style="background-image: linear-gradient(to right, rgba(1, 49, 121, 0.76) 20%,rgba(156, 198, 238, 0.055) 100%), url(/img/header/Epargne-vip.png)">
                        <div class="title-header">
                            <h1 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="epargne au cameroun en 2023">EPARGNE VIP</h1>
                            <h4 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="meilleure epargne du cameroun">L'Epargne dont vous avez toujours rêvé !</h1>
                        </div>
                        <a href="" title="epargne vip" class="btn-header rounded-3xl mt-5 animate__animated animate__fadeInUp animate__slower animate__delay-2s">Comment devenir un VIP</a>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="bg-header-item"
                        style="background-image: linear-gradient(to right, rgba(121, 49, 1, 0.699) 10%,rgba(156, 198, 238, 0.055) 100%), url(/img/header/bonne-annee.png)">
                        <div class="title-header">
                            <h1 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="cremincam microfinance camerounaise">CREMIN-CAM</h1>
                            <h4 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="cremincam meilleure microfinance camerounaise en 2023">Vous souhaites une bonne et heureuse <br> année 2023 !</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-header-item"
                        style="background-image: linear-gradient(to right, rgba(121, 1, 121, 0.699) 10%,rgba(156, 198, 238, 0.055) 100%), url(/img/header/messenger.png); background-position:top">
                        <div class="title-header">
                            <h1 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="credit foncier">CREMIN-CAM MESSENGER</h1>
                            <h4 class="animate__animated animate__fadeIn animate__slower animate__delay-1s" title="credit immobilier, titre foncier">Obtenez votre titre foncier en un<br> clin d'oeil !</h1>
                        </div>
                        <a href="" class="btn-header rounded-3xl mt-5 animate__animated animate__fadeInUp animate__slower animate__delay-2s" title="titre foncier cameroun">Comment obtenir mon titre foncier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel wrapper -->
    </div>
    <!-- Jumbotron -->
    <div class="animate__animated animate__fadeInUp animate__slower animate__delay-1s others-actions text-center">
        <div class="row actions">
            <div class="col-3 border-end">
                <a href="/a-propos-de-nous"><i class="fas fa-male me-2"></i>Mieux nous connaitre</a>
            </div>
            <div class="col-3 border-end">
                <a href="/histoire"><i class="fas fa-history me-2"></i>Pourquoi CREMIN-CAM</a>
            </div>
            <div class="col-3 border-end">
                <a href="/agences"><i class="fas fa-map-marked-alt me-2"></i>Où aller ?</a>
            </div>
            <div class="col-3">
                <a href="/carrières"><i class="fas fa-people-carry me-2"></i>Travailler avec nous</a>
            </div>
        </div>
    </div>

    <section class="brand-one">
        <div class="container-fluid">
            <h1 class="animate__animated animate__fadeInUp animate__slower animate__delay-1s" title="meilleure microfinance du cameroun 2023">Bienvenue au <span>Crédit Mutuel d'Investissement du Cameroun</span>,</h1>
            <div class="row animate__animated animate__fadeInUp animate__slower animate__delay-2s">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="font-size:120%; color:rgb(0, 132, 255);">
                            <i class="fas fa-hands-helping me-4"></i> Solidarité
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="font-size:120%; color:rgb(0, 132, 255);">
                            <i class="fas fa-handshake me-4"></i> Egalité
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="font-size:120%; color:rgb(0, 132, 255);">
                            <i class="fas fa-gavel me-4"></i> Intégrité
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="font-size:120%; color:rgb(0, 132, 255);">
                            <i class="fas fa-award me-4"></i> Performance
                        </div>
                    </div>
                </div>
            </div>

            <div class="contain text-center mt-4">
                <div class="card-one shadow-lg shadow-blue-500/50">
                    <div class="bg-one" title="meilleure microfinance" style="background-image: url(img/header/img-12.jpg);"
                        title="Image de asier_relampagoestudio sur Freepik"></div>
                    <div class="text-one">
                        <p><i class="far fa-smile-beam"></i></p>
                        <h1 class="mb-4" title="meilleure microfinance">Votre sourire, notre trésor</h1>
                        <b class="mt-2">Votre sourire est au-dessus du reste !</b>
                        <p class="mt-4 details">Votre sourire est la seule preuve de votre passage au Crédit Mutuel
                            d'Investissement du Cameroun.</p>
                        <a href="/a-propos-de-nous" class="mt-2 btn btn-primary" style="width: 100%;">Je veux en savoir
                            plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-three">
        <div class="brand-three-flex">
            <div class="text-three">
                <p><i class="far fa-smile-beam"></i></p>
                <h1 class="mb-4">L'argent à porter de main</h1>
                <b class="mt-2">ASAP !</b>
                <p class="details">Obtenez rapidement un découvert en moins de <span class="text-warning">15
                        mins</span> au Crédit Mutuel
                    d'Investissement du Cameroun</p>
                <div class="row">
                    <div class="col">
                        <a href="" class="je-veux mt-4 btn btn-primary" style="width: 100%;">Je veux en savoir plus</a>
                    </div>
                    <div class="col">
                        <a href="" class="prendre mt-4 btn btn-primary btn-outline-primary" style="width: 100%;">
                            <i class="fas fa-american-sign-language-interpreting me-2 text-primary"></i>Prendre un
                            découvert</a>
                    </div>
                </div>
            </div>
            <div class="bg-three" style="background-image: url({{asset('img/header/img-7.jpg')}});"></div>
        </div>
    </section>

    <section class="brand-four mt-3">
        <h1>Actualités</h1>
        <div class="brand-four-flex mb-3">
            <div class="row">
                @foreach ($publications as $item)
                <div class="col-3">
                    <div class="carte shadow-lg shadow-blue-500/50">
                        <div class="carte-img" style="background-image: url({{asset(''.$item->image_path_2.'')}});"></div>
                        <div class="carte-title">
                            <span>{{ $item->type }}</span>
                            <h3>{{ substr($item->titre, 0, 25).'...' }}</h3>
                            <p>{{ substr($item->texte1, 0, 80).'...'}}</p>
                        </div>
                        <div class="carte-options">
                            <div class="row">
                                <div class="col-8 me-auto date-four"><i class="fas fa-calendar me-2"></i>{{ DateFormat_Fr($item->date) }}</div>
                                <div class="col text-end">
                                    <a href="/{{ Str::lower(str_replace(' ', '-', $item->titre)) }}/{{ $item->id }}">Lire<i class="fas fa-angle-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="brand-covid bg-white shadow-lg shadow-blue-500/50">
        <div class="bg-img-covid" style="background-image: url(img/header/covid-19.jpg);"></div>
        <div class="text-covid">
            <h1>Lutte contre le COVID-19</h1>
            <p>Tirez le meilleur parti de la vie avec COVID-19. Nous sommes en lutte permenance contre le virus pour une
                disponibilité continue de nos services.</p>
        </div>
        <div class="button-covid">
            <a href="" class="btn btn-primary" style="width: 100%;">Je veux en savoir plus</a>
        </div>
    </section>

    <section class="brand-account bg-white">
        <h1 class="mt-3 account-title">Pourquoi choisir CREMIN-CAM</h1>
        <div class="row account">
            <div class="col">
                <a href="/particulier">
                    <div class="account-block shadow-3">
                        <div class="img-account" style="background-image: url(img/header/img-14.jpg)"></div>
                        <div class="text-account">
                            <b>#PARTICULIERS</b>
                            <p>Nous offrons des produits et services pour tous types de <b>particuliers</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/particulier">
                    <div class="account-block shadow-3">
                        <div class="img-account" style="background-image: url(img/header/img-15.png)"></div>
                        <div class="text-account">
                            <b>#PROFESSIONNELS</b>
                            <p>Nous offrons des produits et services pour tous types de <b>professionnels</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/entreprise">
                    <div class="account-block shadow-3">
                        <div class="img-account" style="background-image: url(img/header/img-13.png)"></div>
                        <div class="text-account">
                            <b>#ENTREPRISES</b>
                            <p>Nous offrons des produits et services pour tous types d'<b>entreprises</b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
