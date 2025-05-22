@extends('layouts.dashboard')
@section('content')

<h2>Orders Management</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>User</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Update</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name }}</td>
            <td>${{ number_format($order->total_price, 2) }}</td>
            <td>
                <form action="">
                    @csrf
                    <select name="status" class="form-control" onchange="this.form.submit()">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                    </select>
                </form>
            </td>
            <td>{{ $order->update_at->format('Y-m-d H:i') }}</td>
            <td>
                <form action="">
                    @csrf
                    <button type="submit" class="btn btn-danger">Update</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection