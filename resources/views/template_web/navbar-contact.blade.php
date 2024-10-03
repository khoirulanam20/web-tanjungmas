<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    @if(isset($profile) && $profile->logo)
        <link rel="icon" type="image/x-icon" href="/images/logo/{{ $profile->logo }}">
    @else
        <link rel="icon" type="image/x-icon" href="/images/logo/default-icon.png"> <!-- Ganti dengan ikon default jika logo tidak ada -->
    @endif

    <title>Contact | Kel.Tanjung Mas</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
    <!------------------- NAVBAR ------------------------>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div style="margin-top: -20px; margin-bottom:-20px" class="container">
        <a class="navbar-brand" href="/">
            @if(isset($profile) && $profile->logo)
                <img src="/images/logo/{{ $profile->logo }}" alt="logo" width="100" height="35" />
            @else
                <img src="/images/logo/logokelurahan.png" alt="default logo" width="100" height="35" /> <!-- Ganti dengan ikon default -->
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">Profil</a>
                </li>
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link {{ request()->is('program') ? 'active' : '' }}" href="/program">Program Kami</a>
                </li>
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link {{ request()->is('berita') ? 'active' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0 mb-3 mb-lg-0">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!------------------- END NAVBAR ------------------------>

    @yield('content')
    @include('template_web.contact')
    @include('template_web.footer')
    
    <script src="/js/profile.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
