<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datepicker/css/bootstrap-datepicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login.css')}}"/>
    <!--End of Page level styles-->
</head>
<body>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <!-- Content -->
    @yield('content')
    <!-- Content end -->
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/wow/js/wow.min.js')}}"></script>
<!--End of plugin js-->
<!--Page level js-->
<script type="text/javascript" src="{{asset('assets/js/pages/register.js')}}"></script>
<!-- end of page level js -->
</body>

</html>