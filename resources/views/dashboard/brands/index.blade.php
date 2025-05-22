@extends ('layouts.dashboard')
@section('content')

<h1>Manage Brands</h1>
<a href="{{ route('brands.create') }}" class="btn btn-dark">Add New Brand</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Logo</th>
            <th>Brand Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
        <tr>
            <td>
                <img src="{{ asset('storage/' . $brand->logo) }}" alt="" width="50">
            </td>
            <td>{{ $brand->name }}</td>
            <td>
                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="d-inline">
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