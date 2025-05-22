@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Checkout</h2>

    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="shipping_address" class="form-label">Shipping Address:</label>
            <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
        </div>

        <div class="mb-3">
            <label for="payment_method_id" class="form_label">Select Payment Method:</label>
            <select class="form-control" id="payment_method_id" name="payment_method_id" required>
                @foreach ($paymentMethods as $method)
                    <option value="{{ $method->id }}">{{ $method->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Place Order</button>
        <a href="{{ route('cart.view') }}" class="btn btn-secondary">Back to cart</a>
    </form>
</div>

@endsection