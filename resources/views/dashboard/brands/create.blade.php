@extends ('layouts.dashboard')
@section('content')

<h1>Add Brand</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Brand name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="logo" class="form-label">Brand logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-dark">Save brand</button>
                <a href="{{ route('brands.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection