@extends('admin.layout.authentication')
@section('title', 'Register')

@section('content')

<div class="auth_brand">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
</div>
<div class="card">
    <div class="header">
        <p class="lead">Create an account</p>
    </div>
    <div class="body">
        <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
        <div class="separator-linethrough"><span>OR</span></div>
        <form method="POST" action="{{ route('register.custom') }}" class="form-auth-small">
            @csrf <!-- CSRF koruması için gerekli -->
            <div class="form-group c_form_group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Adınızı Giriniz!" name="name">
            </div>
            <div class="form-group c_form_group">
                <label>Surname</label>
                <input type="text" class="form-control" placeholder="Soyadınızı Giriniz!" name="surname">
            </div>
            <div class="form-group c_form_group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Mail Adresinizi Giriniz!" name="email">
            </div>
            <div class="form-group c_form_group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="password">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Kayıt Olun</button>
            <div class="bottom">
                <span>Zaten bir hesabınız var mı? <a href="{{ route('authentication.login') }}">Login</a></span>
            </div>
        </form>
    </div>
</div>

@stop
