@extends('admin.layout.authentication')
@section('title', 'Register')

@section('content')

<div class="auth_brand">
    <a class="navbar-brand" href="#"><img src="{{ asset('admin/assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
</div>
<div class="card">
    <div class="header">
        <p class="lead">Yönetici Kaydı</p>
    </div>
    <div class="body">
        <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Facebook ile giriş yap</button>
        <div class="separator-linethrough"><span>Veya</span></div>
        <form  class="form-auth-small" method="POST" action="{{ route('register.submit')}}">
            @csrf <!-- CSRF koruması için gerekli -->
            <div class="form-group c_form_group">
                <label>Ad</label>
                <input type="text" class="form-control" placeholder="Adınızı Giriniz!" name="name">
            </div>
            <div class="form-group c_form_group">
                <label>Soyadı</label>
                <input type="text" class="form-control" placeholder="Soyadınızı Giriniz!" name="surname">
            </div>
            <div class="form-group c_form_group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Mail Adresinizi Giriniz!" name="email">
            </div>
            <div class="form-group c_form_group">
                <label>Şifre</label>
                <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="password">
            </div>
            <!--<a  type="submit" class="btn btn-dark btn-lg btn-block" href="{{route('authentication.login')}}">Kayıt Ol</a> -->
            <button type="submit" class="btn btn-dark btn-lg btn-block" href="{{ route('authentication.register')}}">Kayıt Ol</button>
            <div class="bottom">
                <span>Zaten bir hesabınız var mı? <a href="{{ route('authentication.login') }}">Login</a></span>
            </div>
        </form>
    </div>
</div>

@stop
