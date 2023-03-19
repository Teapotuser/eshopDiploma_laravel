<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys shop</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/search_style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/left-bar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/filter_price.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sorting.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/cart-right.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">   
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/footer_final.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style_burger.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/adaptive.css') }}" type="text/css">
    @yield('custom_css')
    <!-- <link rel="stylesheet" href="css/carousel.css" type="text/css"> -->
    <!-- <script src="js/jquery-3.6.1.js" type="text/javascript"></script> -->
    <!-- <script src="js/control.js" type="text/javascript"></script> -->
   <!--  <script src="js/slick.min.js" type="text/javascript"></script> -->
    
    <link href="https://www.dafontfree.net/embed/bXVzZW8tNTAwJmRhdGEvMTgvbS84NzE4Ni9NdXNlbzUwMC1SZWd1bGFyLm90Zg" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!-- Здесь был header тэг, теперь layouts-header.blade.php -->
    @include('includes.header')

    <!-- Здесь был main тэг, теперь index.blade.php-->
    @yield('content')

    <!--Здесь был footer тэг, теперь layouts-footer.blade.php-->
    @include('includes.footer')

<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>     -->
<script src="{{ asset('js/jquery.min.js') }}" type='text/javascript'></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="{{ asset('js/menu.js') }}"></script> 

<script src="{{ asset('js/control.js') }}" type="text/javascript"></script>   
<script src="{{ asset('js/price-control.js') }}" type='text/javascript'></script> 
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/cart-right.js') }}" type="text/javascript"></script>
@yield('custom_js')
</body>
</html>