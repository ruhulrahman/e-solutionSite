<!DOCTYPE HTML>
<html>
<head>
<title>e-Solution</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/boot.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_common.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
<script src="{{ asset('assets/js/modernizr.custom.69142.js') }}"></script>
<script src="{{ asset('assets/js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('assets/js/jquery.smoothscroll.js') }}" ></script>
<script src="{{ asset('assets/js/main.js') }}" ></script>
</head>
<body>
<div id="page-top" class="index">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand page-scroll" href="#page-top">e-Solution</a></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="page-scroll" href="#page-top">Home</a></li>
          <li><a class="page-scroll" href="#services">Services</a></li>
          <li><a class="page-scroll" href="#port">Portfolio</a></li>
          <li><a class="page-scroll" href="#team">About Team</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <!-- Header -->
  <header style="background-image:url(assets/img/3218_Computer-power-abstract-binary-code.jpg)">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To e-Solution</div>
        <div class="intro-heading">It's Nice To Meet You</div>
        <a href="#services" class="page-scroll btn btn-primary">Tell Me More</a></div>
    </div>
  </header>
</div>

<!-- ===== services ===== -->
@yield('Services')


<!-- ===== Portfolio Section ===== -->
@yield('Portfolio')

<!-- ===== Team Section ===== -->
@yield('Team')
<!-- ===== Contact Us ===== -->
@yield('Contact_Us')



<footer class="footer_area">
  <div class="container footer_top">
    <div class="row">
      <div class="col-lg-12">
		<h2 class="text-center">e-Solution Contact Info</h2>
		<p><i class="fa fa-envelope"></i></p>
		<p>Contact Email: <span>esolutionbd1@gmail.com</span></p>
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
	  </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container footer_down">
    <div class="row">
      <div class="col-md-12">
			<p><span class="pull-left">Thank You For Visiting Our website</span><span class="pull-right">Copyright &copy; all reserved by <strong><i>e-Solution</i></strong></span></p>
    </div>
  </div>
</footer>
</body>
</html>