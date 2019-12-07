@extends('layouts/simple')

{{-- Page title --}}
@section('title')
    Sign up
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="row login_top_bottom">
        <div class="col-lg-10 push-lg-1 col-sm-10 push-sm-1">
            <div class="row">
                <div class="col-lg-6 push-lg-3 col-sm-10 push-sm-1">
                    <div class="bg-white login_content login_border_radius">
                        {!! Form::open(['route' => 'register']) !!}
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="role" class="form-control-label">Role *</label>
                                <div class="input-group">
                                    <select id="role" name="role">
                                        <option>Doctor</option>
                                        <option>Nurse</option>
                                        <option>Registration</option>
                                        <option>Patient</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="name" class="form-control-label">Username *</label>
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Username" value="{{old('name')}}">
                                </div>
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="email" class="form-control-label">Email *</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                    <input type="text" placeholder="Email Address" name="email" id="email"
                                           class="form-control" value="{{old('email')}}"/>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row" id="departmentdiv">
                            <div class="col-sm-12">
                                <label for="department" class="form-control-label">Department *</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-building text-primary"></i>
                                    </span>
                                    <select name="department" id="department" class="form-control">
                                        <option>Cardiology</option>
                                        <option>Radiology</option>
                                        <option>Neurology</option>
                                        <option>Emergency</option>
                                        <option>Family medicine</option>
                                    </select>
                                </div>
                            </div>
                            @if ($errors->has('department'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="password" class="form-control-label text-sm-right">Password *</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                    <input type="password" placeholder="Password" id="password" name="password"
                                           class="form-control" value="{{old('password')}}"/>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="password_confirmation" class="form-control-label">Confirm Password *</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                           id="password_confirmation" class="form-control"
                                           value="{{old('password_confirmation')}}"/>
                                </div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row" style="text-align: center">
                            <div class="col-sm-9">
                                <input type="submit" value="Submit" class="btn btn-primary"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <label class="form-control-label">Already have an account?</label> <a href="login "
                                                                                                      class="text-primary login_hover"><b>Log
                                        In</b></a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_scripts')
    <script>
        $(document).ready(function () {
            $("#role").change(function () {
                $(this).find("option:selected").each(function () {
                    if ($(this).val() === "Doctor" || $(this).val() === "Nurse") {
                        $("#departmentdiv").show();
                    } else {
                        $("#departmentdiv").hide();
                    }
                });
            }).change();
        });
    </script>
@stop
