<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<div class="container">

<div class="header">
  @include('includes.header')
</div>

@yield('content')

<footer class="footer divider-right-bot divider-right-bot-footer">
	@include('includes.footer')
</footer>

<aside id="mobile-menu">

  <!-- === SLIDE MENU === -->
  <ul id="left-menu" class="left-menu">
    @include('includes.nav')
  </ul>

</aside>

<div class="black-overlay" id="black-overlay"></div>

</div>

<!-- LIBRARIES -->

<script src="{{asset('js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/modernizr.custom.js')}}" type="text/javascript"></script>

<!-- AZERO-->

<script src="{{asset('plugins/azero/azexo_reveals.min.js')}}"></script>
<script src="{{asset('plugins/azero/easejs.js')}}"></script>
<script src="{{asset('plugins/azero/tweenjs.js')}}"></script>
<script src="{{asset('plugins/azero/azexo_reveals.min.js')}}"></script>
<script src="{{asset('plugins/azero/azexo_transitions.min.js')}}"></script>

<script type="text/javascript" src="{{asset('plugins/sliderpro/js/jquery.sliderPro.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>

<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('plugins/magnific/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script src="{{asset('js/jquery.form-validator.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/cssua.min.js')}}"></script>

<!-- CUSTOM SCRIPT -->
<script src="{{asset('js/custom.js')}}"></script>

@yield('scripts')

</body>
</html>
