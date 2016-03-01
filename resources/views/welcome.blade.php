@extends('layouts.default')

@section('content')
	<body class='accent bottom-nav'>
		<div class=container-fluid>

			<header data-spy=affix>
				@include('includes.header')
			</header>

			<section class=jumbotron>
				<div class='bg faded animated' style='background-image: url(images/work/02.jpg);'></div>
				<div class='row vcenter'>
					<div class='col-md-6 col-md-offset-3 text-center'>
						<h1>We'll Be Right Back</h1>
						<label>Current phase: ReBranding</label>
						<div class=progress>
							<div aria-valuemax=100 aria-valuemin=0 aria-valuenow=40 class='progress-bar progress-bar-success' role=progressbar style='width: 70%'></div>
						</div>
						<p>Please hold on. Sapioweb will soon be back up soon!</p>
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
