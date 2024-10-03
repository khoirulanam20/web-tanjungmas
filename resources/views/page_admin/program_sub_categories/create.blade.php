@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Create Program Sub Category</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('program_sub_categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="program_category_id" class="form-label">Program Category</label>
                        <select class="form-control" id="program_category_id" name="program_category_id" required>
                            @foreach($programCategories as $programCategory)
                                <option value="{{ $programCategory->id }}">{{ $programCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
