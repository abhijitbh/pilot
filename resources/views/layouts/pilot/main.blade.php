<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/pilotapp/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/pilotapp/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/assets/pilotapp/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/pilotapp/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/pilotapp/assets/css/demo.css" rel="stylesheet" />
    @yield('head')
   
</head>

<body class="login-page sidebar-collapse" >
<div class="page-header" filter-color="orange">
<header>
@include('partials.above-navbar-alert')
</header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary  navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href=""><img src="/assets/pilotapp/assets/img/logo1.png"  class="logo-img" alt="Dispute Bills">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/vitalsware" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Like us on Facebook" data-placement="bottom" href="http://www.facebook.com/pages/Vitals+Software/162255463797162" target="_blank">
                            <i class="fa fa-facebook"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" title="Like us on Google" data-placement="bottom" href="https://plus.google.com/105829967259945567081" target="_blank">
                            <i class="fa fa-google"></i>
                            <p class="d-lg-none d-xl-none">Google</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    <!-- End Navbar -->
    
        
        <div class="container">
            @yield('content')
           
    </div>


</body>
<!--   Core JS Files   -->
<script src="/assets/pilotapp/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/pilotapp/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/pilotapp/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/pilotapp/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/pilotapp/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/assets/pilotapp/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/assets/pilotapp/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>



