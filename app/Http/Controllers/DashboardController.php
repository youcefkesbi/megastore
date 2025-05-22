<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        $ordersCount = Order::count();
        $completedOrders = Order::where('status', 'completed')->count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();

        $productsCount = Product::count();

        $usersCount = User::count();

        return view('dashboard.index', compact('ordersCount', 'completedOrders', 'pendingOrders', 'cancelledOrders', 'productsCount', 'usersCount'));
    }
}
