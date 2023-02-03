<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="/">
                    <img src="{{ asset('img/icon/cremin.png') }}" height="15" alt="lucien Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ $title }}</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="container-fluid px-5">
        @yield('contenue')
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $('#output-1').hide();
        var loadFile1 = function(event) {
            $('#output-1').show();
            var image = document.getElementById('output-1');
            image.src = URL.createObjectURL(event.target.files[0]);
            $('.option-1').hide();
        };
        $('.option-1').click(function() {
            $('#image-pub-1').click();
        });
        $('#output-1').click(function() {
            $('#image-pub-1').click();
        });
    </script>

    <script>
        $('#output-2').hide();
        var loadFile2 = function(event) {
            $('#output-2').show();
            var image = document.getElementById('output-2');
            image.src = URL.createObjectURL(event.target.files[0]);
            $('.option-2').hide();
        };
        $('.option-2').click(function() {
            $('#image-pub-2').click();
        });
        $('#output-2').click(function() {
            $('#image-pub-2').click();
        });
    </script>

    <script>
        $('#output-3').hide();
        var loadFile3 = function(event) {
            $('#output-3').show();
            var image = document.getElementById('output-3');
            image.src = URL.createObjectURL(event.target.files[0]);
            $('.option-3').hide();
        };
        $('.option-3').click(function() {
            $('#image-pub-3').click();
        });
        $('#output-3').click(function() {
            $('#image-pub-3').click();
        });
    </script>
</body>

</html>
