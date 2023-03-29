@extends('index')
@section('content')
    <section class="head-img">
        <div class="title-header mb-5">
            <h2>A Propos de nous</h2>
            <h6>Nous connaitre pour mieux nous comprendre !</h6>
        </div>
    </section>
    <section class="about-tell-me">
        <h1><span>CREMIN-CAM</span>, c'est quoi ?</h1>
        <p class="mt-4 shadow-2">Nous sommes un établissement de microfinance (EMF) de 1ére catégorie agrée par arrêté N°
            00000074/ MINFI / du 8 Janvier 2009
            avec un capital initial de 90 millions de francs.</p>
    </section>
    <section class="quality mt-3">
        <h1>Notre vision, notre mission, notre objectif et nos valeurs </h1>
        <div class="row mt-4">
            <div class="col">
                <div class="card text-start">
                    <div class="card-body">
                        <h5 class="card-title">Vision</h5>
                        <p class="card-text" style="text-align: justify">
                            CREMINCAM voudrait être une microfinance de référence dans 25 ans, qui soit
                            leader en matière
                            de responsabilité sociale par la mutualisation et la rentabilisation de ses potentiels,
                            pour l'épanouissement de ses membres.
                        </p>
                    </div>
                    <div class="card-footer text-muted"><i class="fas fa-certificate"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-start">
                    <div class="card-body">
                        <h5 class="card-title">Mission</h5>
                        <p class="card-text" style="text-align: justify">
                            La mission de CREMIN-CAM est de collecter l’épargne et d’octroyer des crédits à ses membres en
                            assurant leur sécurité et leur rentabilité dans le souci d’un développement durable en vue de la
                            satisfaction des aspirations légitimes desdits membres.
                        </p>
                    </div>
                    <div class="card-footer text-muted"><i class="fas fa-certificate"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-start">
                    <div class="card-body">
                        <h5 class="card-title">Objectif et Valeurs</h5>
                        <p class="card-text" style="text-align: justify">Collecte de l'épargne de ses membres et l'octroi
                            des financements au profit exclusif des dits membres. <br>
                            <b>Démocratie, Solidarité, Egalité, Intégrité, Transparence, Innovation et créativité,
                                Le client est roi, La performance.</b></p>
                    </div>
                    <div class="card-footer text-muted"><i class="fas fa-certificate"></i></div>
                </div>
            </div>
        </div>
        <h1 class="mt-5">Nous vous accompagnons avec nos offres,</h1>
        <div class="row mt-4 px-3">
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-gift mb-4"></i>
                    <h4>L'octroi des crédits</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-gem mb-4"></i>
                    <h4>La domiciliation des salaires</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-universal-access mb-4"></i>
                    <h4>L’ouverture des comptes</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-exchange-alt mb-4"></i>
                    <h4>Le transfert d’argent</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-piggy-bank mb-4"></i>
                    <h4>Epargne VIP</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-hand-holding-usd mb-4"></i>
                    <h4>Dépôt à terme</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-ethernet mb-4"></i>
                    <h4>Accompgnement à l'acquisition des terrains</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-ethernet mb-4"></i>
                    <h4>Accompagnement et financement des marchés publics</h4>
                </div>
            </div>
            <div class="col-4 services-about">
                <div class="card py-4 px-4">
                    <i class="fas fa-plane-departure mb-4"></i>
                    <h4>La vente des devises et Travellers Chèques</h4>
                </div>
            </div>
        </div>
    </section>

  {{--   <section class="msg" id="mot-dg">
        <div class="msg-flex shadow-3 mt-5">
            <div class="msg-text"
                style="background-image:  linear-gradient(to top, rgba(255, 255, 255, 0.705) 10%, rgba(204, 219, 241, 0.699) 30%,rgba(255, 255, 255, 0.774) 100%), url(/img/header/happy-new-year.png)">
                <i class="fas fa-file-alt me-2"></i>
                <h3 class="mt-3">Mot du Directeur Général</h3>
                <p class="mt-4">Chers membres,
                    Toute l’équipe de CREMIN-CAM se joint à moi pour vous souhaiter une bonne et heureuse année 2023, riche
                    de satisfactions sous tous rapports.
                    Vous remerciant de votre confiance,
                    Puissions-nous, ensemble, concrétiser de nombreux et beaux projets pour notre coopérative.

                    <!--Dear members,
                                    The entire CREMIN-CAM team joins me in wishing you a happy new year 2023, rich in satisfaction in all respects.
                                    Thanking you for your trust,
                                    May we, together, realize many beautiful projects for our cooperative.-->
                </p>
            </div>
            <div class="msg-img" style="background-image: url(/img/header/Directeur-mot.png)"></div>
        </div>
    </section> --}}


    <section class="organigram mt-2">
        <h1>Notre Organigramme</h1>
        <div class="orni-flex mt-4 shadow-3">
            <div class="orni-img" style="background-image: url(/img/header/img-3.jpg)"></div>
            <div class="orni-text text-white">
                <i class="fas fa-sitemap"></i>
                <h3 class="mt-3">Pour une bonne organisation et un travail parfait</h3>
                <p class="mt-4">organigramme est une représentation schématique des liens et des relations fonctionnelles,
                    organisationnelles et hiérarchiques qui existent entre les éléments et les individus d'une organisation
                    formelle, d'un programme.</p>
                <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal"
                    class="btn btn-primary w-75 mt-3">Je veux en savoir plus</a>
            </div>
        </div>
    </section>

    <section class="brand-covid bg-white mt-5 shadow-2">
        <div class="bg-img-covid" style="background-image: url(img/header/covid-19.jpg);"></div>
        <div class="text-covid">
            <h1>Lutte contre le COVID-19</h1>
            <p>Tirez le meilleur parti de la vie avec COVID-19. Nous sommes en lutte permenance contre le virus pour une
                disponibilité continue de nos services.</p>
        </div>
        <div class="button-covid">
            <a href="" class="mt-4 btn btn-primary" style="width: 100%;">Je veux en savoir plus</a>
        </div>
    </section>

    <section class="team">
        <h1>Nos Dirigeants</h1>
        <div class="teams-officer mt-4">
            <div class="team-card">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="team-img" style="background-image: url(img/header/pca.jpg);"></div>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body p-0 text-center">
                        <h1 class="border-bottom">Président du CA</h1>
                        <h2>MOH Sylvester T.</h2>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="team-img" style="background-image: url(img/header/pcs.png);"></div>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body p-0 text-center">
                        <h1 class="border-bottom">Président du CS</h1>
                        <h2>EDOU OLO'O J.L</h2>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="team-img" style="background-image: url(img/header/dg.jpg);"></div>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body p-0 text-center">
                        <h1 class="border-bottom">Directeur Général</h1>
                        <h2>NTAP Ruben</h2>
                    </div>
                </div>
            </div>

            <div class="team-card">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <div class="team-img" style="background-image: url(img/header/dga.jpg);"></div>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body p-0 text-center">
                        <h1 class="border-bottom">Directeur Général A.</h1>
                        <h2>V. DANG OKALE</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Notre Organigramme</h3>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="orgis">
                        <div class="orgis-img" style="background-image: url('{{ asset('img/header/Organisme.png') }}')">
                        </div>
                        <div class="orgis-text">
                            <ul>
                                <li><b>DAFC : </b></li><br>
                                <li><b>CJ : </b> Cellule Juridique</li><br>
                                <li><b>DESA : </b></li><br>
                                <li><b>CI : </b> Cellule Informatique</li><br>
                                <li><b>RH : </b> Ressources Humaines</li><br>
                                <li><b>RME : </b> Ressources Matérielles et des Equipements</li><br>
                                <li><b>SRDM : </b> Service de Recherche du Développement Marketing</li><br>
                                <li><b>SE : </b></li><br>
                                <li><b>SRC : </b></li><br>
                                <li><b>CPR : </b></li><br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
