<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders()->where('status', 'pending')->get();
        $orderHistory = $user->orders()->where('status', 'completed')->get();

        return view('orders', compact('orders', 'orderHistory'));
    }
}
