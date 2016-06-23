@extends('layouts.default')

@section('content')

	@include('includes.header')

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
					<a href="index-kenburn-mp.html#services" class="btn-ghost-light">Learn More</a>
				</div>
			</div><!-- / .hero-wrapper -->

			<!-- Ken Burns Slider -->
			<canvas class="kenburns">
				<p>Your browser doesn't support canvas!</p>
			</canvas>

		</div><!-- / .kenburn-slider -->

		<!-- Scroller -->
		<a href="index-kenburn-mp.html#services" class="scroller">
			<span class="scroller-text">scroll down</span>
			<span class="linea-basic-magic-mouse"></span>
		</a>
    </div><!-- / #home .kenbrun-hero-->



	        <!-- ========== Welcome ========== -->

	        <section id="welcome" class="container">
	          <div class="row">

	            <div class="ws-l"></div>

	            <header class="sec-heading">
	              <h2>Welcome to definity</h2>
	              <span class="subheading">Creative multipurpose one/multi page template</span>
	            </header>

	            <div class="col-md-offset-2 col-md-8 text-center ws-m">
	              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
	            </div>

	            <div class="col-md-12">
	              <img class="img-responsive wow fadeIn" data-wow-duration="2s" src="assets/images/browsers-features.png" alt="Definity HTML5 Template">
	            </div>

	          </div><!-- / .row -->
	        </section><!-- / .section -->



	        <!-- ========== Services ========== -->

	        <div class="gray-bg">
	          <section id="services" class="container ft-cards">
	            <div class="row section">

	              <header class="sec-heading">
	                <h2>What we do</h2>
	                <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span>
	              </header>

	              <!-- Item 1 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="ft-item wow fadeInUp" data-wow-duration="1s">
	                  <span class="linea-basic-pencil-ruler"></span>
	                  <h4>Pixel Perfect</h4>
	                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
	                  <a href="index-main-op.html#">Learn more <span class="linea-arrows-slim-right"></span></a>
	                </div>
	              </div>

	              <!-- Item 2 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
	                  <span class="linea-basic-cards-diamonds"></span>
	                  <h4>Multiple icon sets</h4>
	                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
	                  <a href="index-main-op.html#">Learn more <span class="linea-arrows-slim-right"></span></a>
	                </div>
	              </div>

	              <!-- Item 3 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
	                  <span class="linea-basic-star"></span>
	                  <h4>Lots of features</h4>
	                  <p>Lorem ipsum dolor sit amet, consectetur elit adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimv</p>
	                  <a href="index-main-op.html#">Learn more <span class="linea-arrows-slim-right"></span></a>
	                </div>
	              </div>

	            </div><!-- / .row -->
	          </section>
	        </div><!-- / .gray-bg -->



	        <!-- ========== Number Counters - Parallax ========== -->

	        <div class="number-counters">
	          <div class="container">
	            <div id="counters" class="row count-wrapper">

	              <!-- Item 1 -->
	              <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
	                <span id="count-1" class="count-nbr">467</span>
	                <span class="count-text">Projects completed</span>
	              </div>

	              <!-- Item 2 -->
	              <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s">
	                <span id="count-2" class="count-nbr">2835</span>
	                <span class="count-text">Emails Send</span>
	              </div>

	              <!-- Item 3 -->
	              <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s">
	                <span id="count-3" class="count-nbr">46,930</span>
	                <span class="count-text">Pixels created</span>
	              </div>

	              <!-- Item 4 -->
	              <div class="col-md-3 count-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
	                <span id="count-4" class="count-nbr">102,890</span>
	                <span class="count-text">Happy clients</span>
	              </div>

	            </div><!-- / .row -->
	          </div><!-- / .container -->
	        </div><!-- / .number-counters -->



	        <!-- ========== Features - Centerd Image ========== -->

	        <section class="container section ft-x">
	          <div class="row">

	            <header class="sec-heading">
	              <h2>Mobile Friendly</h2>
	              <span class="subheading">Created to work on all mobile devices</span>
	            </header>

	            <!-- Feature 1 -->
	            <div class="col-lg-4 wow fadeInLeft" data-wow-duration=".8s">

	              <!-- white space -->
	              <div class="ws-m"></div>

	              <!-- Material right aligned - Item 1 -->
	              <div class="col-md-12 no-gap ws-s ft-item ft-material right-align">
	                <div class="ft-content">
	                  <h5>Easily Adjusti</h5>
	                  <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius.</p>
	                </div>
	                <div class="ft-icon">
	                  <i class="fa fa-hand-peace-o"></i>
	                </div>
	              </div><!-- / .ft-item -->

	              <!-- Material right aligned - Item 2 -->
	              <div class="col-md-12 no-gap ws-s ft-item ft-material right-align">
	                <div class="ft-content">
	                  <h5>100% Responsive</h5>
	                  <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius.</p>
	                </div>
	                <div class="ft-icon">
	                  <i class="fa fa-tv"></i>
	                </div>
	              </div><!-- / .ft-item -->

	            </div><!-- / .col-lg-4 -->

	            <!-- Center Image -->
	            <div class="col-lg-4">
	              <img src="assets/images/ipad-cover-red.png" alt="iPad cover" class="img-responsive center-block wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
	            </div>

	            <!-- Features Left -->
	            <div class="col-lg-4 wow fadeInRight"  data-wow-duration=".8s">

	              <!-- white space -->
	              <div class="ws-m"></div>

	              <!-- Item 3 -->
	              <div class="col-md-12 no-gap ws-s ft-item ft-material">
	                <i class="fa fa-cogs"></i>
	                <h5>Modular Design</h5>
	                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
	              </div><!-- / .ft-item -->

	              <!-- Item 4 -->
	              <div class="col-md-12 no-gap ws-s ft-item ft-material">
	                <i class="fa fa-star"></i>
	                <h5>Lots of features</h5>
	                <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
	              </div><!-- / .ft-item -->

	            </div><!-- / .col-lg-4 -->

	          </div><!-- / .row -->
	        </section><!-- / .container -->



	        <!-- ========== Cricle Counters - Parallax ========== -->

	        <div id="skillsCircles" class="circles-counters">
	          <div class="container">
	            <div id="counters" class="row count-wrapper">

	              <!-- Item 1 -->
	              <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
	                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-gear"></span></div>
	                <span class="circle-text">Web Development</span>
	              </div>

	              <!-- Item 2 -->
	              <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".6s">
	                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-display"></span></div>
	                <span class="circle-text">Web Design</span>
	              </div>

	              <!-- Item 3 -->
	              <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".6s">
	                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-photo"></span></div>
	                <span class="circle-text">Photography</span>
	              </div>

	              <!-- Item 4 -->
	              <div class="col-sm-6 col-lg-3 circle-item wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
	                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-star"></span></div>
	                <span class="circle-text">Marketing</span>
	              </div>

	            </div><!-- / .row -->
	          </div><!-- / .container -->
	        </div><!-- / .circles-counters -->



	        <!-- ========== Feature - Steps Numbers ========== -->

	        <section class="container ft-steps-numbers">
	            <div class="row section">

	              <header class="sec-heading ws-s">
	                <h2>Our work process</h2>
	                <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span>
	              </header>

	              <!-- Step 1 -->
	              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s">
	                <span class="ft-nbr">01</span>
	                <h4>Design</h4>
	                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
	              </div>

	              <!-- Step 2 -->
	              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
	                <span class="ft-nbr">02</span>
	                <h4>Develop</h4>
	                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
	              </div>

	              <!-- Step 3 -->
	              <div class="col-lg-4 col-md-6 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
	                <span class="ft-nbr">03</span>
	                <h4>Deploy</h4>
	                <p>Lariatur, excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
	              </div>

	            </div><!-- / .row -->

	            <!-- CTA Button -->
	            <div class="row ws-m">
	              <div class="text-center">
	                <a href="index-main-op.html#contact" class="btn">Get a free quote</a>
	              </div>
	            </div><!-- / .row -->

	        </section><!-- / .container -->



	        <!-- ========== Featured Projects ========== -->

	        <div id="portfolio" class="container-fluid ft-hover-item">
	          <div class="row">

	            <!-- Item 1 -->
	            <div class="ft-item ft-1 col-md-6">
	              <div class="bg-overlay">

	                <div class="content-wrapper">
	                  <a href="pages/portfolio/portfolio-single-1.html"><h3>Branding Identity</h3></a>
	                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore</p>
	                  <a href="pages/portfolio/portfolio-single-1.html" class="btn-ghost btn-ghost-light ft-button">View Project</a>
	                </div>

	              </div><!-- / .bg-overlay -->
	            </div><!-- / .ft-item -->

	            <!-- Item 2 -->
	            <div class="ft-item ft-2 col-md-6">
	              <div class="bg-overlay">

	                <div class="content-wrapper">
	                  <a href="pages/portfolio/portfolio-single-1.html"><h3>Photography</h3></a>
	                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore</p>
	                  <a href="pages/portfolio/portfolio-single-1.html" class="btn-ghost btn-ghost-light ft-button">View Project</a>
	                </div>

	              </div><!-- / .bg-overlay -->
	            </div><!-- / .ft-item -->

	          </div><!-- / .row -->
	        </div><!-- / .container-fluid -->



	        <!-- ========== Portfolio ========== -->

	        <section class="container-fluid portfolio-layout portfolio-columns-fw">
	          <div class="row">
	            <header class="sec-heading">
	              <h2>Some of our projects</h2>
	              <span class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing</span>
	            </header>
	          </div><!-- / .row -->

	          <!-- Filters -->
	          <div class="row">
	            <ul id="pfolio-filters" class="portfolio-filters">
	              <li class="active"><a href="index-main-op.html#" data-filter="*">All</a></li>
	              <li><a href="index-main-op.html#" data-filter=".webdesing">Webdesign</a></li>
	              <li><a href="index-main-op.html#" data-filter=".print">Print</a></li>
	              <li><a href="index-main-op.html#" data-filter=".photo">Photography</a></li>
	            </ul>
	          </div>

	          <div class="row">
	            <div id="pfolio">

	              <!-- Item 1 -->
	              <div class="col-md-4 portfolio-item print">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.1.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.1.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	              <!-- Item 2 -->
	              <div class="col-md-4 portfolio-item webdesing photo">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.2.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.2.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	              <!-- Item 3 -->
	              <div class="col-md-4 portfolio-item photo print">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.3.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.3.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	              <!-- Item 4 -->
	              <div class="col-md-4 portfolio-item webdesing print">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.7.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.7.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	              <!-- Item 5 -->
	              <div class="col-md-4 portfolio-item webdesing">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.10.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.10.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	              <!-- Item 6 -->
	              <div class="col-md-4 portfolio-item photo print webdesing">
	                <div class="p-wrapper hover-default">
	                  <img src="assets/images/project-1.6.jpg" alt="Project Example">
	                  <div class="p-hover">
	                    <div class="p-content">
	                      <h4>Project Name</h4>
	                      <h6 class="subheading">Sub heading for the project</h6>
	                    </div>
	                  </div>
	                  <a href="assets/images/project-1.6.jpg" class="open-btn open-gallery"><i class="fa fa-expand"></i></a>
	                </div>
	              </div><!-- / .portfolio-item -->

	            </div><!-- / #pfolio -->
	          </div><!-- / .row -->
	        </section><!-- / .portfolio-columns-fw -->



	        <!-- ========== CTA - Contact Link ========== -->

	        <div class="cta-link">
	          <div class="bg-overlay">

	            <div class="cta-wrapper">
	              <h3 class="h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">See what we can do for you</h3>
	              <a href="index-main-op.html#contact" class="btn btn-light btn-large wow fadeIn" data-wow-delay=".3s" data-wow-duration="1s">Get in touch</a>
	            </div>

	          </div>
	        </div><!-- / .dark-bg .cta-link -->



	        <!-- ========== Team - 3 columns ========== -->

	        <div id="about" class="gray-bg">
	          <section class="container section team-3col">
	            <div class="row">

	              <header class="sec-heading">
	                <h2>Meet the team</h2>
	                <span class="subheading">We are creative professionals</span>
	              </header>


	              <!-- Member 1 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="t-item wow fadeIn" data-wow-duration="1s">

	                  <!-- Image -->
	                  <div class="t-image">
	                    <img src="assets/images/team-1.jpg" alt="Team Member" class="img-responsive">
	                    <div class="t-description">
	                      <div class="content-wrapper">
	                        <h4 class="h-alt">Hello!</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                      </div>
	                    </div>
	                  </div>

	                  <!-- Info -->
	                  <div class="t-info">
	                    <h4 class="t-name">Philip Lee</h4>
	                    <span class="t-role">CEO &amp; Founder</span>
	                    <ul class="social-links">
	                      <li><a href="index-main-op.html#"><i class="fa fa-facebook"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-twitter"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-linkedin"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-dribbble"></i></a></li>
	                    </ul>
	                  </div>

	                </div><!-- / .t-item -->
	              </div><!-- / .col-md-4 -->


	              <!-- Member 2 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="t-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">

	                  <!-- Image -->
	                  <div class="t-image">
	                    <img src="assets/images/team-2.jpg" alt="Team Member" class="img-responsive">
	                    <div class="t-description">
	                      <div class="content-wrapper">
	                        <h4 class="h-alt">Hello!</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                      </div>
	                    </div>
	                  </div>

	                  <!-- Info -->
	                  <div class="t-info">
	                    <h4 class="t-name">Carol Greene</h4>
	                    <span class="t-role">Art Director</span>
	                    <ul class="social-links">
	                      <li><a href="index-main-op.html#"><i class="fa fa-facebook"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-twitter"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-linkedin"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-dribbble"></i></a></li>
	                    </ul>
	                  </div>

	                </div><!-- / .t-item -->
	              </div><!-- / .col-md-4 -->


	              <!-- Member 3 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="t-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">

	                  <!-- Image -->
	                  <div class="t-image">
	                    <img src="assets/images/team-3.jpg" alt="Team Member" class="img-responsive">
	                    <div class="t-description">
	                      <div class="content-wrapper">
	                        <h4 class="h-alt">Hello!</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                      </div>
	                    </div>
	                  </div>

	                  <!-- Info -->
	                  <div class="t-info">
	                    <h4 class="t-name">Tyler Owens</h4>
	                    <span class="t-role">Lead Designer</span>
	                    <ul class="social-links">
	                      <li><a href="index-main-op.html#"><i class="fa fa-facebook"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-twitter"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-linkedin"></i></a></li>
	                      <li><a href="index-main-op.html#"><i class="fa fa-dribbble"></i></a></li>
	                    </ul>
	                  </div>

	                </div><!-- / .t-item -->
	              </div><!-- / .col-md-4 -->


	            </div><!-- / .row -->
	          </section><!-- / .contianer -->
	        </div><!-- / .gray-bg -->



	        <!-- ========== Testimonials ========== -->

	        <div id="testimonials" class="testimonials-parallax">
	          <div class="bg-overlay">

	            <div class="t-wrapper t-slider">

	              <!-- Testimonial 1 -->
	              <blockquote>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
	                <span class="et-quote t-type"></span>
	                <footer>
	                  <cite>
	                    <h5 class="h-alt">Patrick Owens</h5>
	                    <h5>CEO - Company Name</h5>
	                  </cite>
	                </footer>
	              </blockquote>

	              <!-- Testimonial 2 -->
	              <blockquote>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
	                <span class="et-quote t-type"></span>
	                <footer>
	                  <cite>
	                    <h5 class="h-alt">Patrick Owens</h5>
	                    <h5>CEO - Company Name</h5>
	                  </cite>
	                </footer>
	              </blockquote>

	              <!-- Testimonial 3 -->
	              <blockquote>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
	                <span class="et-quote t-type"></span>
	                <footer>
	                  <cite>
	                    <h5 class="h-alt">Patrick Owens</h5>
	                    <h5>CEO - Company Name</h5>
	                  </cite>
	                </footer>
	              </blockquote>

	            </div><!-- / .t-wrapper -->

	            <!-- Client Slider -->
	            <ul class="t-clients clients-slider">
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-1.png" alt="Client"></a></li>
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-2.png" alt="Client"></a></li>
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-3.png" alt="Client"></a></li>
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-4.png" alt="Client"></a></li>
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-5.png" alt="Client"></a></li>
	              <li><a href="index-main-op.html#"><img src="assets/images/brand-2.png" alt="Client"></a></li>
	            </ul><!-- / .t-clients -->

	          </div><!-- / .bg-overlay -->
	        </div><!-- / .testimonials-parallax -->



	        <!-- ========== Pricing Tables - 3col ========== -->

	        <div id="pricing" class="gray-bg">
	          <section class="container section pricing-tables">

	            <header class="sec-heading">
	              <h2>Our Prices</h2>
	              <span class="subheading">Low prices lots of value </span>
	            </header>

	            <div class="row">

	              <!-- Table 1 -->
	              <div class="col-md-4">
	                <div class="p-table wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">

	                  <!-- Heading -->
	                  <h4>Starter</h4>
	                  <div class="price">
	                    <span class="currency">$</span>
	                    <span class="value">11</span>
	                    <span class="type">\mo</span>
	                  </div>
	                  <p class="desc">Test the waters</p>
	                  <hr>

	                  <!-- Items -->
	                  <ul class="p-items">
	                    <li><b>10Gb Data</b> Storage</li>
	                    <li><b>1 Domain</b> Name</li>
	                    <li><b>Full</b> Access</li>
	                    <li><b>1 Year</b> Licence</li>
	                    <li><b>Free</b> Support</li>
	                  </ul>
	                   <hr>

	                  <button class="btn-ghost">Sign up now</button>
	                </div><!-- / .p-table -->
	              </div><!-- / .col-md-4 -->


	              <!-- Table 2 (featured) -->
	              <div class="col-md-4">
	                <div class="p-table pt-featured wow fadeInUp" data-wow-duration="1s">

	                  <!-- Star -->
	                  <div class="banner">
	                    <span class="star"><i class="fa fa-star"></i></span>
	                  </div>

	                  <!-- Header -->
	                  <h4>Professional</h4>
	                  <div class="price">
	                    <span class="currency">$</span>
	                    <span class="value">51</span>
	                    <span class="type">\mo</span>
	                  </div>
	                  <p class="desc">Get the job done</p>
	                  <hr>

	                  <!-- Items -->
	                  <ul class="p-items">
	                    <li><b>50Gb Data</b> Storage</li>
	                    <li><b>5 Domain</b> Name</li>
	                    <li><b>Full</b> Access</li>
	                    <li><b>2 Year</b> Licence</li>
	                    <li><b>Free</b> Support</li>
	                  </ul>
	                   <hr>

	                  <button class="btn-ghost">Sign up now</button>
	                </div><!-- / .p-table -->
	              </div><!-- / .col-md-4 -->


	              <!-- Table 3 -->
	              <div class="col-md-4">
	                <div class="p-table wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">

	                  <!-- Header -->
	                  <h4>Ultimate</h4>
	                  <div class="price">
	                    <span class="currency">$</span>
	                    <span class="value">71</span>
	                    <span class="type">\mo</span>
	                  </div>
	                  <p class="desc">The best or nothing</p>
	                  <hr>

	                  <!-- Items -->
	                  <ul class="p-items">
	                    <li><b>200Gb Data</b> Storage</li>
	                    <li><b>15 Domain</b> Name</li>
	                    <li><b>Full</b> Access</li>
	                    <li><b>4 Year</b> Licence</li>
	                    <li><b>Free</b> Support</li>
	                  </ul>
	                   <hr>

	                  <button class="btn-ghost">Sign up now</button>
	                </div><!-- / .p-table -->
	              </div><!-- / .col-md-4 -->

	            </div><!-- / .row -->
	          </section><!-- / .container -->
	        </div><!-- / .gray-bg -->



	        <!-- ========== Video Background Section ========== -->

	        <div class="video-bg-section">

	          <!-- Video Background -->
	          <div id="section-video" class="player"
	               data-property="{videoURL:'http://youtu.be/Scxs7L0vhZ4',containment:'.video-bg-section',autoPlay:true, mute:true, startAt:71, stopAt:300, opacity:1}">
	          </div>

	          <!-- Video Link -->
	          <div class="video-sec-content">
	            <h3 class="cta-lead h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">Show your story with Definity</h3>
	            <a href="https://www.youtube.com/watch?v=k5C1Bt4k-iA" class="play-btn popup-video">
	              <span class="play-icon linea-music-play-button"></span>
	              <h5>Play video</h5>
	            </a>
	          </div><!-- / .video-sec-content -->

	        </div><!-- / .video-bg-section -->



	        <!-- ========== Blog Preview ========== -->

	        <div class="gray-bg">
	          <section id="blog" class="section container blog-columns blog-preview">
	            <div class="row">

	              <header class="sec-heading">
	                <h2>Latest from our blog</h2>
	                <span class="subheading">Check out our blog to see what were up to</span>
	              </header>


	              <!-- Blog Post 1 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="blog-post wow fadeIn" data-wow-duration="2s">

	                  <!-- Image -->
	                  <a href="pages/blog/blog-post.html" class="post-img"><img src="assets/images/blog-post-img-1.3.jpg" alt="Blog Post 1"></a>

	                  <div class="bp-content">

	                    <!-- Meta data -->
	                    <div class="post-meta">
	                      <a href="index-main-op.html#" class="post-date">
	                        <i class="fa fa-calendar-o"></i>
	                        <span>August 01.2015</span>
	                      </a>
	                      <a href="index-main-op.html#" class="post-comments">
	                        <i class="fa fa-comments-o"></i>
	                        <span>12</span>
	                      </a>
	                    </div><!-- / .meta -->

	                    <!-- Post Title -->
	                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Blog Post Title</h4></a>

	                    <!-- Blurb -->
	                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

	                    <!-- Link -->
	                    <a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

	                  </div><!-- / .bp-content -->

	                </div><!-- / .blog-post -->
	              </div><!-- / .col-lg-4 -->


	              <!-- Blog Post 2 -->
	              <div class="col-lg-4 col-md-6 mb-sm-50">
	                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">

	                  <!-- Image -->
	                  <a href="pages/blog/blog-post.html" class="post-img"><img src="assets/images/blog-post-img-1.4.jpg" alt="Blog Post 1"></a>

	                  <div class="bp-content">

	                    <!-- Meta data -->
	                    <div class="post-meta">
	                      <a href="index-main-op.html#" class="post-date">
	                        <i class="fa fa-calendar-o"></i>
	                        <span>August 01.2015</span>
	                      </a>
	                      <a href="index-main-op.html#" class="post-comments">
	                        <i class="fa fa-comments-o"></i>
	                        <span>12</span>
	                      </a>
	                    </div><!-- / .meta -->

	                    <!-- Post Title -->
	                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Blog Post Title</h4></a>

	                    <!-- Blurb -->
	                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

	                    <!-- Link -->
	                    <a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

	                  </div><!-- / .bp-content -->

	                </div><!-- / .blog-post -->
	              </div><!-- / .col-lg-4 -->


	              <!-- Blog Post 3 -->
	              <div class="col-lg-4 col-md-6">
	                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

	                  <!-- Image -->
	                  <a href="pages/blog/blog-post.html" class="post-img"><img src="assets/images/blog-post-img-1.6.jpg" alt="Blog Post 1"></a>

	                  <div class="bp-content">

	                    <!-- Meta data -->
	                    <div class="post-meta">
	                      <a href="index-main-op.html#" class="post-date">
	                        <i class="fa fa-calendar-o"></i>
	                        <span>August 01.2015</span>
	                      </a>
	                      <a href="index-main-op.html#" class="post-comments">
	                        <i class="fa fa-comments-o"></i>
	                        <span>12</span>
	                      </a>
	                    </div><!-- / .meta -->

	                    <!-- Post Title -->
	                    <a href="pages/blog/blog-post.html" class="post-title"><h4>Blog Post Title</h4></a>

	                    <!-- Blurb -->
	                    <p>Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...</p>

	                    <!-- Link -->
	                    <a href="pages/blog/blog-post.html" class="btn btn-small">Read More</a>

	                  </div><!-- / .bp-content -->

	                </div><!-- / .blog-post -->
	              </div><!-- / .col-lg-4 -->


	            </div><!-- / .row -->
	          </section><!-- / .container -->
	        </div><!-- / .gray-bg -->



	        <!-- ========== CTA - Newsletter Signup ========== -->

	        <div class="cta-newsletter">
	          <div class="bg-overlay">
	            <div class="cta-wrapper">

	              <h3 class="cta-lead h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">Join our newsletter</h3>

	              <form class="mc-ajax mc-form subscribe-form" _lpchecked="1">

	                <!-- Email -->
	                <input type="email" name="EMAIL" placeholder="Your email address" id="mc-email" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s" >

	                <!-- Send Button -->
	                <input type="submit" name="subscribe" value="Join Us" class="btn btn-light btn-large wow fadeInUp mc-send-btn" data-wow-delay=".1s" data-wow-duration="1s">

	                <!-- Info (uncomment this for extra info) -->
	                <!-- <label for="mc-email" class="mc-info"></label> -->

	                <!-- Ajax message -->
	                <div class="subscribe-result"></div>

	              </form>

	            </div><!-- / .cta-wrapper -->
	          </div><!-- / .bg-overlay -->
	        </div><!-- / .cta-newsletter -->


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

	<!-- Definity JS -->
	<script src="assets/js/main.js"></script>

@endsection
