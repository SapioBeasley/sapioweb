@extends('layouts.default')

@section('content')
	<body class='bottom-nav'>
		<div class=container-fluid>

			<header data-spy=affix>
				@include('includes.header')
			</header>

			<section class=jumbotron>
				<div class='bg animated' style='background:#fff;'></div>
				<div class='row vcenter'>
					@include('forms.contact')
				</div>
			</section>

			@include('includes.footer')

		</div>
	</body>
@endsection

@section('scripts')
	@include('includes.commonScripts')
@endsection
