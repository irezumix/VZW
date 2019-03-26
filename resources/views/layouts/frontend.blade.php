<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>YAP</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>
<body>
    <div class="container-full-width">
        <header class="nav-header text-right">
            {{-- @include('includes.logo') --}}
            @include('includes.main-nav')
            @yield("nav")
        </header>
        <header class="nav-title text-center text-light">
            <h1>
                @yield('nav-title')
            </h1>
        </header>
    </div>
    <div class="container-full-width">
        
        <section class="main-content">
            @yield('main-content')
        </section>
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
        <footer class="main-footer text-center">
            <small>&copy; {{ date('Y') }} - Webdesign by <a href="https://dige.be">DIGE</a></small>
        </footer>
    </div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>
(function($) {
    
  var allPanels = $('.accordion > p').hide();
    
  $('.accordion > div > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
  });

})(jQuery);</script>

</body>
</html>