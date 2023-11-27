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