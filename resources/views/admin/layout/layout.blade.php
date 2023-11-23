<!doctype html>
<html lang="en">

<head>
<title> @yield("title") </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate-css/vivify.min.css') }}">

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/c3/c3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastr/toastr.min.cs') }}s">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>





<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/sweetalert/sweetalert.css') }}"/>
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/mooli.min.css') }}"> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@yield('css')


<body>
    
<div id="body" class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('admin/assets/images/icon.svg') }}" width="40" height="40" alt="Mooli"></div>
            <p>Lütfen Bekleyin...</p>        
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.html"><img src="{{ asset('admin/assets/images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                    </div>
                   
                </div>
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" class="right_note icon-menu" title="Right Menu">Notlar</a></li>
                            <li class="dropdown hidden-xs">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">Ekle</a>
                                <div class="dropdown-menu pb-0 mt-0">
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Personel</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Ürün</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Kategori</a>
                                    <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);">Rapor</a>
                                </div>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="notification-dot msg">4</span>
                                </a>
                                <ul class="dropdown-menu right_chat email mt-0 animation-li-delay">
                                    <li class="header theme-bg gradient mt-0 text-light">You have 4 New eMail</li>
                              
                                </ul>
                            </li>
                           
                            <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                            <li><a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main left sidebar menu -->
        <div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <a href="index.html"><img src="assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="assets/images/user.png" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>MİM Reklam</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Fethi Sağır</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="page-profile.html"><i class="fa fa-user"></i>Profilim</a></li>
                            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Mesajlar</a></li>
                            <li><a href="setting.html"><i class="fa fa-gear"></i>Ayarlar</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="fa fa-power-off"></i>Oturumu Kapat</a></li>
                        </ul>
                    </div>
                </div>  
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="header">Anasayfa</li>
                        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Güncel Durum</span></a></li>                        
                        <li>
                            <a href="#Cariler" class="has-arrow"><i class="fa fa-folder"></i><span>Cariler</span></a>
                            <ul>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                                <li><a href="resources/views/caris/index.blade.php">Cari listesi</a></li>
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
        <!-- Right bar chat  -->
        <div id="rightbar" class="rightbar">
            <div class="slim_scroll">s
                
                <div class="chat_list">
                    <form>
                        <div class="input-group c_input_group">
                            
                        </div>
                    </form>
                    <div class="body">
                        <ul class="nav nav-tabs3 white mt-3 d-flex text-center">
                            <li class="nav-item flex-fill"><a class="nav-link active show" data-toggle="tab" href="#chat-Users">Chat</a></li>
                            <li class="nav-item flex-fill"><a class="nav-link" data-toggle="tab" href="#chat-Groups">Groups</a></li>
                            <li class="nav-item flex-fill"><a class="nav-link mr-0" data-toggle="tab" href="#chat-Contact">Contact</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stiky note div  -->
        <div class="sticky-note">
            <a href="javascript:void(0);" class="right_note"><i class="fa fa-close"></i></a>
            <div class="form-group c_form_group">
                <label>Notunuzu ekleyin..</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter here...">
                    <div class="input-group-append"><button class="btn btn-dark btn-sm" type="button">Ekle</button></div>
                </div>
            </div>

        </div>





        <div id="main-content">



        @yield('content')
      


        </div>



        </div>
</div>

<!-- Javascript -->
<script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script>

<!-- Vedor js file and create bundle with grunt  --> 
<script src="{{ asset('admin/assets/bundles/flotscripts.bundle.js') }}"></script><!-- flot charts Plugin Js -->
<script src="{{ asset('admin/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/toastr/toastr.js') }}"></script>



<script src="{{asset('admin/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/sweetalert/sweetalert.min.js')}}"></script><!-- SweetAlert Plugin Js --> 


<!-- Project core js file minify with grunt --> 
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="../js/index.js"></script>


@yield('js')
</body>
</html>
