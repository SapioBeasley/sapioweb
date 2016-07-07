<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>@yield('title', 'SapioWeb.com | A smarter Web Agency')</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.png')}}" />
<!-- Bootstrap -->
<link rel="stylesheet" href="{{url('assets/styles/vendor/bootstrap.min.css')}}">
<!-- Fonts -->
<link rel="stylesheet" href="{{url('assets/fonts/et-lineicons/css/style.css')}}">
<link rel="stylesheet" href="{{url('assets/fonts/linea-font/css/linea-font.css')}}">
<link rel="stylesheet" href="{{url('assets/fonts/fontawesome/css/font-awesome.min.css')}}">
<!-- Slider -->
<link rel="stylesheet" href="{{url('assets/styles/vendor/slick.css')}}">
<!-- Lightbox -->
<link rel="stylesheet" href="{{url('assets/styles/vendor/magnific-popup.css')}}">
<!-- Animate.css -->
<link rel="stylesheet" href="{{url('assets/styles/vendor/animate.css')}}">
<link rel="stylesheet" href="{{url('assets/styles/main.css')}}">
<link rel="stylesheet" href="{{url('assets/styles/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/prism.css')}}"/>

<!-- JS -->
<script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

<meta name="theme-color" content="#37474F">
<meta name="msapplication-navbutton-color" content="#37474F">
<meta name="apple-mobile-web-app-status-bar-style" content="#37474F">

<meta property="og:title" content="@yield('title') SapioWeb.com • A Smarter Development Agency" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:image" content="{{asset('images/ogImage' . rand(1,4) . '.jpg') . '?id=' . rand()}}" />
