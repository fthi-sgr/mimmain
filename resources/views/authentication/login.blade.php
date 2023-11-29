@extends('admin.layout.authentication')
@section('title', 'Login')

@section('content')
    <div class="auth_brand">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
    </div>
    <div class="card">
        <div class="header">
            <p class="lead">Login to your account</p>
        </div>
        <div class="body">
            <form method="POST" class="form-auth-small" action="{{ route('login.custom') }}">
                @csrf <!-- CSRF koruması için gerekli -->
                <div class="form-group c_form_group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Mail adresinizi giriniz!" name="email" required autofocus>
                </div>
                <div class="form-group c_form_group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Şifrenizi giriniz!" name="password" required>
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                <div class="bottom">

                    <span>Don't have an account? <a href="{{ route('authentication.register') }}">Register</a></span>
                </div>
            </form>
        </div>
    </div>
@stop
