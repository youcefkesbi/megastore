@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-0">Cart</h1>
            <a href="{{ route('shop') }}" class="btn btn-outline-secondary">Continue Shopping</a>
        </div>

        @if (session('cart') && count(session('cart')) > 0)
            @php
                $grandTotal = collect(session('cart'))->sum(fn($product) => $product['price'] * $product['quantity']);
            @endphp

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th style="width: 180px;">Quantity</th>
                                <th>Total</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('cart') as $id => $product)
                            <tr>
                                <td>
                                    @if (!empty($product['image']))
                                        <img src="{{ asset('storage/' . $product['image']) }}" width="56" class="rounded" alt="{{ $product['name'] }}">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>
                                <td>{{ $product['name'] }}</td>
                                <td>${{ number_format($product['price'], 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex gap-2">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $product['quantity'] }}" min="1" class="form-control form-control-sm">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Update</button>
                                    </form>
                                </td>
                                <td>${{ number_format($product['price'] * $product['quantity'], 2) }}</td>
                                <td class="text-end">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <h5 class="mb-0">Total: ${{ number_format($grandTotal, 2) }}</h5>
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark">Place Order</button>
                </form>
            </div>
        @else
            <div class="alert alert-light border mb-0">Your cart is empty.</div>
        @endif
    </div>
@endsection