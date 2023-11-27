@extends('layout.master')
@section('parentPageTitle', 'Apps')
@section('title', 'Inbox')


@section('content')

<!-- Page header section  -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-xl-6 col-md-5 col-sm-12">
            <h1>Hi, Welcomeback!</h1>
            <span>JustDo @yield('title'),</span>
        </div>            
        <div class="col-xl-6 col-md-7 col-sm-12 text-md-right">
            <a href="{{route('pages.settings')}}" class="btn btn-default">Settings</a>
            <a href="{{route('apps.inboxcompose')}}" class="btn btn-dark">Compose</a>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu mb-1">
            <a class="navbar-brand" href="javascript:void(0);">M.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="javascript:void(0);">Gmail</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Yahoo</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Outlook</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown">Add more</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">MailChimp</a>
                            <a class="dropdown-item" href="javascript:void(0);">Hotmail</a>
                            <a class="dropdown-item" href="javascript:void(0);">Yandex</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="mail-inbox">
                <div class="mobile-left">
                    <a href="javascript:void(0);" class="btn btn-primary theme-bg toggle-email-nav"><i class="fa fa-bars"></i></a>
                </div>
                <div class="mail-left">
                    <ul class="nav">
                        <li class="active"><a href="{{route('apps.inbox')}}"><i class="icon-drawer"></i>Inbox<span class="badge badge-default float-right">13</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent<span class="badge badge-default float-right">7</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Outbox</a></li>                                        
                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash</a></li>
                    </ul>
                    <h3 class="label">Labels</h3>
                    <ul class="nav">
                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i>Friends</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i>Support</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i>Paypal</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i>Support</a></li>
                    </ul>
                    <h3 class="label">Chat</h3>
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="online">
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="{{ asset('assets/images/xs/avatar1.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Louis Henry</span>
                                    <span class="message">How do you do?</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="{{ asset('assets/images/xs/avatar2.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Debra Stewart</span>
                                    <span class="message">I was wondering...</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="{{ asset('assets/images/xs/avatar3.jpg') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Lisa Garett</span>
                                    <span class="message">I've forgotten how it felt before</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </a>                            
                        </li>
                    </ul>
                </div>
                <div class="mail-right check-all-parent">
                    <div class="mail-action">
                        <div>
                            <div class="fancy-checkbox d-inline-block">
                                <label>
                                    <input class="check-all" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm"><i class="fa fa-refresh"></i></a>                                        
                            <div class="btn-group">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tag"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">ThemeForest</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Workshop</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Paypal</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="pagination-email d-flex">
                                <p>1-50/295</p>
                                <div class="btn-group m-l-20">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="mail-list list-unstyled">
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>                                                
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}" >Michael Bradley (5)</a></div>
                                <p class="dep">Hello - <span class="msg">That's great, see you on Thursday!</span></p>
                                <span class="time">23 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Megan, Me</a></div>
                                <p class="dep"><span class="badge-warning badge mr-2">Freelance</span><span class="msg">There are many variations of passages of Lorem Ipsum available, but the majority</span></p>
                                <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan Hunter</a></div>
                                <p class="dep">Hey, <span class="msg">You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span></p>
                                <span class="time">14 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Beverly Oliver</a></div>
                                <p class="dep"><span class="badge-danger badge mr-2">Friends</span><span class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</span></p>
                                <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan, Me</a></div>
                                <p class="dep"><span class="badge-info badge mr-2">Support</span><span class="msg">There are many variations of passages of Lorem Ipsum available, but the majority</span></p>
                                <span class="time">29 May</span>
                            </div>
                        </li>
                        <li class="unread">
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Peter Collins (7)</a></div>
                                <p class="dep">Regarding our meeting – <span class="msg">There are many variations of passages of Lorem Ipsum available</span></p>
                                <span class="time ml-auto">20 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan (3)</a></div>
                                <p class="dep"><span class="badge-primary badge mr-2">Social</span><span class="msg">There are many variations of passages of Lorem Ipsum available, but the majority</span></p>
                                <span class="time ml-auto">14 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Megan, Me</a></div>
                                <p class="dep">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan Hunter</a></div>
                                <p class="dep">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</p>
                                <span class="time">14 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Beverly Oliver</a></div>
                                <p class="dep"><span class="badge-danger badge mr-2">Friends</span><span class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</span></p>
                                <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan, Me (2)</a></div>
                                <p class="dep"><span class="badge-info badge mr-2">Support</span><span class="msg">There are many variations of passages of Lorem Ipsum available, but the majority</span></p>
                                <span class="time">29 May</span>
                            </div>
                        </li>
                        <li class="unread">
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Peter Collins</a></div>
                                <p class="dep">Regarding our meeting – <span class="msg">There are many variations of passages of Lorem Ipsum available</span></p>
                                <span class="time ml-auto">20 Jun</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="md-right">
                                <div class="title"><a href="{{route('apps.inboxdetail')}}">Nathan Hunter</a></div>
                                <p class="dep"><span class="msg">There are many variations of passages of Lorem Ipsum available, but the majority</span></p>
                                <span class="time ml-auto">14 Jun</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    

@stop

@section('page-styles')

@stop

@section('vendor-script')
@stop

@section('page-script')
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
@stop