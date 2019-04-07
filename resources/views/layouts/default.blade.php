<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            | Admire
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    @yield('header_styles')
</head>

<body>
<!--</div>-->
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="{{ URL::to('index') }} ">
                    <h4 class="text-white"><img src="{{asset('assets/img/logow.png')}}" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>

                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#nav-content">
                        ☰
                    </button>
                </div>
                <!-- Nav Content -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="topnav dropdown-menu-right float-xs-right">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-title">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"> <strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"> <strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"> <strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"> <strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('assets/img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>{{Auth::user()->name}}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="{{ URL::to('edit_user') }} "><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="{{ URL::to('mail_inbox') }} "><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="{{ URL::to('lockscreen') }}"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-xl-right  top_menu" id="nav-content">
                    <ul class="nav navbar-nav top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ URL::to('mail_inbox') }} ">
                                <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ URL::to('mail_compose') }}">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ URL::to('maps') }}  ">
                                <i class="fa fa-map-marker"></i> <span class="quick_text">Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ URL::to('gallery') }}  ">
                                <i class="fa fa-picture-o"></i> <span class="quick_text">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- /.container-fluid --> </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
    <div id="left">
        <!-- #menu -->
        @if(Auth::user()->role == 'Patient')
            <ul id="menu" class="bg-blue dker">
                <li {!! (Request::is('patients')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('doctors') }} ">
                        <i class="fa fa-hospital-o"></i>
                        <span class="link-title">&nbsp;Doctors</span>
                    </a>
                </li>
            </ul>
        @endif
        @if(Auth::user()->role == 'Doctor')
            <ul id="menu" class="bg-blue dker">
                <li {!! (Request::is('patients')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('patients') }} ">
                        <i class="fa fa-hospital-o"></i>
                        <span class="link-title">&nbsp;Patients</span>
                    </a>
                </li>
            </ul>
        @endif
        @if(Auth::user()->role == 'Admin')
        <ul id="menu" class="bg-blue dker">
            <li {!! (Request::is('users')? 'class="active"':"") !!}>
                <a href="{{ URL::to('users') }} ">
                    <i class="fa fa-user"></i>
                    <span class="link-title">&nbsp;Users</span>
                </a>
            </li>
        </ul>
        @endif
        <!-- /#menu -->
    </div>
    <!-- /#left -->
    <div id="content" class="bg-container">
        <!-- Content -->
        @yield('content')
        <!-- Content end -->
    </div>


</div>
@include('layouts.right_sidebar')
<!-- # right side -->
</div>

<!-- global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- end of global scripts-->
<!-- page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>