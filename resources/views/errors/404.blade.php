@extends('layouts.default')

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
						<h1>404</h1>
						<h3>Error. Page not found.</h3>
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
