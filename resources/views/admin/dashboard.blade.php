@extends('admin.index')
@section('contenue')
<br>
    <div class="row mt-5">
        <div class="col-4">
            <a href="/addpub" class=" d-flex">
                <div class="card" style="width: 30%; background-size: cover; background-position: center; background-image: url(https://mdbcdn.b-cdn.net/img/new/avatars/2.webp)"></div>
                <div class="card d-flex">
                    <div class="card-body">
                      <h5 class="card-title text-dark">Gestion des Publications</h5>
                      <p class="card-text text-secondary" style="font-size: 12px; text-align: justify">Pour l'ajout, consultation, supprission ou modification d'une actualité sur le site</p>
                    </div>
                  </div>
                </a>
        </div>
    </div>
@endsection
