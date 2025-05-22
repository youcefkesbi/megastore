<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy("created_at","desc")->paginate(10);
        return view('dashboard.orders.index', compact('orders'));
    }
}