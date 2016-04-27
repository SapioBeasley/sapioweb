@extends('layouts.default')

@section('content')
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section" id="main">
	@foreach ($gists as $gist)
		<!-- === BLOG ITEM === -->
		<div class="pix_row row scrollreveal">

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="blog-info">
					<h5 class="blog-title"><a href="{{route('blog.single', $gist->id)}}">{{$gist->description}}</a></h5>
					<div  class="blog-content">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p> -->
					</div>
					<div class="blog-data">
						<div class="pull-left">@include('includes.postedOn')</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="blog-thumb"><a href="07-blog-post.html"><img src="http://source.unsplash.com/random/600x300?nature={{rand(1,99)}}" alt="galliope"></a></div>
			</div>

		</div>
	@endforeach

	<!-- === BLOG PAGINATION === -->
	<!-- <div class="pix_row row">
		<div class="pix-pagination">
			Pages: &nbsp; <strong>1</strong><a href="06-blog-main.html#">2</a><a href="06-blog-main.html#">3</a>
		</div>
	</div> -->

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
