@extends('template_web.layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center mb-5 text-danger fw-bold">Kategori: {{ $category->name }}</h1>
                
                @if($articles->isNotEmpty())
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        @foreach($articles as $article)
                            <div class="col">
                                <div class="card h-100 shadow-sm d-flex flex-column">
                                    @if($article->image)
                                        <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top" alt="Placeholder" style="height: 200px; object-fit: cover;">
                                    @endif
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fw-bold mb-3">{{ Str::limit($article->title, 50) }}</h5>
                                        <div class="d-flex justify-content-between align-items-center text-muted mb-4">
                                            <p class="mb-0"><i class="bi bi-calendar-event me-2"></i>{{ $article->created_at->format('d F Y') }}</p>
                                            <p class="mb-0"><i class="bi bi-folder me-2"></i>{{ $category->name }}</p>
                                        </div>
                                        <p class="card-text flex-grow-1">{{ Str::limit($article->content, 100) }}</p>
                                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-danger mt-auto">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info text-center" role="alert">
                        Tidak ada artikel dalam kategori ini.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
