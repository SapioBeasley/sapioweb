@extends('layouts.default')

@section('title', 'Hosting Service')

@section('subheading', 'What is web hosting')

@section('content')

    <!-- ========== Enter Your Content Here ========== -->

    <section class="container section">
        <div class="row ws-m">

            <header class="sec-heading">
                <h2>@yield('title')</h2>
                <span class="subheading">@yield('subheading')</span>
            </header>

            <div class="col-md-12">
                <p>Hosting (also known as Web site hosting, Web hosting, and Webhosting) is the business of housing, serving, and maintaining files for one or more Web sites. More important than the computer space that is provided for Web site files is the fast connection to the Internet. Most hosting services offer connections on T-carrier system lines. Typically, an individual business hosting its own site would require a similar connection and it would be expensive. Using a hosting service lets many companies share the cost of a fast Internet connection for serving files.</p>

                <p>A number of Internet access providers, such as America Online, offer subscribers free space for a small Web site that is hosted by one of their computers. Geocities is a Web site that offers registered visitors similar free space for a Web site. While these services are free, they are also very basic.</p>

                <p>A number of hosting companies describe their services as virtual hosting. Virtual hosting usually implies that their services will be transparent and that each Web site will have its own domain name and set of e-mail addresses. In most usages, hosting and virtual hosting are synonyms. Some hosting companies let you have your own virtual server, the appearance that you are controlling a server that is dedicated entirely to your site.</p>

                <p>Dedicated hosting is the provision of a dedicated server machine that is dedicated to the traffic to your Web site. Only very busy sites require dedicated hosting. Many companies purchase their own servers and place them on a site that provides fast access to the Internet. This practice is called colocation.</p>
            </div>

        </div><!-- / .row -->
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
