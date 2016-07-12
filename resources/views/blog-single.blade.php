@extends('layouts.default')

@section('title', $gist->description)

@section('subheading', 'A gist from Sapioweb')

@section('breadcrumbs')

	<li><a href="{{url('/')}}">Home</a></li>
	<li class="active">{{$gist->description}}</li>

@endsection

@section('content')

	@include('includes.breadcrumbs')

	<!-- ========== Single Blog Post ========== -->

	<div id="blog" class="section container blog-classic">
		<div class="row">
			<div class="col-md-12 mb-sm-160">

				<!-- Blog Post -->
				<div class="col-md-12 blog-post-single wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">

					<!-- Image -->
					{{-- <img class="img-responsive post-img" src="../../assets/images/blog-post-big-1.jpg" alt="Blog Post 1"> --}}

					<!-- Meta data -->
					<div class="post-meta">
							<i class="fa fa-calendar-o"></i>
							<span>@include('includes.postedOn')</span>
					</div><!-- / .meta -->

					<!-- Title -->
					<h2 class="post-title">{{$gist->description}}</h2>

					<div class="blog-post-content">
						@foreach($gist->files as $fileKey => $fileName)
							{!! Markdown::convertToHtml($gist->files->{$fileKey}->content) !!}
						@endforeach
					</div>

				</div><!-- / .blog-post-single -->



				<!-- ========== Comments ========== -->

				<div class="row">
					<div class="col-md-12 blog-post-comments">

						<!-- Leave a comment -->
						<div class="comment-form">
							<h4 class="blog-section-title">Leave a comment</h4>
							@include('includes.comments')
						</div><!-- / .comment-form -->

					</div><!-- / .blog-post-comments -->
				</div><!-- / .row -->

			</div><!-- / .col-md-8 -->

		</div><!-- / .row -->
	</div><!-- / .container -->

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
	<script src="{{asset('assets/js/prism.js')}}"></script>
	<script src="../../assets/js/main.js"></script>

@endsection
