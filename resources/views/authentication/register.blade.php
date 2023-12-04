<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    @yield('meta')

    @stack('before-styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate-css/vivify.min.css') }}">
    @stack('after-styles')

    @if (trim($__env->yieldContent('page-styles')))
        @yield('page-styles')
    @endif
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/mooli.min.css') }}">
</head>

<body class="theme-cyan">

    <div class="auth-main">

        <div class="auth_div vivify fadeIn">

            <div class="auth_brand">
                <a class="navbar-brand" href="#"><img src="{{ asset('admin/assets/images/icon.svg') }}"
                        width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Yönetici Kaydı</p>
                </div>
                <div class="body">
                    <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i>
                        Facebook ile giriş
                        yap</button>
                    <div class="separator-linethrough"><span>Veya</span></div>
                    <form class="form-auth-small" method="POST" action="{{ route('register.submit') }}">
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
                            <input type="email" class="form-control" placeholder="Mail Adresinizi Giriniz!"
                                name="email">
                        </div>
                        <div class="form-group c_form_group">
                            <label>Şifre</label>
                            <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="password">
                        </div>
                        <!--<a  type="submit" class="btn btn-dark btn-lg btn-block" href="{{ route('authentication.login') }}">Kayıt Ol</a> -->
                        <button type="submit" class="btn btn-dark btn-lg btn-block"
                            href="{{ route('authentication.register') }}">Kayıt Ol</button>
                        <div class="bottom">
                            <span>Zaten bir hesabınız var mı? <a
                                    href="{{ route('authentication.login') }}">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    @stack('before-scripts')
    <script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
    @stack('after-scripts')

    @if (trim($__env->yieldContent('page-script')))
        @yield('page-script')
    @endif

</body>

</html>
