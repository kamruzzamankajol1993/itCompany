<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta property="og:url"           content="{{ url()->current() }}" />
<meta property="og:type"          content="{{ $systemDataAll->siteName }}" />
<meta property="og:title"         content="{{ $systemDataAll->siteName }}." />
<meta property="og:description"   content="{!!  substr(strip_tags($systemDataAll->siteAbout), 0, 300) !!}" />
<meta property="og:image"         content="{{asset('/')}}{{ $systemDataAll->siteLogo }}"  />
<meta property="og:image:width" content="720" />
<meta property="og:image:height" content="720" />


<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="{{asset('/')}}public/front/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('/')}}public/front/css/style.css" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" type="image/x-icon">
<link rel="icon" href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" type="image/x-icon">

<!-- Responsive -->


</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	{{-- <div class="preloader"></div> --}}

	<!-- Main Header-->
	@include('front.include.header')
	<!--End Main Header -->



	@yield('body')

	<!-- Main Footer -->
    @include('front.include.footer')
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{asset('/')}}public/front/js/jquery.js"></script>
<script src="{{asset('/')}}public/front/js/popper.min.js"></script>
<script src="{{asset('/')}}public/front/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}public/front/js/jquery.fancybox.js"></script>
<script src="{{asset('/')}}public/front/js/wow.js"></script>
<script src="{{asset('/')}}public/front/js/appear.js"></script>
<script src="{{asset('/')}}public/front/js/select2.min.js"></script>
<script src="{{asset('/')}}public/front/js/owl.js"></script>
<script src="{{asset('/')}}public/front/js/script.js"></script>
</body>


</html>


