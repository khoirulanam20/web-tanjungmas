@extends('template_web.layout')

@section('content')
    <!------------------- JUMBOTRON DESC PROFILE Kelembagaan ------------------------>
    <div class="container my-5 py-md-5">
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}"
                        class="text-decoration-none text-danger">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kelembagaan') }}"
                        class="text-decoration-none text-danger">Program Kami</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $programCategory->name }}</li>
            </ol>
        </nav>
        <div class="row mt-md-5 d-flex justify-content-center">
            <section class="--section-page" style="margin-bottom: -35px; margin-top:-50px">

                <div class="container mt-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                            @if ($programCategory->id == 10)
                                <img src="{{ asset('images/layanan/kelembagaan.png') }}"
                                    alt="image profile layanan kelembagaan" class="img-fluid" />
                            @elseif ($programCategory->id == 11)
                                <img src="{{ asset('images/layanan/pemberdayaan.png') }}"
                                    alt="image profile layanan pemberdayaan" class="img-fluid" />
                            @else
                                <img src="{{ asset('images/layanan/default.png') }}" alt="image profile layanan default"
                                    class="img-fluid" />
                            @endif
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
                            <div class="row">
                                <h1 class="text-center mb-4 text-danger fw-bold">{{ $programCategory->name }}</h1>
                            </div>
                            <div class="row gap-2 mb-2">
                                @forelse ($programCategory->subCategories->take(4) as $subCategory)
                                    <div class="col-lg-6 shadow-sm --box-4">
                                        <h4 class="text-danger">{{ $subCategory->name }}</h4>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p class="text-muted">Tidak ada sub kategori yang tersedia.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------- END BERANDA FOURTH SECTION  ------------------------>
        </div>
    </div>
    <!------------------- END JUMBOTRON DESC PROFILE ------------------------>
    <div class="container py-5">
        @if ($programCategory->subCategories->isNotEmpty())
            <div class="row row-cols-1 row-cols-md-3 g-4" <div class="col">
                <div class="card h-100 shadow-sm">
                    @foreach ($programCategory->subCategories as $subCategory)
                        <div class="card-body">
                            <h4 class="card-title mb-3">{{ $subCategory->name }}</h4>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary" style="padding-right: 12%">
                                @if($subCategory->programs->isNotEmpty())
                                    Terakhir diperbarui: {{ $subCategory->programs->sortByDesc('updated_at')->first()->updated_at->diffForHumans() }}
                                @else
                                    Belum ada program
                                @endif
                            </small>
                            <a href="{{ route('programSubCategory.view', $subCategory->id) }}" class="btn btn-primary mt-auto">
                                <i class="bi bi-eye me-2"></i>Lihat Detail
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
@else
    <div class="alert alert-info text-center" role="alert">
        Tidak ada sub kategori untuk kategori ini.
    </div>      
    @endif
    </div>
@endsection
