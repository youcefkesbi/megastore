@extends('layouts.dashboard')
@section('content')

<div class="container">
    <h2 class="mb-3">Dashboard</h2>
    <div class="row g-3">

        <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h6 class="text-secondary">Total Orders</h6>
                        <h3>{{ $ordersCount }}</h3>
                    </div>
                </div>
        </div>

        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body">
                    <h6 class="text-secondary">Total Products</h6>
                    <h3>{{ $productsCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card border-0">
                <div class="card-body">
                    <h6 class="text-secondary">Total Users</h6>
                    <h3>{{ $usersCount }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">

        <div class="col-sm-6">
            <div class="card border-0">
                <div class="card-body">
                    <h6 class="text-center text-secondary">Orders</h6>
                    <canvas id="ordersChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card border-0">
                <div class="card-body">
                    <h6 class="text-center text-secondary">Products</h6>
                    <canvas id="productsChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-12">
            <div class="card border-0">
                <div class="card-body">
                    <h6 class="text-center text-secondary">Users</h6>
                    <canvas id="usersChart"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Orders Chart
var ctxOrders = document.getElementById('ordersChart').getContext('2d');
var ordersChart = new Chart(ctxOrders, {
    type: 'doughnut',
    data: {
        labels: ['Completed Orders', 'Pending Orders', 'Cancelled Orders'],
        datasets: [{
            label: 'Orders',
            data: [{{ $completedOrders }}, {{ $pendingOrders }}, {{ $cancelledOrders }}],
            backgroundColor:['green', 'orange', 'red'],
        }]
    },
});

// Products Chart
var ctxProducts = document.getElementById('productsChart').getContext('2d');
var productsChart = new Chart(ctxProducts, {
    type: 'bar',
    data: {
        labels: ['Total Products'],
        datasets: [{
            label: 'Products',
            data: [{{ $productsCount }}],
            backgroundColor:['blue'],
        }]
    },
});

// Users Chart
var ctxUsers = document.getElementById('usersChart').getContext('2d');
var usersChart = new Chart(ctxUsers, {
    type: 'pie',
    data: {
        labels: ['Total Users'],
        datasets: [{
            label: 'Users',
            data: [{{ $usersCount }}],
            backgroundColor:['purple'],
        }]
    },
});

</script>

@endsection