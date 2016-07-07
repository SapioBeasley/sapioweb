@extends('layouts.default')

@section('title', 'Contact')

@section('subheading', 'LOVE TO HEAR FROM YOU')

@section('breadcrumbs')

	<li><a href="{{url('/')}}">Home</a></li>
	<li class="active">Contact</li>

@endsection

@section('content')

	@include('includes.breadcrumbs')

    <!-- ========== Contact ========== -->

    <section id="contact" class="contact-3">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-offset-2 col-lg-8">
					<div class="form-wrapper">
						<div class="from-header">
							<h2>Get in touch</h2>
							<p>Have a project you would like us to consider or just want to say hello? We would love to hear from you. Use the form below to describe your project and contact us. We promise to get in touch with you shortly.</p>
						</div>

						@include('forms.contactForm')

					</div>
				</div>

			</div>
		</div><!-- / .container -->
    </section><!-- / .contact-3 -->

@endsection

@section('scripts')

	<!-- ========== Scripts ========== -->

	<script src="{{url('/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/google-fonts.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.easing.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.waypoints.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/bootstrap-hover-dropdown.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/smoothscroll.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.localScroll.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.scrollTo.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.stellar.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.parallax.js')}}"></script>
	<script src="{{url('/assets/js/vendor/slick.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.easypiechart.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/countup.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/isotope.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('/assets/js/vendor/wow.min.js')}}"></script>
	<script src="{{url('/assets/js/main.js')}}"></script>

@endsection
