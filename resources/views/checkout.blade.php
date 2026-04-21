@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h2 class="h4 mb-3">Checkout</h2>
            <p class="text-muted mb-4">
                Review your cart and place the order. Payment integration can be completed from the Stripe page.
            </p>

            <div class="d-flex gap-2">
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark">Place Order</button>
                </form>
                <a href="{{ route('cart.view') }}" class="btn btn-outline-secondary">Back to Cart</a>
                <a href="{{ route('stripe') }}" class="btn btn-outline-primary">Pay with Stripe</a>
            </div>
        </div>
    </div>
</div>

@endsection