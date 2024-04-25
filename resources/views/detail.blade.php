@extends('layout')

@section('content')

<head>
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/templatemo-style.css')}}">
    <link rel="stylesheet" href="{{asset('custom.css')}}">
</head>

<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                Galeri Foto
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Detail Foto</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link nav-link-2" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.html">Contact</a>
                </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid tm-container-content tm-mt-60">
        <!-- <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Detail Foto</h2>
        </div> -->
        <div class="row tm-mb-90">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('user_images/' . $image->image)}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mb-4 tm-bg-gray">
                            <h5 class="tm-text-gray-dark mb-3">Caption</h5>
                            <p>{{$image->caption}}</p>
                            <h5 class="card-title tm-text-gray-dark">Ketegori</h5>
                            <p>{{$image->category}}</p>
                            <button onclick="window.history.back()"
                                class="btn btn-primary h-10 w-10 mt-7">Kembali</button>
                        </div>
                    </div>
                    <!-- <div class="card my-4">
                        <h5 class="card-header">Tinggalkan Komentar</h5>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                <div class="form-group">
                                    <p>Komentar</p>
                                    <textarea class="form-control" type="text" name="komentar"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary"></button>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>

    <script src="js/plugins.js"></script>
    <script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
    </script>
</body>
@endsection