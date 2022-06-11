<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food Code Proudly Presents By Themexpert</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="{{asset('fontend/css/nivo-slider.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('fontend/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('fontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('fontend/css/responsive.css')}}">

	<!-- jS -->
	<script src="{{asset('fontend/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('fontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('fontend/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
	<script src="{{asset('fontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('fontend/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('fontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('fontend/js/main.js')}}" type="text/javascript"></script>


</head>
<body>
 

	<!-- top Start-->

     @include('frontend.layout.top')

     	<!-- logo Start-->

    @include('frontend.layout.logo')


    <!-- nav Start-->

    @include('frontend.layout.nav')


     
    @yield('content')


	
	@include('frontend.layout.footer')

	<a id="back-top" href="#"></a>
</body>
</html>