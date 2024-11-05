@extends('layouts.layout1')

@section('title', 'Trang cá nhân')

@section('content')
<div class="profile-container">
    <!-- Thông tin cá nhân và Ảnh đại diện -->
    <div class="profile-left">
        <div class="profile-avatar">
            <img src="{{ asset('customer/img/default-avatar.jpg') }}" alt="Avatar">
        </div>
        <div class="profile-info">
            <!-- <form action="{{ route('profile.update') }}" method="POST"> -->
                @csrf
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>

                <button type="submit" class="btn btn-save">Lưu thay đổi</button>
            </form>
        </div>
    </div>

    
    <div class="profile-right">
        <h2>Đơn Hàng Hiện Tại</h2>
        <ul class="order-list">
            @forelse($orders ?? [] as $order)
                <li>
                    <span>Mã đơn: {{ $order->id }}</span>
                    <span>Trạng thái: {{ $order->status }}</span>
                    <span>Tổng: {{ number_format($order->total_amount, 0, ',', '.') }}₫</span>
                </li>
            @empty
                <p>Không có đơn hàng nào.</p>
            @endforelse
        </ul>

        <h2>Lịch Sử Mua Hàng</h2>
        <ul class="order-history-list">
            @forelse($orderHistory ?? [] as $order)
                <li>
                    <span>Mã đơn: {{ $order->id }}</span>
                    <span>Trạng thái: {{ $order->status }}</span>
                    <span>Tổng: {{ number_format($order->total_amount, 0, ',', '.') }}₫</span>
                </li>
            @empty
                <p>Chưa có lịch sử mua hàng.</p>
            @endforelse
        </ul>
    </div>
</div>
@endsection

