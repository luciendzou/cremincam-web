@extends('index')
@section('content')
    <section class="head-img">
        <div class="title-header mb-5">
            <h2>Carrières</h2>
            <h6>Pour nous rejoindre et faire chemin avec nous</h6>
        </div>
    </section>

    <section class="carrieres bg-white">
        <h1>CREMIN-CAM</h1>
        <h3>Si vous êtes un pointieux du travail et vous avez les compétences pour cela...</h3>
        <div class="row mt-5">
            <div class="col-3 me-auto">
                <a href="">
                    <div class="card text-start">
                        <div class="card-img" style="background-image: url({{ asset('img/header/img-3.jpg') }})"></div>
                        <div class="card-body">
                            <h3>Demande de stage</h3>
                            <p class="card-text-car mt-2">Sousmettez votre demande de stage en envoyant les documents
                                attendus
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 me-auto">
                <a href="">
                    <div class="card text-start">
                        <div class="card-img" style="background-image: url({{ asset('img/header/img-2.jpg') }})"></div>
                        <div class="card-body">
                            <h3>Candidatures spontanées</h3>
                            <p class="card-text-car mt-2">Sousmettez votre candidature en envoyant votre CV et une lettre de
                                motivation</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 me-auto">
                <a href="">
                    <div class="card text-start">
                        <div class="card-img" style="background-image: url({{ asset('img/header/img-8.jpg') }})"></div>
                        <div class="card-body">
                            <h3>Postes vacants</h3>
                            <p class="card-text-car mt-2">Consultez cette rubrique, il pourrait avoir un poste fait
                                typiquement pour vous</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
