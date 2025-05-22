@extends ('layouts.dashboard')
@section('content')

<h1>Add New Brand</h1>

<form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Brand Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="logo" class="form-label">Brand Logo</label>
        <input type="file" name="logo" id="logo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Add Brand</button>
</form>

@endsection