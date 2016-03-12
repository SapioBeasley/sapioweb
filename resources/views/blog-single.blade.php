@extends('layouts.default')

@section('title', $gist->description)
@section('description', 'New gist from Andreas Beasley @sapiobeasley. Become more informed and become a better and more efficient developer')

@section('content')
<body class='accent top-nav'>
	<div class=container-fluid>
		<header data-spy=affix>
			@include('includes.header')
		</header>

		<section class='jumbotron small'>
			<div class='bg faded animated' style='background-image: url(https://source.unsplash.com/random);'></div>
			<div class='row vcenter'>
				<div class='col-md-12 text-center'>
					<h1>{{$gist->description}}</h1>
				</div>
			</div>
		</section>

		<section>
			<div class=row>
				<div class='col-md-8 col-md-offset-2'>
					<div class=blog-date>{{$gist->created_at}}</div>
					<div class=content>
						@foreach($gist->files as $fileKey => $fileName)
							{!! Markdown::convertToHtml($gist->files->{$fileKey}->content) !!}
						@endForeach
					</div>
				</div>
			</div>
		</section>

		<section class='block gray'>
			<div class=row>
				<div class='col-md-8 col-md-offset-2'>
					<div class=comment-box>
						<div class=title>
							<h3>Leave a comment</h3>
						</div>

						<div id="disqus_thread"></div>
						<script>
						/**
						* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
						*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');

						s.src = '//sapioweb.disqus.com/embed.js';

						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
					</div>
		</section>

		@include('includes.footer')

	</div>
</body>
@endsection

@section('scripts')
	@include('includes.commonScripts')
@endsection
