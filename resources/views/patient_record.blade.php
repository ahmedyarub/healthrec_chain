@extends('layouts/default')

{{-- Page title --}}
@section('title')
    My Medical File
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
                    My Medical File
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="#">My Medical File</a>
                    </li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    My Medical File: {{$patient->name}}
                </div>
                {{Form::open(['action'=>'PatientsController@updateRecord'])}}
                {{Form::hidden('id', $id)}}
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('record_date','Record Date',['id'=>'record_date'])}}
                            {{Form::text('record_date',$record_date,['id'=>'record_date',(Auth::user()->role==="Doctor"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('height','Height',['id'=>'height'])}}
                            {{Form::text('height',$height,['id'=>'height',(Auth::user()->role==="Doctor"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('weight','Weight',['id'=>'weight'])}}
                            {{Form::text('weight',$weight,['id'=>'weight',(Auth::user()->role==="Doctor"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('mass','Mass',['id'=>'mass'])}}
                            {{Form::text('mass',$mass,['id'=>'mass',(Auth::user()->role==="Doctor"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('pressure','Pressure',['id'=>'pressure'])}}
                            {{Form::text('pressure',$pressure,['id'=>'pressure',(Auth::user()->role==="Doctor"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('allergies','Allergies',['id'=>'allergies'])}}
                            {{Form::text('allergies',$allergies,['id'=>'allergies',(Auth::user()->role==="Nurse"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('symptoms','Symptoms',['id'=>'symptoms'])}}
                            {{Form::text('symptoms',$symptoms,['id'=>'symptoms',(Auth::user()->role==="Nurse"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            {{Form::label('diagnosis','Diagnosis',['id'=>'diagnosis'])}}
                            {{Form::text('diagnosis',$diagnosis,['id'=>'diagnosis',(Auth::user()->role==="Nurse"?'readonly':'')])}}
                        </div>
                    </div>
                </div>
                @if(Auth::user()->role!="Patient")
                {{Form::submit('Save')}}
                @endif
                {{Form::close()}}
            </div>
        </div>
        <!-- /.inner -->
    </div>
    @if(Auth::user()->role!=="Patient")
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
                                        <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Symptoms</th>
                                        <th class="wid-20" tabindex="0" rowspan="1" colspan="1">Diagnosis</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($records_history as $key => $record)
                                        <tr role="row" class="even">
                                            <td>{{$key}}</td>
                                            <td>{{$record[0]}}</td>
                                            <td>{{$record[1]}}</td>
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
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->
@stop