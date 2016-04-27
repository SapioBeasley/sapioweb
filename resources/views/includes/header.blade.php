<div class="pix_row row">

	<!-- === LOGO === -->
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-9">
		<a href="{{route('welcome')}}" class="logo">
			<img src="{{asset('images/logo.jpg')}}"  alt="logo"/>
		</a>
	</div>

	<!-- === MAIN MENU === -->
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-3">
		<div class="slide-menu">
			<nav>

				<!-- === SHOW MENU BUTTON === -->
				<button data-toggle="offcanvas" class="hamburger is-closed" type="button">
					<span class="hamb-top"></span>
					<span class="hamb-middle"></span>
					<span class="hamb-bottom"></span>
				</button>

				<!-- === MENU ITEMS === -->
				<ul class="main-menu">
					@include('includes.nav')
				</ul>
			</nav>
		</div>
	</div>
</div>
