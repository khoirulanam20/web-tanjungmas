@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Articles</h4>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Create Article</a>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->content }}</td>
                                    <td>
                                        @if ($article->category)
                                            <span class="badge bg-primary">{{ $article->category->name }}</span>
                                        @else
                                            <span class="badge bg-secondary">No Category</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($article->image)
                                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" width="100">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Categories</h4>

        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCategoryModal">Create Category</a>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-bs-id="{{ $category->id }}" data-bs-name="{{ $category->name }}">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Create Category Modal -->
        <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createCategoryModalLabel">Create Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="createCategoryForm" action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editCategoryForm" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="edit_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var editCategoryModal = document.getElementById('editCategoryModal');
                editCategoryModal.addEventListener('show.bs.modal', function (event) {
                    var button = event.relatedTarget;
                    var categoryId = button.getAttribute('data-bs-id');
                    var categoryName = button.getAttribute('data-bs-name');

                    var modalTitle = editCategoryModal.querySelector('.modal-title');
                    var modalBodyInput = editCategoryModal.querySelector('.modal-body input#edit_name');
                    var form = editCategoryModal.querySelector('form#editCategoryForm');

                    modalTitle.textContent = 'Edit Category: ' + categoryName;
                    modalBodyInput.value = categoryName;
                    form.action = '/categories/' + categoryId;
                });
            });
        </script>
    </div>
@endsection
