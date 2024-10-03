@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Create Program</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="program_category_id" class="form-label">Program Category</label>
                        <select class="form-control" id="program_category_id" name="program_category_id" required>
                            @foreach($programCategories as $programCategory)
                                <option value="{{ $programCategory->id }}">{{ $programCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="program_sub_category_id" class="form-label">Program Sub Category</label>
                        <select class="form-control" id="program_sub_category_id" name="program_sub_category_id" required>
                            @foreach($programSubCategories as $programSubCategory)
                                <option value="{{ $programSubCategory->id }}" data-category-id="{{ $programSubCategory->program_category_id }}">
                                    {{ $programSubCategory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categorySelect = document.getElementById('program_category_id');
        const subCategorySelect = document.getElementById('program_sub_category_id');
        const subCategoryOptions = subCategorySelect.querySelectorAll('option');

        categorySelect.addEventListener('change', function () {
            const selectedCategoryId = this.value;

            subCategoryOptions.forEach(option => {
                if (option.getAttribute('data-category-id') === selectedCategoryId) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });

            // Reset the sub category selection
            subCategorySelect.value = '';
        });

        // Trigger change event on page load to set initial state
        categorySelect.dispatchEvent(new Event('change'));
    });
</script>
@endsection
