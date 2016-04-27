@extends('layouts.default')

@section('content')
<main class="section" id="main">

	<div class="pix_row scrollreveal row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="pix-item no-scale main-slider">

				<div class="slider-pro" id="my-slider">
					<div class="sp-slides">

						<div class="sp-slide">
							<img class="sp-image" src="media/1340x500/1.jpg" alt="galliope" />
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="pix_row scrollreveal row">

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="pix-item">
				<div class="pix-title-right">
					<h3 class="size28">Strategy<br>
						With Technology</h3>
				</div>
			</div>
		</div>

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="pix-item why-me-text">
				<h6 class="text-transform">We implement best possible solutions &amp; bring a crafted and inspired approach.</h6>
				<p>We have extensive experience building and optimizing websites for hundreds of business across numerous niches. For instance, we specialize in developing web applications and platforms for Las Vegas real estate firms, complete with advanced home and online property search functionality. In addition to real estate, our accomplished team also specializes in creating websites for medical businesses, including eye doctors, lung doctors, elbow surgeons, gynecologic oncologists, and many more, as well as eye-catching restaurant websites complete with advanced ordering and reservation functionality. We’ve even worked on websites for Las Vegas recording studios.</p>

				<p>Sapioweb in Las Vegas also provides state of the art web hosting solutions for our clients or for businesses looking for a safe and secure location to host your website. We know how important your website hosting and data is to your business. We take extra precaution to make sure your data is safe.</p>
			</div>
		</div>

	</div>

	<div class="pix_row scrollreveal row ">

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="pix-item pix-item x2 y1_7 custom_06 text-white-color  text-shadow">
				<div class="pix-carousel ">
					<div class="pix-info-icon-item">
						<h5 class="text-transform size15"> Web Design</h5>
						<p>We have web designers that are certified in web design, programming, web development, and web graphics.</p>
						<div class="pix-media-box divider-right-bot divider-white  custom_08 "><i class="fa icon-screen-desktop"></i></div>
					</div>
					<div class="pix-info-icon-item">
						<h5 class="text-transform size15"> Development</h5>
						<p>Our team is well versed in a plethora of developement languages. Only the best will be utilized for your next great website. </p>
						<div class="pix-media-box divider-right-bot divider-white custom_08"><i class="fa fa-terminal"></i></div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="pix-item pix-item x2 y1_7 custom_07 text-white-color  text-shadow">
				<div class="pix-carousel ">
					<div class="pix-info-icon-item">
						<h5 class="text-transform size15"> Maintinance / Support</h5>
						<p>If your website is over 2 years old it may be out of date. It's important that you reflect the “latest and greatest”.</p>
						<div class="pix-media-box divider-right-bot divider-white custom_09 "><i class="fa icon-support"></i></div>
					</div>
					<div class="pix-info-icon-item">
						<h5 class="text-transform size15"> Web Hosting</h5>
						<p>Web Hosting is the most important aspect of any website. We have hosting services from shared to full dedicated servers. </p>
						<div class="pix-media-box divider-right-bot divider-white custom_09"><i class="fa icon-bar-chart"></i></div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="pix_row scrollreveal row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="custom_11">
				<div class=" pix-title-center">
					<div class="pix-title">
						<h3>Our Portfolio</h3>
					</div>
					<div class="after-title-info">
						<p>The proof is in the portfolio. Check out some examples of the awesomeness we’ve <br>
							created by going above and beyond for our clients. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pix_row scrollreveal row">

		@foreach($portfolios as $portfolio)
			<div class="col-md-4 col-sm-12 col-xs-12">

				<div class="pix-item ">
					<div class="azexo-reveal azexo-plane-{{rand(1,3)}}"
						data-azexo-color-1="01BB00"
						data-azexo-angle="{{rand(0,360)}}"
						data-azexo-start-delay="1000">

						<div class="hover-mask" data-background="#34495e">
							<a href="media/x2/{{$portfolio->id}}.jpg" class="zoom-img" >
								<i class="icon-plus"></i>
							</a>
							<!-- <a href="10-portfolio-single.html"><i class="icon-info"></i></a> -->
						</div>

						<a href="10-portfolio-single.html"><img src="media/x2/{{$portfolio->id}}.jpg" alt="galliope"></a>
					</div>
				</div>

			</div>
		@endforeach

	</div>
  <!-- =========================
    ROW 4
  ============================== -->

</main>
<!-- =========================
  END MAIN CONTENT
============================== -->
@endsection

@section('scripts')

<!-- OTHER SCRIPTS -->
<script src="plugins/letters/jquery.shuffleLetters.js"></script>
<script src="plugins/letters/jquery.tickertype.js"></script>
<script src="plugins/scrollreveal/scrollreveal.min.js"></script>

@endsection
