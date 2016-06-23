@extends('layouts.default')

@section('content')

    <!-- ========== Maintenance Page ========== -->

    <div class="bg-maintenance">
        <div class="content-wrapper">

            <div class="content-inner">
                <i class="fa fa-gears"></i>
                <h3>Sorry, we`re down for maintenance</h3>
                <p>We,ll be back shortly.</p>
            </div>

        </div>
    </div>

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

    <!-- Definity JS -->
    <script src="../assets/js/main.js"></script>
    {{-- @include('includes.commonScripts') --}}
@endsection
