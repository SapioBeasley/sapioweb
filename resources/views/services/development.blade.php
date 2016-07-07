@extends('layouts.default')

@section('title', 'Development Service')

@section('subheading', 'see what we are up to')

@section('content')

    <!-- ========== Enter Your Content Here ========== -->

    <section class="container section">
        <div class="row ws-m">

            <header class="sec-heading">
                <h2>@yield('title')</h2>
                <span class="subheading">@yield('subheading')</span>
            </header>

            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam repudiandae, ex fugit vero, earum quibusdam exercitationem impedit voluptas officiis placeat, reiciendis totam dolore atque ipsam incidunt quasi. Fugiat, doloribus, quia!</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam repudiandae, ex fugit vero, earum quibusdam exercitationem impedit voluptas officiis placeat, reiciendis totam dolore atque ipsam incidunt quasi. Fugiat, doloribus, quia!</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam repudiandae, ex fugit vero, earum quibusdam exercitationem impedit voluptas officiis placeat, reiciendis totam dolore atque ipsam incidunt quasi. Fugiat, doloribus, quia!</p>
            </div>
        </div><!-- / .row -->

        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, pariatur, libero. Necessitatibus, eveniet, voluptatibus. Voluptatum dolorem nihil cum magnam eveniet impedit veniam assumenda nostrum, sequi accusamus, molestias expedita soluta fugit distinctio quisquam! Molestias adipisci dolores voluptas pariatur ut, modi, consectetur possimus nam ipsum a. Ratione.</p>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, pariatur, libero. Necessitatibus, eveniet, voluptatibus. Voluptatum dolorem nihil cum magnam eveniet impedit veniam assumenda nostrum, sequi accusamus, molestias expedita soluta fugit distinctio quisquam! Molestias adipisci dolores voluptas pariatur ut, modi, consectetur possimus nam ipsum a. Ratione.</p>
            </div>
        </div>
    </section><!-- / .container -->

@endsection

@section('scripts')

    <!-- ========== Scripts ========== -->

    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/vendor/google-fonts.js"></script>
    <script src="../assets/js/vendor/jquery.easing.js"></script>
    <script src="../assets/js/vendor/jquery.waypoints.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script src="../assets/js/vendor/smoothscroll.js"></script>
    <script src="../assets/js/vendor/jquery.localScroll.min.js"></script>
    <script src="../assets/js/vendor/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/vendor/jquery.stellar.min.js"></script>
    <script src="../assets/js/vendor/jquery.parallax.js"></script>
    <script src="../assets/js/vendor/slick.min.js"></script>
    <script src="../assets/js/vendor/jquery.easypiechart.min.js"></script>
    <script src="../assets/js/vendor/countup.min.js"></script>
    <script src="../assets/js/vendor/isotope.min.js"></script>
    <script src="../assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
    
@endsection
