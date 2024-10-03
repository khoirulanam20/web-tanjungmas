@extends('template_web.layout')

@section('content')
    <!------------------- JUMBOTRON DESC PROFILE Berita ------------------------>
    <div class="container my-5 py-md-5">
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}"
                        class="text-decoration-none text-danger">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
        <div class="row mt-md-5 d-flex justify-content-center">
            <section class="--section-page" style="margin-bottom: -35px; margin-top:-50px">

                <div class="container mt-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('images/berita/pemerintahan.png') }}"
                                alt="image profile layanan kelembagaan" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
                            <div class="row">
                                <h1 class="text-center mb-4 text-danger fw-bold">Berita Terkini</h1>
                            </div>
                            <div class="row gap-2 mb-2">
                                @forelse ($categories->take(4) as $category)
                                    <div class="col-lg-6 shadow-sm --box-4">
                                        <h4 class="text-danger">{{ $category->name }}</h4>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p class="text-muted">Tidak ada kategori berita yang tersedia.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!------------------- END JUMBOTRON DESC PROFILE ------------------------>
    <div class="container py-5">
        @if ($categories->isNotEmpty())
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($categories as $category)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-3">{{ $category->name }}</h4>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary" style="padding-right: 12%">
                                    @if($category->articles->isNotEmpty())
                                        Last update: {{ $category->articles->sortByDesc('updated_at')->first()->updated_at->diffForHumans() }}
                                    @else
                                        Belum ada artikel
                                    @endif
                                </small>
                                <a href="{{ route('category.view', $category->id) }}" class="btn btn-primary mt-auto"><i class="bi bi-eye me-2"></i>Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center" role="alert">
                Tidak ada kategori berita yang tersedia.
            </div>      
        @endif
    </div>
@endsection
