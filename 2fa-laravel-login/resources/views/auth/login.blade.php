@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login

                </div>

                <div class="panel-body">
                  <div class="form-group">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                      <hr>
                      <div class="form-group">
                          <div class="col-md-12 col-md-offset-4">
                              <a href="{{ url('/login/facebook') }}" class="btn btn-facebook" class="btn btn-facebook" style="color:#3B5998"><i class="fa fa-facebook"></i> Facebook</a>
                              <a href="{{ url('/login/google') }}" class="btn btn-google" class="btn btn-google" style="color:#DD4B39;"><i class="fa fa-google"></i> Google</a>
                              <a href="{{ url('/login/github') }}" class="btn btn-github" style="color:#444444;"><i class="fa fa-github"></i> Github</a>
                              <a href="{{ url('/login/twitter') }}" class="btn btn-twitter" class="btn btn-twitter" style="color:#55ACEE;"><i class="fa fa-twitter"></i> Twitter</a>
                          </div>
                      </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
