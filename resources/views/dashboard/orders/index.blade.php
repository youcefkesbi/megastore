@extends('layouts.dashboard')
@section('content')

<h1>Orders</h1>

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr>
                    <td>#{{ $order->id }}</td>
                    <td>{{ $order->user->name ?? 'Unknown user' }}</td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                    <td>
                        <span class="badge text-bg-light border text-capitalize">{{ $order->status }}</span>
                    </td>
                    <td>{{ $order->updated_at?->format('Y-m-d H:i') ?? '-' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">No orders found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection