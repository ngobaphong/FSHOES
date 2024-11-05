@extends('layouts.layout1')

@section('title', 'Đăng nhập')

@section('content')
<div class="login-container">
    <h1>Đăng Nhập</h1>
    <form id="login-form" method="POST" action="{{ route('login') }}">
        @csrf <!-- Thêm CSRF token để bảo mật -->

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Nhập email" required>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>

        <!-- Checkbox Remember Me -->
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Ghi nhớ đăng nhập</label>
        </div>

        <button type="submit">Đăng Nhập</button>
    </form>

    <!-- Liên kết Quên mật khẩu -->
    <div class="forgot-password">
        <a href="">Quên mật khẩu?</a>
    </div>

    <!-- Liên kết chưa có tài khoản -->
    <p class="signup-link">Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a></p>

    <div id="error-message"></div>
</div>
@endsection
