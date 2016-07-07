@extends('layouts.default')

@section('title', 'Blog')

@section('subheading', 'see what we are up to')

@section('breadcrumbs')

	<li><a href="{{url('/')}}">Home</a></li>
	<li class="active">Blog</li>

@endsection

@section('content')

	@include('includes.breadcrumbs')

	<!-- ========== Blog - 3 Columns ========== -->

	<div id="blog" class="section container blog-columns">

		<div class="row ws-s">

			@foreach($gists as $gist)
				@include('includes.blogLoop')
			@endforeach

		</div><!-- / .row -->

		@include('includes.pagination')

	</div><!-- / .blog-columns -->

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
