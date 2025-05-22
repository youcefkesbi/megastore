@extends ('layouts.dashboard')
@section('content')

<h1>Manage Products</h1>
<a href="{{ route('products.create') }}" class="btn btn-dark">Add New Product</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Image</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $product->image) }}" alt="" width="50">
            </td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="" class="btn btn-primary">Update</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection