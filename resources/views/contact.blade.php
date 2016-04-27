@extends('layouts.default')

@section('content')
<main class="section" id="main">
	<div class="pix_row row contact-info">

		<!-- === CONTACTS FORM === -->
		<!-- <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 col-xs-12"> -->
		<div class="col-md-12">
			<div class="contact-form">
				@include('forms.contactForm')
				<div class="send-result"></div>
			</div>
		</div>

	</div>

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

<!-- GOOGLE MAP API -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAHDFaUVFTKqrrUtBXubJbrUxKKq-t8Fw&amp;callback=initMap" async defer></script> -->
@endsection
