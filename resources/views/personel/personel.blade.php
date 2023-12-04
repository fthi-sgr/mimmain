@extends('admin.layout.layout')

@section('title')

@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->

@endsection()

@section('content')
    <!-- Page header section  -->
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-xl-5 col-md-5 col-sm-12">
                <h1>Hi, Welcomeback!</h1>
                <span>JustDo @yield('title'),</span>
            </div>
            <div class="col-xl-7 col-md-7 col-sm-12 text-md-right">
                <div class="d-flex align-items-center justify-content-md-end mt-4 mt-md-0 flex-wrap vivify pullUp delay-550">

                    <div class="mb-3 mb-xl-0">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addnote">Personel ekle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-12">
            <div class="card bg-clear">
                <div class="header">
                    <ul class="nav nav-tabs3">
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#yönetim-Personel">Yönetim</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#projeYöneticisi-Personel">Proje
                                Yöneticisi</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#müsteriTemsilcisi-Personel">Müşteri
                                Temsilcisi</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#grafiker-Personel">Grafiker</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#muhasebe-Personel">Muhasebe</a></li>


                    </ul>
                    <ul class="header-dropdown dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="tab-content mt-0">
                        <div class="tab-pane show active" id="yönetim-Personel">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card contact_card">
                                        <div class="header">

                                        </div>
                                        <div class="body text-center">
                                            <div class="circle">
                                                <img class="rounded-circle"
                                                    src="{{ asset('admin/assets/images/sm/avatar1.jpg') }}" alt="">
                                            </div>
                                            <h6 class="mt-3 mb-0">Michelle Green</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-slack"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">Follow</button>
                                            <button class="btn btn-default btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane " id="projeYöneticisi-Personel">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card contact_card">
                                        <div class="header">

                                        </div>
                                        <div class="body text-center">
                                            <div class="circle">
                                                <img class="rounded-circle"
                                                    src="{{ asset('admin/assets/images/sm/avatar1.jpg') }}" alt="">
                                            </div>
                                            <h6 class="mt-3 mb-0">Fethi sağır</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-slack"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">Follow</button>
                                            <button class="btn btn-default btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane " id="müsteriTemsilcisi-Personel">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card contact_card">
                                        <div class="header">

                                        </div>
                                        <div class="body text-center">
                                            <div class="circle">
                                                <img class="rounded-circle"
                                                    src="{{ asset('admin/assets/images/sm/avatar1.jpg') }}" alt="">
                                            </div>
                                            <h6 class="mt-3 mb-0">Fethi sağır</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-slack"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">Follow</button>
                                            <button class="btn btn-default btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane " id="grafiker-Personel">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card contact_card">
                                        <div class="header">

                                        </div>
                                        <div class="body text-center">
                                            <div class="circle">
                                                <img class="rounded-circle"
                                                    src="{{ asset('admin/assets/images/sm/avatar1.jpg') }}" alt="">
                                            </div>
                                            <h6 class="mt-3 mb-0">Fethi sağır</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-slack"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">Follow</button>
                                            <button class="btn btn-default btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane " id="muhasebe-Personel">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card contact_card">
                                        <div class="header">

                                        </div>
                                        <div class="body text-center">
                                            <div class="circle">
                                                <img class="rounded-circle"
                                                    src="{{ asset('admin/assets/images/sm/avatar1.jpg') }}" alt="">
                                            </div>
                                            <h6 class="mt-3 mb-0">Fethi sağır</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-slack"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="javascript:void(0);"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                            <button class="btn btn-default btn-sm">Follow</button>
                                            <button class="btn btn-default btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-styles')
@stop

@section('vendor-script')
@stop

@section('page-script')
@stop
