<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dinwoo</title>

    @if(isset($post))
        <meta name="keywords" content="{{$post->key_words}}" />
        <meta name="description" content="{{$post->desc}}">
        @else
            <meta name="keywords" content="Dinwoo" />
            <meta name="description" content="Ofertas para el viajero">
    @endif

    <meta name="author" content="fbavaro56.github.io">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('css/skins/skin-corporate-8.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body>

<div class="body">
    @include('partials.header')

   @yield('content')

    @include('partials.footer')
</div>

<!-- Vendor -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{asset('vendor/common/common.min.js')}}"></script>
<script src="{{asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendor/vide/vide.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('js/theme.init.js')}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>
