@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card border-0 shadow-sm">
    <div class="card-body p-4">
    <h2 class="h4 mb-3">Secure Payment</h2>

    <p class="text-muted">Amount due: <strong>${{ number_format($amount ?? 0, 2) }}</strong></p>

    <form action="{{ route('stripe.post') }}" method="POST">
        @csrf
        <script
            src="https://checkout.stripe.com/checkout.js"
            class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ (int) (($amount ?? 0) * 100) }}"
            data-name="MegaStore"
            data-description="Order payment"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
        </script>
    </form>

    <a href="{{ route('cart.view') }}" class="btn btn-outline-secondary mt-3">Back to cart</a>
    </div>
    </div>
</div>
@endsection