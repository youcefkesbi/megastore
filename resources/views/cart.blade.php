@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>Cart</h1>
        @if (session ('cart') && count (session ('cart')) > 0)
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('cart') as $id => $product)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' .$product['image']) }}" width="50">
                    </td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" id="id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $product['quantity'] }}" min="1" class="form-control">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>
                    <td>${{ $product['price'] * $product['quantity'] }}</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>

        @endif
    </div>
@endsection