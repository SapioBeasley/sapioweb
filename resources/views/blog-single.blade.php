@extends('layouts.default')

@section('content')
<main class="section" id="main">
	<div class="pix_row row blog-post">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="post-info">

				<div class="post-data">@include('includes.postedOn')</div>
				<h5 class="post-title">{{$gist->description}}</h5>

				<div  class="post-content">
					@foreach($gist->files as $fileKey => $fileName)
						{!! Markdown::convertToHtml($gist->files->{$fileKey}->content) !!}
					@endforeach
				</div>

				<hr class="post-divider">

				<div class="post-data">
					<div class="post-share">
						Share This Post
						<a href="07-blog-post.html#"><i class="fa fa-pinterest"></i></a>
						<a href="07-blog-post.html#"><i class="fa fa-twitter"></i></a>
						<a href="07-blog-post.html#"><i class="fa fa-facebook"></i></a>
						<a href="07-blog-post.html#"><i class="fa fa-instagram"></i></a>
						<a class="latest" href="07-blog-post.html#"><i class="fa fa-google"></i></a>
					</div>
				</div>

				<div class="title-o comment-title">Leave A Reply</div>
				@include('includes.comments')

			</div>
		</div>
	</div>
</main>
@endsection

@section('scripts')
<script src="{{asset('js/prism.js')}}"></script>
@endsection
