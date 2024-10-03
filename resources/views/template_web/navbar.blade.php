<!------------------- NAVBAR ------------------------>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
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
                <li class="nav-item dropdown mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link dropdown-toggle {{ request()->is('kelembagaan*') ? 'active' : '' }}" href="/kelembagaan" id="programDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Program Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programDropdown">
                        @foreach($programCategories as $category)
                            <li><a class="dropdown-item" href="{{ route('kelembagaan.show_sub', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item mx-lg-4 ms-3 ms-lg-0">
                    <a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}" href="/layanan">Layanan</a>
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
