@extends ('layouts.dashboard')
@section('content')

<h1>Manage Categories</h1>
<a href="{{ route('categories.create') }}" class="btn btn-dark">Add New Category</a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Icon</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $category->icon) }}" alt="" width="50">
            </td>
            <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
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