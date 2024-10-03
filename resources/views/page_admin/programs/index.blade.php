@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Program Articles</h4>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('programs.create') }}" class="btn btn-primary mb-3">Create Program Article</a>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programArticles as $programArticle)
                                <tr>
                                    <td>{{ $programArticle->title }}</td>
                                    <td>{{ $programArticle->description }}</td>
                                    <td>
                                        @if ($programArticle->programCategory)
                                            <span class="badge bg-primary">{{ $programArticle->programCategory->name }}</span>
                                        @else
                                            <span class="badge bg-secondary">No Category</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($programArticle->programSubCategory)
                                            <span class="badge bg-primary">{{ $programArticle->programSubCategory->name }}</span>
                                        @else
                                            <span class="badge bg-secondary">No Sub Category</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($programArticle->image)
                                            <img src="{{ asset($programArticle->image) }}" alt="{{ $programArticle->title }}" width="100">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('programs.edit', $programArticle->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('programs.destroy', $programArticle->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Program Categories</h4>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('program_categories.create') }}" class="btn btn-primary mb-3">Create Program Category</a>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programCategories as $programCategory)
                                <tr>
                                    <td>{{ $programCategory->name }}</td>
                                    <td>
                                        <a href="{{ route('program_categories.edit', $programCategory->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('program_categories.destroy', $programCategory->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Program Sub Categories</h4>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('program_sub_categories.create') }}" class="btn btn-primary mb-3">Create Program Sub Category</a>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programSubCategories as $programSubCategory)
                                <tr>
                                    <td>{{ $programSubCategory->name }}</td>
                                    <td>{{ $programSubCategory->programCategory->name }}</td>
                                    <td>
                                        <a href="{{ route('program_sub_categories.edit', $programSubCategory->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('program_sub_categories.destroy', $programSubCategory->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection