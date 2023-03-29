@extends('index')
@section('content')
    <section class="head-img">
        <div class="title-header mb-5">
            <h2>Nos Agences</h2>
            <h6>Pour nous retrouver dans le pays</h6>
        </div>
    </section>

    <section class="agences">
        <p class="he-agence">Bienvenue dans nos agences</p>
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 mt-5 shadow-3" id="ex-with-icons" role="tablist">
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100 active" id="yaounde" data-mdb-toggle="tab" href="#tab-yaounde"
                    role="tab" aria-controls="tab-yaounde" aria-selected="true">
                    <i class="fas fa-university mb-2"></i>
                    <p class="agences-lieu">Yaoundé</p>
                    <p class="agence-position"><i class="fas fa-map-pin me-2"></i>Face Camp SIC Messa, Immeuble de la
                        Solidarité</p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="douala" data-mdb-toggle="tab" href="#tab-douala" role="tab"
                    aria-controls="tab-douala" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <p class="agences-lieu">Douala</p>
                    <p class="agence-position"><i class="fas fa-map-pin me-2"></i>Douala Akwa, Face Bureau des Transports
                    </p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="garoua" data-mdb-toggle="tab" href="#tab-garoua" role="tab"
                    aria-controls="tab-garoua" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <p class="agences-lieu">Garoua</p>
                    <p class="agence-position"><i class="fas fa-map-pin me-2"></i>Garoua Avenue des Banques</p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="nkongsamba" data-mdb-toggle="tab" href="#tab-nkongsamba" role="tab"
                    aria-controls="tab-nkongsamba" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <p class="agences-lieu">Nkongsamba</p>
                    <p class="agence-position"><i class="fas fa-map-pin me-2"></i>Face Congelcam, Immeuble La Sabine</p>
                </a>
            </li>
            <li class="nav-item text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="maroua" data-mdb-toggle="tab" href="#tab-maroua" role="tab"
                    aria-controls="tab-maroua" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <p class="agences-lieu">Maroua</p>
                    <p class="agence-position"><i class="fas fa-map-pin me-2"></i>Domayo, Carrefour Foyer des Jeunes</p>
                </a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex-with-icons-content">
            <div class="tab-pane fade show active" id="tab-yaounde" role="tabpanel" aria-labelledby="yaounde">
                <div class="row">
                    <div class="col">
                        <div class="card-body text-center mb-3 text-black">
                            <h1 class="mb-3">AGENCE DE YAOUNDE</h1>
                            <P><i class="fas fa-map-pin me-2"></i>Face Camp SIC Messa, Immeuble de la Solidarité</P>
                            <P><i class="fas fa-mobile me-2"></i><a href="tel:+237656851262">+237 656 85 12 62</a></P>
                            <P><i class="fas fa-inbox me-2"></i>3163 Yaoundé - Messa</P>
                            <P><i class="fas fa-at me-2"></i><a
                                    href="mailto:cremincam.yaounde@yahoo.com">cremincam.yaounde@yahoo.com</a> - <a
                                    href="mailto:info.cremincamyaounde@cremincam.com">info.cremincamyaounde@cremincam.com</a>
                            </P>
                        </div>
                        <div style="width: 100%; height: 50px; background-image: url({{ asset('img/header/design.jpg') }})">

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-douala" role="tabpanel" aria-labelledby="douala">
                <div class="row">
                    <div class="col">
                        <div class="card-body text-center mb-3 text-black">
                            <h1 class="mb-3">AGENCE DE DOUALA</h1>
                            <P><i class="fas fa-map-pin me-2"></i>Douala Akwa, Face Bureau des Transports</P>
                            <P><i class="fas fa-mobile me-2"></i><a href="tel:+237655717386">+237 655 71 73 86</a></P>
                            <P><i class="fas fa-inbox me-2"></i>15743 Douala</P>
                            <P><i class="fas fa-at me-2"></i><a
                                    href="mailto:cremincam-douala@yahoo.com">cremincam-douala@yahoo.com</a> - <a
                                    href="mailto:info.cremincamdouala@cremincam.com">info.cremincamdouala@cremincam.com</a>
                            </P>
                        </div>
                        <div
                            style="width: 100%; height: 50px; background-image: url({{ asset('img/header/design.jpg') }})">

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-garoua" role="tabpanel" aria-labelledby="garoua">
                <div class="row">
                    <div class="col">
                        <div class="card-body text-center mb-3 text-black">
                            <h1 class="mb-3">AGENCE DE GAROUA</h1>
                            <P><i class="fas fa-map-pin me-2"></i>Garoua Avenue des Banques</P>
                            <P><i class="fas fa-mobile me-2"></i><a href="tel:+237699460881">+237 699 46 08 81</a></P>
                            <P><i class="fas fa-inbox me-2"></i>338 Garoua</P>
                            <P><i class="fas fa-at me-2"></i><a href="mailto:cremincamgaroua@yahoo.com">cremincamgaroua@yahoo.com</a> -
                                <a href="mailto:info.cremincamgaroua@cremincam.com">info.cremincamgaroua@cremincam.com</a></P>
                        </div>
                        <div
                            style="width: 100%; height: 50px; background-image: url({{ asset('img/header/design.jpg') }})">

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-nkongsamba" role="tabpanel" aria-labelledby="nkongsamba">
                <div class="row">
                    <div class="col">
                        <div class="card-body text-center mb-3 text-black">
                            <h1 class="mb-3">GUICHET DE NKONGSAMBA</h1>
                            <P><i class="fas fa-map-pin me-2"></i>Face Congelcam, Immeuble La Sabine</P>
                            <P><i class="fas fa-mobile me-2"></i><a href="tel:+237675427522">+237 675 42 75 22</a></P>
                        </div>
                        <div
                            style="width: 100%; height: 50px; background-image: url({{ asset('img/header/design.jpg') }})">

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-maroua" role="tabpanel" aria-labelledby="maroua">
                <div class="row">
                    <div class="col">
                        <div class="card-body text-center mb-3 text-black">
                            <h1 class="mb-3">GUICHET DE MAROUA</h1>
                            <P><i class="fas fa-map-pin me-2"></i>Domayo, Carrefour Foyer des Jeunes</P>
                            <P><i class="fas fa-mobile me-2"></i><a href="tel:+237"></a></P>
                        </div>
                        <div
                            style="width: 100%; height: 50px; background-image: url({{ asset('img/header/design.jpg') }})">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
