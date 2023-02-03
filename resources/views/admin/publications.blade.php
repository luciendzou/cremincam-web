@extends('admin.index')
@section('contenue')
    <br>
    <div class="row mt-3">
        <div class="col-8">
            <form action="/addingpub" method="POST"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-4">
                        <!-- image input -->
                        <div class="input-file-1">
                            <img id="output-1" class="display-img-1" />
                            <div class="option-1">
                                <label class="label-1">Choisir une image</label>
                                <i class="fas fa-cloud-upload-alt mt-3"></i>
                            </div>
                            <input type="file" id="image-pub-1" name="file1" class="form-control" accept="image/*"
                                onchange="loadFile1(event)" />
                        </div>
                    </div>
                    <div class="col-4">
                        <!-- image input -->
                        <div class="input-file-2">
                            <img id="output-2" class="display-img-2" />
                            <div class="option-2">
                                <label>Choisir une image</label>
                                <i class="fas fa-cloud-upload-alt mt-3"></i>
                            </div>
                            <input type="file" id="image-pub-2" name="file2" class="form-control" accept="image/*"
                                onchange="loadFile2(event)" />
                        </div>
                    </div>

                    <div class="col-4">
                        <!-- image input -->
                        <div class="input-file-3">
                            <img id="output-3" class="display-img-3" />
                            <div class="option-3">
                                <label>Choisir une image</label>
                                <i class="fas fa-cloud-upload-alt mt-3"></i>
                            </div>
                            <input type="file" id="image-pub-3" name="file3" class="form-control" accept="image/*"
                                onchange="loadFile3(event)" />
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-4">
                                <!-- Type input -->
                                <div class="form-outline mb-3">
                                    <select name="type" id="form1Example1" class="form-control">
                                        <option selected disabled>Type de publication</option>
                                        <option value="Actualités">Actualités</option>
                                        <option value="Annonces">Annonces</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- titre input -->
                                <div class="form-outline mb-3">
                                    <input type="text" name="titre" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="titre">Titre de la publication</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- titre input -->
                                <div class="form-outline mb-3">
                                    <input type="date" name="date" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="titre">Date de la publication</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-outline mb-5 mt-3">
                            <textarea class="form-control" name="texte1" id="textAreaExample" rows="5"></textarea>
                            <label class="form-label" for="textAreaExample">Texte de la publication</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline mb-5 mt-3">
                            <textarea class="form-control" name="texte2" id="textAreaExample" rows="5"></textarea>
                            <label class="form-label" for="textAreaExample">Texte de la publication</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline mb-5 mt-3">
                            <textarea class="form-control" name="texte3" id="textAreaExample" rows="5"></textarea>
                            <label class="form-label" for="textAreaExample">Texte de la publication</label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-danger btn-block">Publier</button>
            </form>
        </div>
        <div class="col border-end"></div>
        <div class="col-3">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4"
                        style="background-image: url(https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp)">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as...
                            </p>
                            <p class="card-text">
                                <a href="publication/" class="text-muted">Last updated 3 mins ago</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="message">
            <div class="alert alert-success alert-dismissible animate__animated animate__fadeInUp animate__slow animate__delay-1s"
                role="alert">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    @endif

    @if ($message = Session::get('fail'))
        <div class="message">
            <div class="alert alert-danger animate__animated animate__fadeInUp animate__slow animate__delay-1s"
                role="alert">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="message">
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning animate__animated animate__fadeInUp animate__slow animate__delay-1s"
                    role="alert">
                    <strong>{{ $error }}</strong>
                </div>
            @endforeach
        </div>
    @endif
@endsection
