@extends('template_web.layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="text-center mb-5 text-danger fw-bold">{{ $programSubCategory->name }}</h1>
            
            @if($programs->isNotEmpty())
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach($programs as $program)
                        <div class="col">
                            <div class="card h-100 shadow-sm d-flex flex-column">
                                @if($program->image)
                                    <img src="{{ asset($program->image) }}" class="card-img-top" alt="{{ $program->title }}" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/placeholder.jpg') }}" class="card-img-top"    alt="Placeholder" style="height: 200px; object-fit: cover;">
                                @endif
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold mb-3">{{ Str::limit($program->title, 50) }}</h5>
                                    <div class="d-flex justify-content-between align-items-center text-muted mb-4">
                                        <p class="mb-0"><i class="bi bi-calendar-event me-2"></i>{{ $program->created_at->format('d F Y') }}</p>
                                        <p class="mb-0"><i class="bi bi-folder me-2"></i>{{ $program->programSubCategory->name }}</p>
                                    </div>
                                    <a href="{{ route('kelembagaan.show', $program->id) }}" class="btn btn-danger mt-auto">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info text-center" role="alert">
                    Tidak ada program dalam sub kategori ini.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
