<title>@yield('title') SapioWeb.com • A Smarter Development Agency</title>
<meta charset=utf-8>
<meta content='Sapioweb is a Web Development &amp; Web Hosting Agency suitable for any kind of business or freelance professional. Showcase your work, tell your businesses story and get noticed online.' name=description>
<meta content='1 day' name=revisit-after>
<meta content='width=device-width, initial-scale=1' name=viewport>
<link rel="shortcut icon" href="{{asset('favicon.ico?v=' . rand(1, 999))}}" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel=stylesheet>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700' rel=stylesheet>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel=stylesheet>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="{{asset('stylesheets/font-awesome.css')}}" rel=stylesheet />
<link href="{{asset('stylesheets/style.css')}}" rel=stylesheet />
<!--[if lt IE 9]>
<script src="javascripts/html5shiv.js"></script>
<script src="javascripts/respond.min.js"></script>
<![endif]-->

<meta name="theme-color" content="#37474F">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#37474F">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#37474F">

<meta property="og:title" content="@yield('title') SapioWeb.com • A Smarter Development Agency" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:image" content="{{asset('images/ogImage.jpg')}}" />

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.sapioweb.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.sapioweb.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.sapioweb.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '798445970260409');
fbq('track', 'ViewContent');
fbq('track', "PageView");
</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=798445970260409&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
