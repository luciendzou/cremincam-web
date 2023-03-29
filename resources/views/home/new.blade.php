@extends('index')
@section('content')
    <section class="head-img" style="height: 180px">
        <div class="title-header mb-5">
            <h2>Actualités</h2>
            <h6>Pour tout savoir sur activités et annonces</h6>
        </div>
    </section>

    @foreach ($publications as $item)
    <section class="news-details">
        <div class="row mt-5">
            <h2>{{ $item->titre }}</h2>
            <div class="d-flex">
                <span class="me-4"><i class="fas fa-calendar me-2"></i>{{DateFormat_Fr($item->date) }}</span>
            <span><i class="fas fa-eye me-2"></i>{{ $item->nbre_view }}</span>
            </div>
            <div class="col-10 mt-5">
                <div class="row">
                    <div class="col-12 mt-2">
                        <div class="img-news-datails" style="background-image: url('{{ asset($item->image_path_1) }}')"></div>
                    </div>
                    <div class="col-12 mt-4">
                        <p class="texte">{{ $item->texte1 }}</p>
                    </div>
                    @if ($item->image_path_3 != '')
                    <div class="col-12 mt-2">
                        <div class="img-news-datails" style="background-image: url('{{ asset($item->image_path_2) }}')"></div>
                    </div>
                    @endif
                    @if ($item->texte3 != '')
                    <div class="col-12 mt-4">
                        <p class="texte">{{ $item->texte2 }}</p>
                    </div>
                    @endif
                    @if ($item->image_path_3 != '')
                    <div class="col-12 mt-2">
                        <div class="img-news-datails" style="background-image: url('{{ asset($item->image_path_3) }}')"></div>
                    </div>
                    @endif
                    @if ($item->texte3 != '')
                    <div class="col-12 mt-4">
                        <p class="texte">{{ $item->texte3 }}</p>
                    </div>
                    @endif
                    <div class="col-12 mt-5 text-end">
                        <p class="text-end texte">
                            <b>CREMIN-CAM</b><br>
                            <span><i>Crédit Mutuel d'investissement du Cameroun</i></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5">

            </div>
        </div>
    </section>
    <div class="bande"></div>
    @endforeach
@endsection
