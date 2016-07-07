@extends('layouts.default')

@section('content')

	@include('includes.header')

	<!-- ========== 404 Page - (Not Found) ========== -->

	<div class="wrapper-404">
		<div class="content-wrapper">

			<div class="lead-wrapper">
				<h1 class="lead-404">404</h1>
			</div>

			<div class="info-wrapper">
				<p class="info-404">Oops... The page that you are looking<br> for does not exist! Luckily enough we,<br> have some pages that do exist</p>
			</div>

			<ul class="links-404">
				<li><a href="{{route('home')}}" class="btn btn-light btn-small">Go Back Home</a></li>
				<li><a href="{{route('services')}}" class="btn-ghost-light btn-small">View Services</a></li>
			</ul>

		</div>
	</div><!-- / .wrapper-404 -->

@endsection

@section('scripts')

	<!-- ========== Scripts ========== -->

	<script src="{{url('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/google-fonts.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.easing.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.waypoints.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/bootstrap-hover-dropdown.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/smoothscroll.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.localScroll.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.scrollTo.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.stellar.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/jquery.parallax.js')}}"></script>
	<script src="{{url('assets/js/vendor/slick.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/isotope.min.js')}}"></script>
	<script src="{{url('assets/js/vendor/wow.min.js')}}"></script>
	<script src="{{url('assets/js/main.js')}}"></script>
	{{-- @include('includes.commonScripts') --}}

@endsection
