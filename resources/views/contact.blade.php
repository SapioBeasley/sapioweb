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
					<form action='#' class=row id=form name=form>
						<div class='col-md-8 col-md-offset-2'>
							<div class=block>
								<div class='title-block text-center'>
									<h3>Contact Us</h3>
								</div>
								<div class=row>
									<div class=col-md-6>
										<input class=form-control id=name name=name placeholder=Name>
										<input class=form-control id=email name=email placeholder=E-mail>
										<input class=form-control id=phone name=phone placeholder=Phone>
									</div>
									<div class=col-md-6>
										<textarea class=form-control id=message name=message placeholder=Message type=text></textarea>
									</div>
								</div>
								<div class=row>
									<div class='col-md-12 text-center'>
										<button class=btn id=send type=submit>Send</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>

			@include('includes.footer')

		</div>
	</body>
@endsection

@section('scripts')
	@include('includes.commonScripts')
@endsection
