@extends('index')
@section('content')
    <section class="head-img">
        <div class="title-header mb-5">
            <h2>Nos Agences</h2>
            <h6>Pour nous retrouver dans le pays</h6>
        </div>
    </section>

    <section class="agences">
        <h1>Bienvenue dans nos agences</h1>
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 mt-5 shadow-3" id="ex-with-icons" role="tablist">
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100 active" id="yaounde" data-mdb-toggle="tab" href="#tab-yaounde"
                    role="tab" aria-controls="tab-yaounde" aria-selected="true">
                    <i class="fas fa-university mb-2"></i>
                    <h1>Yaoundé</h1>
                    <p><i class="fas fa-map-pin me-2"></i>Face Camp SIC Messa, Immeuble de la Solidarité</p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="douala" data-mdb-toggle="tab" href="#tab-douala"
                    role="tab" aria-controls="tab-douala" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <h1>Douala</h1>
                    <p><i class="fas fa-map-pin me-2"></i>Douala Akwa, Face Bureau des Transports</p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="garoua" data-mdb-toggle="tab" href="#tab-garoua"
                    role="tab" aria-controls="tab-garoua" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <h1>Garoua</h1>
                    <p><i class="fas fa-map-pin me-2"></i>Garoua Avenue des Banques</p>
                </a>
            </li>
            <li class="nav-item border-end text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="nkongsamba" data-mdb-toggle="tab" href="#tab-nkongsamba"
                    role="tab" aria-controls="tab-nkongsamba" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <h1>Nkongsamba</h1>
                    <p><i class="fas fa-map-pin me-2"></i>Face Congelcam, Immeuble La Sabine</p>
                </a>
            </li>
            <li class="nav-item text-center" role="presentation">
                <a class="nav-link h-100 w-100" id="maroua" data-mdb-toggle="tab" href="#tab-maroua"
                    role="tab" aria-controls="tab-maroua" aria-selected="false">
                    <i class="fas fa-university mb-2"></i>
                    <h1>Maroua</h1>
                    <p><i class="fas fa-map-pin me-2"></i>Domayo, Carrefour Foyer des Jeunes</p>
                </a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex-with-icons-content">
            <div class="tab-pane fade show active" id="tab-yaounde" role="tabpanel"
                aria-labelledby="yaounde">
                Yaounde
            </div>
            <div class="tab-pane fade" id="tab-douala" role="tabpanel" aria-labelledby="douala">
                Douala
            </div>
            <div class="tab-pane fade" id="tab-garoua" role="tabpanel" aria-labelledby="garoua">
                Garoua
            </div>
            <div class="tab-pane fade" id="tab-nkongsamba" role="tabpanel" aria-labelledby="nkongsamba">
                Nkongsamba
            </div>
            <div class="tab-pane fade" id="tab-maroua" role="tabpanel" aria-labelledby="maroua">
                Maroua
            </div>
        </div>
    </section>
@endsection
