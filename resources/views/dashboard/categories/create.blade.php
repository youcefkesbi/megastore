@extends ('layouts.dashboard')
@section('content')

<h1>Add Category</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="icon" class="form-label">Category icon</label>
                <input type="file" name="icon" id="icon" class="form-control">
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-dark">Save category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection