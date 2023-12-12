<!doctype html>
<html lang="en">

<head>
<title> @yield("title","Admin Sayfası") </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
@yield('meta')

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate-css/vivify.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-steps/jquery.steps.css')}}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/sweetalert/sweetalert.css') }}">
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/mooli.min.css') }}">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


@yield('css')
</head>

<body>

<div id="body" class="theme-cyan">
       <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Loader-->
        @include("admin.layout.loader")

        <!-- main page header -->
        @include("admin.layout.topnavbar")

        <!-- Main left sidebar menu -->
        @include("admin.layout.leftbar")

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
                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>
    </div>

    @yield('popup')

</div>
@stack('before-scripts')
<script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
@stack('after-scripts')

<!-- Vedor js file and create bundle with grunt  -->
<script src="{{ asset('admin/assets/bundles/flotscripts.bundle.js') }}"></script><!-- flot charts Plugin Js -->
<script src="{{ asset('admin/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/toastr/toastr.js') }}"></script>

<!-- Datatable scripts -->
<script src="{{ asset('admin/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/sweetalert/sweetalert.min.js') }}"></script><!-- SweetAlert Plugin Js -->

<!-- Project core js file minify with grunt -->
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/index.js') }}"></script>
<!-- pdfmake için bağlantı -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>





@yield('js')
</body>
</html>
