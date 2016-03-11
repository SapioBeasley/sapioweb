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
					<h4 class=subtitle>Design + Typography</h4>
					<h2>The Blog</h2>
				</div>
				<div class=col-md-8>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus accumsan leo, nec congue risus feugiat ac. Mauris viverra ligula velit, sit amet imperdiet nunc tincidunt in. Ut tristique quam congue, aliquam tortor sit amet.</p>
				</div>
			</div>
		</section>

		<section class=top-line>
			<div class=row>
				<div class=col-md-12>
					<div class='filter-container stick' data-spy=affix> <div class=filter-trigger>Categories</div> <ul class=filters> <li> <button data-filter='*'>All</button> </li> <li> <button data-filter='.threedee'>3D</button> </li> <li> <button data-filter='.abstract'>Abstract</button> </li> <li> <button data-filter='.typography'>Typography</button> </li> </ul> </div>
				</div>
			</div>
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
			 <div class=row> <div class='col-md-offset-3 col-md-6 text-center'> <div class=btn-group role=group> <button type=button class="btn btn-xs btn-default active">1</button> <button type=button class="btn btn-xs btn-default">2</button> <button type=button class="btn btn-xs btn-default">3</button> <button type=button class="btn btn-xs btn-default">4</button> </div> </div> </div> </section> <section class=gray> <div class=row> <div class='col-md-6 col-md-offset-3 text-center'> <div class=title-block> <h2>Just Be</h2> </div> <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> </div> </div>
			</section>

		@include('includes.footer')

	</div>
</body>
@endsection

@section('scripts')
	@include('includes.commonScripts')
@endsection
