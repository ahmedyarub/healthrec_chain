@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Doctors
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
                    Doctors
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="#">Doctors</a>
                    </li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    All Doctors & Nurses Table
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                   id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Permission</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{$doctor->name}}</td>
                                        <td>
                                            @if(in_array($doctor->name, $authorized))
                                                {{ Form::open(['action'=>'DoctorsController@deny']) }}
                                                {{ Form::hidden('id',$doctor->id,['name'=>'id']) }}
                                                {{ Form::submit('Deny') }}
                                                {{ Form::close() }}
                                            @else
                                                {{ Form::open(['action'=>'DoctorsController@grant']) }}
                                                {{ Form::hidden('id',$doctor->id,['name'=>'id']) }}
                                                {{ Form::submit('Grant') }}
                                                {{ Form::close() }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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