@extends('layouts.default')

@section('content')
<body class='dark top-nav'>
	<div class=container-fluid>
		<header data-spy=affix>
			@include('includes.header')
		</header>

		<section class=gray>
			<div class=row>
				<div class='col-md-4 mobile-center'>
					<h4 class=subtitle>Gists + Headlines</h4>
					<h2>The Blog</h2>
				</div>
				<div class=col-md-8>
					<p>There are lots of great blogs for developers, but none for the best and most useful gists from github. Here we highlight some of the greats that we currently use.</p>
				</div>
			</div>
		</section>

		<section class=top-line>
			<!-- <div class=row>
				<div class=col-md-12>
					<div class='filter-container stick' data-spy=affix> <div class=filter-trigger>Categories</div> <ul class=filters> <li> <button data-filter='*'>All</button> </li> <li> <button data-filter='.threedee'>3D</button> </li> <li> <button data-filter='.abstract'>Abstract</button> </li> <li> <button data-filter='.typography'>Typography</button> </li> </ul> </div>
				</div>
			</div> -->
			<div class='col-3 blog' id=grid>

				@foreach ($gists as $gist)
					<a class='item transition threedee' href='{{route('blog.single', $gist->id)}}'>
						<!-- <div class=thumb>
							<img alt="" src="images/work/01.jpg"/>
							<div class=excerpt>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus accumsan leo, nec congue risus feugiat ac.
							</div>
						</div> -->
						<div class=caption>
							<h5 class=extra>{{$gist->created_at}}</h5>
							<div class=titles>
								<h3 class=title>{{$gist->description}}</h3>
							</div>
						</div>
					</a>
				@endforeach

			</div>
			 <!-- <div class=row>
			 	<div class='col-md-offset-3 col-md-6 text-center'>
			 		<div class=btn-group role=group>
			 			<button type=button class="btn btn-xs btn-default active">1</button>
			 			<button type=button class="btn btn-xs btn-default">2</button>
			 			<button type=button class="btn btn-xs btn-default">3</button>
			 			<button type=button class="btn btn-xs btn-default">4</button>
			 		</div>
			 	</div>
			 </div> -->

		</section>

		<section class=gray>
			<div class=row>
				<div class='col-md-6 col-md-offset-3 text-center'>
					<div class=title-block>
						<h2>What are gists?</h2>
					</div>
					<p>Gists are a great way to share your work. You can share single files, parts of files, or full applications. You can access gists at https://gist.github.com. Every gist is a Git repository, which means that it can be forked, cloned, and manipulated in every way.</p>
				</div>
			</div>
		</section>

		@include('includes.footer')

	</div>
</body>
@endsection

@section('scripts')
	@include('includes.commonScripts')
@endsection
