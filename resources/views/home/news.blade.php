@extends('index')
@section('content')
    <section class="head-img">
        <div class="title-header mb-5">
            <h2>Actualités</h2>
            <h6>Pour tout savoir sur activités et annonces</h6>
        </div>
    </section>


    <section class="brand-four mt-3">
        <div class="brand-four-flex mb-3">
            <div class="row">
                @foreach ($publications as $item)
                    <div class="col-3">
                        <div class="carte shadow-lg shadow-blue-500/50">
                            <div class="carte-img" style="background-image: url('{{ $item->image_path_2 }}');"></div>
                            <div class="carte-title">
                                <span>{{ $item->type }}</span>
                                <h3>{{ substr($item->titre, 0, 25) . '...' }}</h3>
                                <p>{{ substr($item->texte1, 0, 80) . '...' }}</p>
                            </div>
                            <div class="carte-options">
                                <div class="row">
                                    <div class="col-8 me-auto date-four"><i
                                            class="fas fa-calendar me-2"></i>{{ DateFormat_Fr($item->date) }}</div>
                                    <div class="col text-end">
                                        <a href="/{{ Str::lower(str_replace(' ', '-', $item->titre)) }}/{{ $item->id }}">Lire<i
                                                class="fas fa-angle-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="bande"></div>
@endsection
