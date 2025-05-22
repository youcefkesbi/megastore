@extends ('layouts.dashboard')
@section('content')

<h1>Add New Category</h1>

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name">Category Name :</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="icon" class="form-label">Category Icon :</label>
        <input type="file" name="icon" id="icon" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Add new Category</button>
</form>

@endsection