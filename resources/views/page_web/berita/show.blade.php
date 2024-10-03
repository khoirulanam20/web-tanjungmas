@extends('template_web.layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                @if ($article->image)
                    <div class="image-container mb-4" style="height: 400px; overflow: hidden;">
                        <img src="{{ asset($article->image) }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="{{ $article->title }}">
                    </div>
                @endif
                
                <h1 class="fw-bold text-danger mb-3">{{ $article->title }}</h1>
                
                <div class="d-flex justify-content-between align-items-center text-muted mb-4">
                    <p class="mb-0"><i class="bi bi-calendar-event me-2"></i>{{ $article->created_at->format('d F Y') }}</p>
                    <p class="mb-0"><i class="bi bi-folder me-2"></i>{{ $article->category->name }}</p>
                </div>  
                
                <div class="mb-4 lead">
                    {{ $article->content }}
                </div>
                
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Artikel</h5>
                        <ul class="list-unstyled mb-0">
                            <li><strong>Kategori:</strong> {{ $article->category->name }}</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
