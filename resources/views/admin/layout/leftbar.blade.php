<!-- Main left sidebar menu -->
<div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <a href="{{route('anasayfa.index')}}"><img src="{{ asset('admin/assets/images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{ asset('admin/assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>MİM Reklam</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Fethi Sağır</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="page-profile.html"><i class="fa fa-user"></i>Profilim</a></li>
                            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Mesajlar</a></li>
                            <li><a href="setting.html"><i class="fa fa-gear"></i>Ayarlar</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('authentication.logout')}}"><i class="fa fa-power-off"></i>Oturumu Kapat</a></li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="header">Anasayfa</li>
                        <li class="active"><a href="{{route('anasayfa.index')}}"><i class="fa fa-dashboard"></i> <span>Güncel Durum</span></a></li>
                        <li class="header">Menü</li>
                        <li>
                            <a href="#Cariler" class="has-arrow"><i class="fa fa-folder"></i><span>Cariler</span></a>
                            <ul>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                                <li><a href="{{route('caris.index')}}">Cari listesi</a></li>
                            </ul>
                        </li>
                        <li><a href="app-contacts.html"><i class="fa fa-address-book"></i> <span>Personel</span></a></li>
                        <li><a href="map-jvectormap.html"><i class="fa fa-map"></i> <span>Harita</span></a></li>
                        <li class="extra_widget">
                            <div class="form-group">
                                <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Server Load <span class="float-right">50%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
