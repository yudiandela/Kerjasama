@extends('admin.template.auth')
@section('content')
<h2 class="text-center" style="margin-top: 0px;">Login</h2>
<form action="{{route('auth.storeLogin')}}" id="login-form" method="post" role="form" style="display: block;">
  {{csrf_field()}}
  <div class="form-group">
    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
  </div>
  <div class="form-group">
    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
  </div>
  <div class="form-group text-center">
    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
    <label for="remember"> Remember Me</label>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
      </div>
    </div>
  </div>
</form>
<form action="{{route('auth.storeLogin')}}" id="register-form" method="post" role="form" style="display: none;">
  {{csrf_field()}}
  <div class="form-group">
    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
  </div>
  <div class="form-group">
    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
  </div>
  <div class="form-group text-center">
    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
    <label for="remember"> Remember Me</label>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
      </div>
    </div>
  </div>
</form>
@endsection