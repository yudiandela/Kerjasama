<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kerjasama</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <!-- Font Awesome CSS-->
    {{-- <link rel="stylesheet" href="{{URL::to('admin/vendor/font-awesome/css/font-awesome.min.css')}}"> --}}
    <!-- Fontastic Custom icon font-->
    {{-- <link rel="stylesheet" href="{{URL::to('admin/css/fontastic.css')}}"> --}}
    <!-- Google fonts - Poppins -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700"> --}}
    <!-- theme stylesheet-->
    {{-- <link rel="stylesheet" href="{{URL::to('admin/css/style.default.css')}}" id="theme-stylesheet"> --}}
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::to('admin/css/bs3.min.css')}}" id="bootsrap-css">
    <link rel="stylesheet" href="{{URL::to('admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL::to('admin/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-8 col-xs-12 col-md-offset-2">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Pengusaha</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Pemasok</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- JavaScript files-->
    <script src="{{URL::to('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{URL::to('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{URL::to('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{URL::to('admin/js/front.js')}}"></script>
  </body>
</html>