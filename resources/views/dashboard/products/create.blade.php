@extends ('layouts.dashboard')
@section('content')

<h1>Add New Product :</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name">Product Name :</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Category :</label>
        <select name="category_id" id="category_id" class="form-select" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="brand_id" class="form-label">Brand :</label>
        <select name="brand_id" id="brand_id" class="form-select" required>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price :</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock :</label>
        <input type="number" name="stock" id="stock" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image :</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description :</label>
        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Add New Product</button>
</form>

@endsection