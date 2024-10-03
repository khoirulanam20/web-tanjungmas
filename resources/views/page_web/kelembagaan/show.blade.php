@extends('template_web.layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                @if ($program->image)
                    <img src="{{ asset($program->image) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $program->title }}">
                @endif
                
                <h1 class="fw-bold text-danger mb-3">{{ $program->title }}</h1>
                
                <div class="d-flex justify-content-between align-items-center text-muted mb-4">
                    <p class="mb-0"><i class="bi bi-calendar-event me-2"></i>{{ $program->created_at->format('d F Y') }}</p>
                    <p class="mb-0"><i class="bi bi-folder me-2"></i>{{ $program->programCategory->name }}</p>
                </div>
                
                <div class="mb-4 lead">
                    {{ $program->description }}
                </div>
                
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Program</h5>
                        <ul class="list-unstyled mb-0">
                            <li><strong>Program</strong> {{ $program->programCategory->name }}</li>
                            <li><strong>Kategori:</strong> {{ $program->programSubCategory->name }}</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
