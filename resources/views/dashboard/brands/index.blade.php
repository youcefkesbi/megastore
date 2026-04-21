@extends ('layouts.dashboard')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Brands</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-dark">Add Brand</a>
</div>

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($brands as $brand)
                <tr>
                    <td>
                        @if ($brand->logo)
                            <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}" width="50" class="rounded">
                        @else
                            <span class="text-muted">No logo</span>
                        @endif
                    </td>
                    <td>{{ $brand->name }}</td>
                    <td class="text-end">
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted py-4">No brands found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection