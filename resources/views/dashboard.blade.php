@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h1 class="h4 mb-2">Dashboard</h1>
                <p class="text-muted mb-4">You are signed in successfully.</p>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('shop') }}" class="btn btn-dark">Go to Shop</a>
                    <a href="{{ route('cart.view') }}" class="btn btn-outline-secondary">View Cart</a>
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-secondary">My Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
