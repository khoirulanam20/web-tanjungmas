@extends('template_web.layout')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 text-danger fw-bold">Daftar Kategori Program</h1>
    <div class="row justify-content-center">
        @foreach($programCategories as $programCategory)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3">{{ $programCategory->name }}</h4>
                        <a href="{{ route('kelembagaan.show_sub', $programCategory->id) }}" class="btn btn-danger">Lihat Kategori</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
