<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fixed Menu | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <!--End of the global styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/layouts.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of page level styles -->
</head>
<body class="boxed menu-affix fixed" id="fixed_menu_boxed">
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
                <div class="navbar_fixed_menu_boxed">
                    <a class="navbar-brand" href="index ">
                        <h4 class="text-white"><img src="{{asset('assets/img/logow.png')}}" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                    </a>
                    <div class="menu hidden-md-up">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                    </div>
                </div>
                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse"
                            data-target="#nav-content">
                        ☰
                    </button>
                </div>
                <!-- Nav Content -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="topnav dropdown-menu-right float-xs-right">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i
                                    class="fa fa-envelope fa-1x text-white"></i>
                                <!--<span class="bg-warning message_tags">4</span>-->
                                <span class="tag tag-warning">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-title">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/5.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/8.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/7.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox ">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i
                                    class="fa fa-bell text-white"></i>
                                <!--<span class="bg-danger notification_tags">4</span>-->
                                <span class="tag tag-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-title">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1">
                                        </div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                </div>

                                <div class="popover-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('assets/img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user "><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox "><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="lockscreen "><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login "><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-toggleable-sm col-lg-5 col-xl-6 hidden-md-down float-xl-right top_menu boxed_top_menu"
                     id="nav-content">
                    <ul class="nav navbar-nav top_menubar">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_inbox ">
                                <i class="fa fa-inbox"></i> <span class="quick_text">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mail_compose ">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Compose</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="maps ">
                                <i class="fa fa-map-marker"></i> <span class="quick_text">Maps</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="gallery ">
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
        <div id="left" class="fixed_menu">
            <div class="left_content">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                                 alt="User Picture"
                                 src="{{asset('assets/img/admin.jpg')}}">
                            <p class="text-white user-info">Welcome Micheal</p></a>


                        <div class="search_bar col-lg-12">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="search">
                                <span class="input-group-btn">
                                <button class="btn without_border" type="button"><span class="fa fa-search">
                                </span></button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu" class="bg-blue dker">
                    <li>
                        <a href="index ">
                            <i class="fa fa-home"></i>
                            <span class="link-title">&nbsp;Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-anchor"></i>
                            <span class="link-title">&nbsp; Components</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="general_components ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; General Components
                                </a>
                            </li>
                            <li>
                                <a href="transitions ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Transitions
                                </a>
                            </li>
                            <li>
                                <a href="buttons ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Buttons
                                </a>
                            </li>
                            <li>
                                <a href="icons ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Icons
                                </a>
                            </li>
                            <li>
                                <a href="animations ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Animations
                                </a>
                            </li>

                            <li>
                                <a href="sliders ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sliders
                                </a>
                            </li>
                            <li>
                                <a href="notifications ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Notifications
                                </a>
                            </li>
                            <li>
                                <a href="p_notify ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; P-Notify
                                </a>
                            </li>
                            <li>
                                <a href="modal ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Modals
                                </a>
                            </li>


                            <li>
                                <a href="sortable ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sortable
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sweet alerts
                                </a>
                            </li>
                            <li>
                                <a href="grids_layout ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Grid View
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title">&nbsp; Widgets</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="widgets ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets1
                                </a>
                            </li>
                            <li>
                                <a href="widgets2 ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Widgets2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-pencil"></i>
                            <span class="link-title">&nbsp; Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="form_elements ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_validations ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_editors ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkbox ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datetime_picker ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Date Time Picker
                                </a>
                            </li>

                            <li>
                                <a href="ratings ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Ratings
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span class="link-title">&nbsp; Tables</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="simple_tables ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Simple Tables
                                </a>
                            </li>
                            <li>
                                <a href="datatables ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bar-chart"></i>
                            <span class="link-title">&nbsp; Charts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Advanced Charts
                                </a>
                            </li>
                            <li>
                                <a href="chartist ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Chartist
                                </a>
                            </li>
                            <li>
                                <a href="rickshaw ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Rickshaw Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title">&nbsp; Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Grid
                                </a>
                            </li>
                            <li>
                                <a href="add_user ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Add User
                                </a>
                            </li>
                            <li>
                                <a href="view_user ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; User Profile
                                </a>
                            </li>
                            <li>
                                <a href="delete_user ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Delete User
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar ">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title">&nbsp; Calendar</span>
                            <span class="tag tag-pill tag-primary float-xs-right calendar_tag">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery ">
                            <i class="fa fa-picture-o"> </i>
                            &nbsp; Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="link-title">&nbsp; Email</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="mail_compose ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Compose
                                </a>
                            </li>
                            <li>
                                <a href="mail_inbox ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Inbox
                                </a>
                            </li>

                            <li>
                                <a href="mail_view ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View
                                </a>
                            </li>
                            <li>
                                <a href="mail_sent ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Sent
                                </a>
                            </li>
                            <li>
                                <a href="mail_spam ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Spam
                                </a>
                            </li>

                            <li>
                                <a href="mail_draft ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Draft
                                </a>
                            </li>
                            <li>
                                <a href="mail_trash ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Trash
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span class="link-title">&nbsp; Maps</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="jqvmaps ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Vector Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-file"></i>
                            <span class="link-title">&nbsp; Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="404 ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 404
                                </a>
                            </li>
                            <li>
                                <a href="500 ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; 500
                                </a>
                            </li>
                            <li>
                                <a href="login ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Login
                                </a>
                            </li>
                            <li>
                                <a href="register ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Register
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Lock Screen
                                </a>
                            </li>
                            <li>
                                <a href="invoice ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Invoice
                                </a>
                            </li>
                            <li>
                                <a href="blank ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title">&nbsp; Layouts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header
                                </a>
                            </li>
                            <li class="active" id="active">
                                <a href="fixed-menu-boxed ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title">&nbsp; Multi Level Menu</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-angle-right"></i>
                                                            &nbsp;Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-angle-right"></i>
                                                                    &nbsp;Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-angle-right"></i>
                                                    &nbsp;Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp;Level 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
            <header class="head">
                <div class="main-bar row">
                    <div class="col-lg-5 col-md-12 col-sm-4">
                        <h4 class="nav_top_align"><i class="fa fa-th"></i> Boxed And Fixed Menu</h4>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-8">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index ">
                                    <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Layouts</a>
                            </li>
                            <li class="breadcrumb-item active">Boxed And Fixed Menu</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="card">
                    <div class="card-header bg-white">
                        About Admire
                    </div>
                    <div class="card-block card_block_top_align ">
                        <h5> Here Comes Admire  Admin Theme  Description. </h5>
                        <p> Admire Admin Theme is built on Bootstrap v4.0.0-alpha.5 and it is a fully responsive theme...</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                    </div>
                </div>
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        About Fixed Menu And Boxed Layout
                    </div>
                    <div class="card-block card_block_top_align ">
                        <h5> Here Comes Admire  Admin Theme  Description. </h5>
                        <p> Admire Admin Theme is built on Bootstrap v4.0.0-alpha.5 and it is a fully responsive theme...</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                        <p class="text-justify">Lorem ipsum dolor sit amet, facer honestatis ut usu, eripuit docendi volumus eu mel, sea ad case
                            nusquam voluptua. An mei vidit saepe adolescens, qui in diam nostro. Regione dolores his no,
                            mea audiam vidisse dolorem et. Qui wisi nulla electram ut, his soleat virtute temporibus an,
                            primis hendrerit eu ius.
                            Vix ea audire rationibus. Tale aperiri sit ad, zril noluisse ut sit.
                            Altera euismod propriae eam ex, has aeque lobortis reprimique ad, mei cu oratio salutandi
                            maluisset. Ius te fierent inimicus dignissim. Eos an feugait rationibus. At unum etiam
                            concludaturque nam.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
</div>

<!-- global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- end of global scripts-->
</body>

</html>
