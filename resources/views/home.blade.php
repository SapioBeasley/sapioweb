@extends('layouts.default')

@section('content')

	<!-- ========== Hero Cover ========== -->

    <div class="kenburn-hero">
		<div class="kenburn-slider">

			<!-- Heading -->
			<div class="hero-wrapper">
				<div class="hero-content">
					<h1 class="lead-white-bg">
						<span>Design</span><br>
						<span>Develop</span><br>
						<span>Deploy</span>
					</h1>
					<h4>Simple as that</h4>
					<a href="{{url('services')}}" class="btn-ghost-light">Learn More</a>
				</div>
			</div><!-- / .hero-wrapper -->

			<!-- Ken Burns Slider -->
			<canvas class="kenburns">
				<p>Your browser doesn't support canvas!</p>
			</canvas>

		</div><!-- / .kenburn-slider -->

		<!-- Scroller -->
		<a href="#services" class="scroller">
			<span class="scroller-text">scroll down</span>
			<span class="linea-basic-magic-mouse"></span>
		</a>
    </div><!-- / #home .kenbrun-hero-->

	<!-- ========== Services ========== -->

	<div class="gray-bg">
		<section id="services" class="container ft-cards">
			<div class="row section">

				<header class="sec-heading">
					<h2>What we do</h2>
					<span class="subheading">SapioWeb is built to be a long-term partner,<br> a model that only works if we deliver results for our clients.</span>
				</header>

				@include('includes.serviceItems')

			</div><!-- / .row -->
		</section>
	</div><!-- / .gray-bg -->

    <!-- ========== Feature - Steps Numbers ========== -->

	<section class="container ft-steps-numbers">
		<div class="row section">

            @include('includes.steps')

		</div><!-- / .row -->

	</section><!-- / .container -->

    @include('includes.contactCta2')

    <!-- ========== Portfolio ========== -->

	<section class="container-fluid portfolio-layout portfolio-columns-fw">
        <div class="row">
            <header class="sec-heading">
                <h2>Some of our projects</h2>
                <span class="subheading">A collection of our web design and development work</span>
            </header>
        </div><!-- / .row -->

        <div class="row">
  		    <div id="pfolio">

                @foreach($portfolios as $portfolio)
					@include('includes.portfolioLoopHome')
				@endforeach

		    </div><!-- / #pfolio -->
	    </div><!-- / .row -->
	</section><!-- / .portfolio-columns-fw -->

    <!-- ========== Testimonials ========== -->

	<div class="gray-bg">
        <section class="container testimonials-3col">

            <div class="row section">

                <header class="sec-heading">
                    <h2>What people say about us</h2>
                    <span class="subheading">Read some of the testimonials from our amazing clients</span>
                </header>

                @foreach($testimonials as $testimonial)
                    @include('includes.testimonialsLoop')
                @endforeach

		    </div><!-- / .row -->

	    </section><!-- / .container -->
	</div><!-- / .gray-bg -->

    @include('includes.newsletterCta')

    <!-- ========== Blog Preview ========== -->

    <div class="gray-bg">
        <section class="section container blog-columns blog-preview">
            <div class="row">

                <header class="sec-heading">
                    <h2>Latest from our blog</h2>
                    <span class="subheading">Check out our blog to see what were up to</span>
                </header>

                @foreach($gists as $gist)
                    @include('includes.blogLoop')
                @endforeach

            </div><!-- / .row -->
        </section><!-- / .container -->
    </div><!-- / .gray-bg -->

@endsection

@section('scripts')

	<!-- ========== Scripts ========== -->

	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="assets/js/vendor/google-fonts.js"></script>
	<script src="assets/js/vendor/jquery.easing.js"></script>
	<script src="assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/vendor/smoothscroll.js"></script>
	<script src="assets/js/vendor/jquery.localScroll.min.js"></script>
	<script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
	<script src="assets/js/vendor/jquery.stellar.min.js"></script>
	<script src="assets/js/vendor/jquery.parallax.js"></script>
	<script src="assets/js/vendor/slick.min.js"></script>
	<script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
	<script src="assets/js/vendor/countup.min.js"></script>
	<script src="assets/js/vendor/isotope.min.js"></script>
	<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/vendor/wow.min.js"></script>
	<script src="assets/js/vendor/kenburns.js"></script>
	<script src="assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/vendor/jquery.ajaxchimp.js"></script>
	<script src="assets/js/main.js"></script>

@endsection
