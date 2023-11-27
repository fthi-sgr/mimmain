<!-- resources/views/caris/index.blade.php -->
@extends('admin.layout.layout')

@section('title')
@endsection

@section('css')
@endsection


@section('content')


<div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Merhba hoşgeldniz</h1>
                            <span>JustDo Dashboard,</span>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                            <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                                    <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">289</h5>
                                </div>
                                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                    <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">$541</h5>
                                </div>
                                <div class="mb-3 mb-xl-0">
                                    <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                                    <h5 class="mb-0">$98M</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
                           
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link" href="index.html">Analiz</a></li>
                                    <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link" href="finance.html">Finans Performans</a></li>  
                                   
                                </ul>
                                <div class="ml-auto">
                                    <a href="app-todo.html" class="btn btn-default">ToDo</a>
                                    <a href="setting.html" class="btn btn-default">Ayarlar</a>
                                    
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12">
                        <div class="card theme-bg gradient">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider1" class="carousel vert slide" data-ride="carousel" data-interval="2700">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Total Income</div>
                                                            <div class="mt-3 h1">$13,025</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">3.78% <i class="fa fa-caret-down"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Total Revenue</div>
                                                            <div class="mt-3 h1">$9,452</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.85% <i class="fa fa-caret-up"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Total Expense</div>
                                                            <div class="mt-3 h1">$4,124</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">2.04% <i class="fa fa-caret-down"></i></div>
                                                                <span>This year</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2800">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Total User</div>
                                                            <div class="mt-3 h1">1,258</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">7% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Sessions</div>
                                                            <div class="mt-3 h1">451</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">23.5% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Bounce Rate</div>
                                                            <div class="mt-3 h1">36.80</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">5% <i class="fa fa-caret-up"></i></div>
                                                                <span>This month</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Bitcoin Wallet</div>
                                                            <div class="mt-3 h1">4.25762</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">5.23% <i class="fa fa-caret-up"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Ethereum Wallet</div>
                                                            <div class="mt-3 h1">3.15948</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">1.85% <i class="fa fa-caret-up"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>NioWallet</div>
                                                            <div class="mt-3 h1">2.75342</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">1.25% <i class="fa fa-caret-down"></i></div>
                                                                <span>This Week</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="slider4" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div>Number of Meetings</div>
                                                            <div class="mt-3 h1">781</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                                <span>(30 days)</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div>Number of Clients</div>
                                                            <div class="mt-3 h1">10K</div>
                                                            <div class="d-flex">
                                                                <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                                <span>(30 days)</span>
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
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="section_title">
                            <div class="mr-3">
                                <h3>Genel Bakış</h3>
                                <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                            </div>
                            <div>
                                <div class="btn-group mb-3">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">14 March 2020</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Bugün</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Bu Hafta</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Geçen Hafta</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Bu Ay</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Geçen Ay</a>
                      
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Rapor</span></button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Belgele</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Bu Yılın Toplam Geliri</h2>
                                <small class="text-muted font-12">Günlük,Haftalık ve Aylık işlemlerin Grafiği </small>
                                <ul class="header-dropdown dropdown">
                                    
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu theme-bg gradient">
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> Detaylar</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Paylaş</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Kopyala</a></li>      
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="d-flex flex-row">
                                    <div class="pb-3">
                                        <h5 class="mb-0">$3,056</h5>
                                        <small class="text-muted font-11">Toplam Gelir</small>
                                    </div>
                                    <div class="pb-3 pl-4 pr-4">
                                        <h5 class="mb-0">$1,098</h5>
                                        <small class="text-muted font-11">Toplam Maliyet</small>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-sm btn-default">Gün</button>
                                            <button type="button" class="btn btn-sm btn-default">Hafta</button>
                                            <button type="button" class="btn btn-sm btn-primary theme-bg gradient">Ay</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="flotChart" class="flot-chart"></div>
                            </div>
                        </div>
                    </div>              
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2>Personel Verileri</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <label class="mb-0 font-13">New Users</label>
                                        <h4 class="font-22 font-weight-bold">2,025</h4>
                                    </div>
                                    <div class="col-6">
                                        <label class="mb-0 font-13">Return Visitors</label>
                                        <h4 class="font-22 font-weight-bold">1,254</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="d-block">New Users <span class="float-right">77%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Engagement <span class="float-right">23%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <small class="font-12">The total number of Page Impressions within the date range<a href="">View more</a></small>
                            </div>
                        </div>
                    </div>
                    
                </div>


            
            </div>



     

@endsection

@section('js')
@endsection
