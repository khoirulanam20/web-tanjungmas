@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Edit Program</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $program->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required>{{ $program->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="program_category_id" class="form-label">Program Category</label>
                        <select class="form-control" id="program_category_id" name="program_category_id" required>
                            @foreach($programCategories as $programCategory)
                                <option value="{{ $programCategory->id }}" {{ $program->program_category_id == $programCategory->id ? 'selected' : '' }}>{{ $programCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="program_sub_category_id" class="form-label">Program Sub Category</label>
                        <select class="form-control" id="program_sub_category_id" name="program_sub_category_id" required>
                            @foreach($programSubCategories as $programSubCategory)
                                <option value="{{ $programSubCategory->id }}" {{ $program->program_sub_category_id == $programSubCategory->id ? 'selected' : '' }}>{{ $programSubCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if ($program->image)
                            <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" width="100" class="mt-2">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection