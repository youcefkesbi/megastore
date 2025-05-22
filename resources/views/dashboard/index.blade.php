@extends('layouts.dashboard')
@section('content')

<div class="container">
    <h2>Dashboard</h2>
    <div class="row">

        <div class="col-sm-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Total Orders</h5>
                        <h3>{{ $ordersCount }}</h3>
                    </div>
                </div>
        </div>

        <div class="col-sm-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <h3>{{ $productsCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5>Total Users</h5>
                    <h3>{{ $usersCount }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Orders Chart</h5>
                    <canvas id="ordersChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Products Chart</h5>
                    <canvas id="productsChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Users Chart</h5>
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