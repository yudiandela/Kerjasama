<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- SITE TITLE -->
    <title>IMOZAR - Personal Portfolio Template</title>
    <meta name="description" content="Bamboo - Personal Parallax Portfolio Template">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('client/css/bootstrap.min.css')}}">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{URL::to('client/css/magnific-popup.css')}}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{URL::to('client/css/owl.carousel.min.css')}}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('client/css/font-awesome.min.css')}}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('client/css/style.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{URL::to('client/img/favicon.ico')}}">

    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="img/apple-favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone4.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <a href="index.html" class="effect footer-title">Norman</a>

                <div class="footer-social">
                    <ul class="footer-social-list">
                        <li><a class="effect" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="effect" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="effect" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a class="effect" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="effect" href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a class="effect" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

                <p class="copy-text">Imozar &copy; 2018. all right reserved, designed by <strong><a href="https://themeforest.net/user/phydev"
                            target="_blank">PhyDev</a></strong>.</p>
            </div> <!-- end row -->
        </div> <!-- End Container -->
    </footer>
    <!-- END FOOTER -->

    <!-- Scroll To Top Button -->
    <a href="#" class="scroll-up effect">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- End Scroll To Top Button -->

    <!-- js placed at the end of the document so the pages load faster -->
    <!-- jQuery -->
    <script src="{{URL::to('client/js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{URL::to('client/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{URL::to('client/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{URL::to('client/js/owl.carousel.min.js')}}"></script>
    <!-- jQuery Typer JS -->
    <script src="{{URL::to('client/js/jquery.typer.js')}}"></script>
    <!-- jQuery Images Loaded JS -->
    <script src="{{URL::to('client/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- jQuery Filterizr JS -->
    <script src="{{URL::to('client/js/isotope.pkgd.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{URL::to('client/js/main.js')}}"></script>
</body>

</html>