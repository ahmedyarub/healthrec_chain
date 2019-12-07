@extends('layouts/default')

{{-- Page title --}}
@section('title')
    New Medical File
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}"/>
    <!-- end of page level styles -->
@stop


{{-- Page content --}}
@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    New Medical File
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">New Medical File</a>
                    </li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    New Medical File
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::open(['action'=>'PatientsController@updateRegister'])}}

                            {{Form::label('Patient')}}
                            {{Form::select('patient_id',$patients,null,['id'=>'patient_id'])}}
                            <br>
                            {{Form::label('Record ID')}}
                            {{Form::text('record_id',null,['id'=>'record_id'])}}
                            <br>
                            {{Form::label('Emirates ID')}}
                            {{Form::text('emirates_id',null,['id'=>'emirates_id'])}}
                            <br>
                            {{Form::label('Date of Birth')}}
                            {{Form::text('date_of_birth',null,['id'=>'date_of_birth'])}}
                            <br>
                            {{Form::label('Place of Birth')}}
                            {{Form::text('place_of_birth',null,['id'=>'place_of_birth'])}}
                            <br>
                            {{Form::label('Gender')}}
                            {{Form::text('gender',null,['id'=>'gender'])}}
                            <br>
                            {{Form::label('Phone')}}
                            {{Form::text('phone',null,['id'=>'phone'])}}
                            <br>
                            {{Form::submit('Submit')}}

                            {{Form::close()}}
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
@stop