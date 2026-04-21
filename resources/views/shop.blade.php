@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-0">Shop</h1>
            <a href="{{ route('cart.view') }}" class="btn btn-outline-dark">View Cart</a>
        </div>
        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card h-100 border-0 shadow-sm">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 220px; object-fit: cover;">
                        @else
                            <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="height: 220px;">
                                No image
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">{{ $product->name }}</h5>
                            <p class="card-text text-muted mb-3">{{ \Illuminate\Support\Str::limit($product->description, 70) }}</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">${{ number_format($product->price, 2) }}</span>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-dark">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border text-center mb-0">No products available yet.</div>
                </div>
            @endforelse
        </div>
    </div>
@endsection