@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2>Secure Payment</h2>

    <form action="" method="POST">
        @csrf
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button">
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $totalAmount * 100 }}" // Amount in cents
            data-name="My Store"
            data-description="Pay with card"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
        </script>

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
        <div class="mb-3">
            <label for="stripe_token" class="form-label">Stripe Token:</label>
            <input type="text" class="form-control" id="stripe_token" name="stripe_token" required>
        </div>
        <button type="submit" class="btn btn-success">Place Order</button>
        <a href="{{ route('cart.view') }}" class="btn btn-secondary">Back to cart</a>
    </form>
    <script src="https://js.stripe.com/v3/"></script>    
    <script>        

    </div>
@endsection