@extends('layouts.layout1')

@section('title', 'Đăng kí')

@section('content')

<div class="register-container">
    <h1>Đăng Ký Tài Khoản</h1>
    <form id="register-form" method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Tên đăng nhập:</label>
        <input type="text" id="name" name="name" placeholder="Tên đăng nhập" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" placeholder="Mật khẩu" required>

        <label for="password_confirmation">Xác nhận mật khẩu:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>

        <button type="submit">Đăng Ký</button>
    </form>

    <div id="error-message"></div>
</div>

@endsection
