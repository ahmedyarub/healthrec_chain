@extends('layouts/simple')

{{-- Page title --}}
@section('title')
    Sign In
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="bg-white login_content login_border_radius">
                        <form method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name" class="form-control-label"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                                class="fa fa-user text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="name" name="name" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-group">
                            <label class="form-control-label">Don't you have an Account? </label>
                            <a href='register '><b>Sign Up</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop