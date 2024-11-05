<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Lấy đơn hàng hiện tại với trạng thái 'pending'
        $orders = $user->orders()->where('status', 'pending')->get();

        // Lấy lịch sử mua hàng (các đơn hàng không có trạng thái 'pending')
        $orderHistory = $user->orders()->where('status', '!=', 'pending')->get();

        // Truyền dữ liệu sang view
        return view('profile.profile', compact('user', 'orders', 'orderHistory'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email'));

        return redirect()->route('profile')->with('success', 'Thông tin đã được cập nhật.');
    }
}
