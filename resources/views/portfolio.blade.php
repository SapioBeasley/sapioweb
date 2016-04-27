@extends('layouts.default')

@section('content')
<main class="section" id="main">

    <!-- <div class="text-left filter " >
		<ul id="filter" class="clearfix">
			<li class="title-action"><a href="09-portfolio.html" class="current btn" data-filter="*">All Works</a></li>
			<li><a href="09-portfolio.html" class="btn" data-filter=".cat01">Design</a></li>
			<li><a href="09-portfolio.html" class="btn" data-filter=".cat02">Motion</a></li>
			<li><a href="09-portfolio.html" class="btn" data-filter=".cat03">Illustration</a></li>
			<li><a href="09-portfolio.html" class="btn" data-filter=".cat04">Print</a></li>
			<li><a href="09-portfolio.html" class="btn" data-filter=".cat05">Web</a></li>
		</ul>
	</div> -->

	<div class="isotope-frame animated" data-animation="bounceInUp">
		<div class="isotope-filter isotope-skin2 isotope-nopadding ">

			@foreach($portfolios as $portfolio)
				@include('includes.portfolioLoop')
			@endforeach

		</div>
	</div>

</main>
@endsection

@section('scripts')

<!-- OTHER SCRIPTS -->
<script src="{{asset('plugins/letters/jquery.shuffleLetters.js')}}"></script>
<script src="{{asset('plugins/letters/jquery.tickertype.js')}}"></script>
<script src="{{asset('plugins/scrollreveal/scrollreveal.min.js')}}"></script>

@endsection
