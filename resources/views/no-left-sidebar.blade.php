<!doctype html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <title>No-left-sidebar | Admire</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- End of Global styles -->
</head>
<body>
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
                <a class="navbar-brand text-xs-center" href="index ">
                    <h4 class="text-white"><img src="{{asset('assets/img/logow.png')}}" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
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
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="tag tag-warning">8</span>
                            </a>
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
                                    <a href="mail_inbox ">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <!--<span class="bg-danger notification_tags">4</span>-->
                                <span class="tag tag-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-title">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/2.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/3.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/6.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                            <img src="{{asset('assets/img/mailbox_imgs/1.jpg')}}" class="message-img avatar" alt="avatar1"></div>
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
                                <img src="{{asset('assets/img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>Micheal</strong>
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
                <div class="collapse navbar-toggleable-sm col-xl-6 col-lg-6 hidden-md-down float-xl-right  top_menu" id="nav-content">
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
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">  <i class="fa fa-th"></i> No Left Side Bar</h4>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index ">
                                    <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Layouts</a>
                            </li>
                            <li class="breadcrumb-item active">No Left Side Bar</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
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
                            About No Left Sidebar Layout
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
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
   @include('layouts.right_sidebar')
    <!-- # right side -->
</div>

<!--Global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!--End of global scripts-->
</body>

</html>