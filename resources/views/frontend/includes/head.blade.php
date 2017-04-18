<link rel="stylesheet" href="{{ asset('./css/general.css') }}">
<link rel="stylesheet" href="{{ asset('./css/responsive.css') }}">
<meta name="viewport" content="width=device-width">
{{--@yield('header-custom-tags')--}}
@if(!empty($metaTags['title']))
<title>{{ $metaTags['title'] }}</title>
@endif
@if(!empty($metaTags['description']))
<meta name="description" content="{{ $metaTags['description'] }}">
@endif
@if(!empty($metaTags['keywords']))
<meta name="keywords" content="{{ $metaTags['keywords'] }}">
@endif
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{{ asset('./js/parallax.min.js') }}"></script>
<script src="{{ asset('./js/pace.min.js') }}"></script>
<link href="{{ asset('./css/pace-theme-barber-shop.css') }}" rel="stylesheet" />

<link rel="shortcut icon" href="{{ asset('./favicons.png') }}" type="image/x-icon">
@yield('custom-header')