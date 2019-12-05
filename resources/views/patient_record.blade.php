@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Patient Record
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
                    Patient Records
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
                        <a href="#">Patient Records</a>
                    </li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Patient Records: {{$patient->name}}
                </div>
                {{Form::open(['action'=>'PatientsController@updateRecord'])}}
                {{Form::hidden('id', $id)}}
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('diagnose','Diagnose',['id'=>'diagnose'])}}
                            {{Form::textarea('diagnosevalue',$diagnosevalue,['id'=>'diagnosevalue',(Auth::user()->role=="Patient"?'readonly':'')])}}
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('treatment','Treatment',['id'=>'treatment'])}}
                            {{Form::textarea('treatmentvalue',$treatmentvalue,['id'=>'treatmentvalue',(Auth::user()->role=="Patient"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
        <!-- /.inner -->
    </div>
    @if(Auth::user()->role!="Patient")
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Record History
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                   id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Date/Time</th>
                                    <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Doctor</th>
                                    <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Treatment</th>
                                    <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Diagnosis</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($records_history as $key => $record)
                                    <tr role="row" class="even">
                                        <td>{{$key}}</td>
                                        <td>{{$record[0]}}</td>
                                        <td>{{$record[1]}}</td>
                                        <td>{{$record[2]}}</td>
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
    @endif
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
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
@stop