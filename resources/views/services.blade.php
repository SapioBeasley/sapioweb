@extends('layouts.default')

@section('title', 'Services')

@section('subheading', 'What we can offer you')

@section('breadcrumbs')

	<li><a href="{{url('/')}}">Home</a></li>
	<li class="active">Services</li>

@endsection

@section('content')

	@include('includes.breadcrumbs')

	<!-- ========== Features - Cards ========== -->

	<div class="gray-bg">
		<section class="container ft-cards">
			<div class="row section">

				@include('includes.serviceItems')

			</div><!-- / .row -->
		</section>
	</div><!-- / .gray-bg -->

	<!-- ========== Steps - Numbers ========== -->

	<section class="container ft-steps-numbers">
		<div class="row section">

			@include('includes.steps')

		</div><!-- / .row -->
	</section><!-- / .container -->

	@include('includes.contactCta')

@endsection

@section('scripts')

	<!-- ========== Scripts ========== -->

	<script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="../assets/js/vendor/google-fonts.js"></script>
	<script src="../assets/js/vendor/jquery.easing.js"></script>
	<script src="../assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="../assets/js/vendor/bootstrap.min.js"></script>
	<script src="../assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script src="../assets/js/vendor/smoothscroll.js"></script>
	<script src="../assets/js/vendor/jquery.localScroll.min.js"></script>
	<script src="../assets/js/vendor/jquery.scrollTo.min.js"></script>
	<script src="../assets/js/vendor/jquery.stellar.min.js"></script>
	<script src="../assets/js/vendor/jquery.parallax.js"></script>
	<script src="../assets/js/vendor/slick.min.js"></script>
	<script src="../assets/js/vendor/jquery.easypiechart.min.js"></script>
	<script src="../assets/js/vendor/countup.min.js"></script>
	<script src="../assets/js/vendor/isotope.min.js"></script>
	<script src="../assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/vendor/wow.min.js"></script>
	<script src="../assets/js/main.js"></script>

@endsection
