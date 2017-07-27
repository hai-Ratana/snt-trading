@extends('layouts.app')

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
  <div class="widget-body">
    <div class="widget-main">
      <h4 class="header blue lighter bigger">
        <i class="ace-icon fa fa-coffee green"></i>
        Please Enter Your Information
      </h4>

      <div class="space-6"></div>

      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <fieldset>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="block clearfix">
              <span class="block input-icon input-icon-right">

                  <input id="email" type="email"  class="form-control" name="email" value="{{ old('email') }}" required autofocus  placeholder="Email" />
                  <i class="ace-icon fa fa-user"></i>

              </span>
            </label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="block clearfix">
              <span class="block input-icon input-icon-right">
                <input type="password" class="form-control" placeholder="Password" name="password" required >
                <i class="ace-icon fa fa-lock"></i>
              </span>
            </label>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="space"></div>

          <div class="clearfix">
            <label class="inline">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="ace" />
              <span class="lbl"> Remember Me</span>
            </label>

            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
              <i class="ace-icon fa fa-key"></i>
              <span class="bigger-110">Login</span>
            </button>
          </div>

          <div class="space-4"></div>
        </fieldset>
      </form>

    </div><!-- /.widget-main -->

    <div class="toolbar clearfix">
      <div>
        <a href="{{ route('password.request') }}" data-target="#forgot-box" class="forgot-password-link">
          <i class="ace-icon fa fa-arrow-left"></i>
          I forgot my password
        </a>
      </div>
    </div>
  </div><!-- /.widget-body -->
</div><!-- /.login-box -->

@endsection
