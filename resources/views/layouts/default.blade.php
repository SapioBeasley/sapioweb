<!doctype html>
<html class="no-js" lang="en">
	<head>
		@include('includes.head')
	</head>

	<body id="page-top">

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- ========== Preloader ========== -->

		<div class="preloader">
		  <img src="{{url('assets/images/loader.svg')}}" alt="Loading...">
		</div>

		@include('includes.header')

		@yield('content')

		@include('includes.footer')

		@yield('scripts')

	</body>
</html>
