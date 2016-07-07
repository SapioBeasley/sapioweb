@extends('layouts.default')

@section('title', 'Portfolio')

@section('subheading', 'Some of our work')

@section('breadcrumbs')

	<li><a href="{{url('/')}}">Home</a></li>
	<li class="active">Portfolio</li>

@endsection

@section('content')

	@include('includes.breadcrumbs')

	<!-- ========== Portfolio Boxed - 2 Columns ========== -->

	<section class="container portfolio-layout portfolio-columns-boxed">
		<div class="row">
			<header class="sec-heading">
				<h2>Some of our projects</h2>
				<span class="subheading">A collection of our web design and development work</span>
			</header>
		</div><!-- / .row -->

		<div class="row ws-m">
			<div id="pfolio">

				@foreach($portfolios as $portfolio)
					@include('includes.portfolioLoop')
				@endforeach

			</div><!-- / #pfolio -->
		</div><!-- / .row -->
	</section><!-- / .portfolio-columns-boxed -->

	@include('includes.contactCta')

@endsection

@section('scripts')

	<!-- ========== Scripts ========== -->

	<script src="../../assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="../../assets/js/vendor/google-fonts.js"></script>
	<script src="../../assets/js/vendor/jquery.easing.js"></script>
	<script src="../../assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="../../assets/js/vendor/bootstrap.min.js"></script>
	<script src="../../assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script src="../../assets/js/vendor/smoothscroll.js"></script>
	<script src="../../assets/js/vendor/jquery.localScroll.min.js"></script>
	<script src="../../assets/js/vendor/jquery.scrollTo.min.js"></script>
	<script src="../../assets/js/vendor/jquery.stellar.min.js"></script>
	<script src="../../assets/js/vendor/jquery.parallax.js"></script>
	<script src="../../assets/js/vendor/slick.min.js"></script>
	<script src="../../assets/js/vendor/jquery.easypiechart.min.js"></script>
	<script src="../../assets/js/vendor/countup.min.js"></script>
	<script src="../../assets/js/vendor/isotope.min.js"></script>
	<script src="../../assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="../../assets/js/vendor/wow.min.js"></script>
	<script src="../../assets/js/main.js"></script>

@endsection
