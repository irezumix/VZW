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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.css">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>


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


<script src="{{asset('js/custom.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js"></script>
<script>



$(function() {
		var Accordion = function(el, multiple) {
				this.el = el || {};
				this.multiple = multiple || false;

				var links = this.el.find('.article-title');
				links.on('click', {
						el: this.el,
						multiple: this.multiple
				}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
				var $el = e.data.el;
				$this = $(this),
						$next = $this.next();

				$next.slideToggle();
                $this.parent().toggleClass('open');

				if (!e.data.multiple) {
						$el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
				};
		}
        var accordion = new Accordion($('.accordion-container'), false);
});

</script>

</body>
</html>