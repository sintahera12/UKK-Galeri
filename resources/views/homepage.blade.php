<!DOCTYPE html>
<html>

<head>
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #F8F8FF;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Galeri Foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                arial-controls="navbarNav" arial-expanded="false aria-label=" Toggle navigation>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary m-1" href="{{ route('login') }}"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success m-1" href="{{ route('register-user') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; Website Galeri Foto 2024</p>
</footer> -->
    @yield('content')
</body>
</html>