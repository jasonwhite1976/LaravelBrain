<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @php
        if( isset($post->post_seo_title) && Request::url() != url('/') ){
          $page_title = 'Hexagon Brain | ' . $post->post_seo_title;
          $page_description = $post->post_seo_description;
        } else {
          $page_title = 'Hexagon Brain';
          $page_description = 'Hexagon Brain Website';
        }
        @endphp

        <title>@yield('title', $page_title )</title>
        <meta name="author" content="@yield('meta_author', 'Hexagon Brain')">
        <meta name="description" content="@yield('meta_description', $page_description)">

        @yield('meta')

        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon" />
        <link href="apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Jura:400,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/font-awesome.min.css') }}" />

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/vanillabox.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/animsition.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/slick.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/slick-theme.css') }}" />

        <!-- Main CSS-->
        <link rel="stylesheet" href="{{ URL::asset('css/frontend-css/style-fluid.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/comment.css') }}" />

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')

        <script>window.csrf = "{{ csrf_token() }}";
        @if (Auth::user())
        window.user = {"name":"{{ Auth::user()->name }}","email":"{{ Auth::user()->email }}","id":"{{ Auth::user()->id }}"};
        @endif
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112509014-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112509014-1');
        </script>

    </head>
    <body>
        <main>
          <div id="app">
              @include('includes.partials.logged-in-as')
              @include('frontend.includes.nav')

              <div class="full-screen">
                  @include('includes.partials.messages')
                  @yield('content')
              </div><!-- container -->

              @include('frontend.includes.footer')

          </div><!-- #app -->
        </main>

        <!-- Scripts -->

        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/jquery-1.12.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/jquery.vanillabox.js') }}"></script>
        <!-- <script type="text/javascript" src="{{ URL::asset('js/frontend-js/animsition.min.js') }}"></script> -->
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/isotope.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/validator.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/form-scripts.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/slick.min.js') }}"></script>
        <!-- <script type="text/javascript" src="{{ URL::asset('js/frontend-js/map.js') }}"></script> -->
        <script type="text/javascript" src="{{ URL::asset('js/frontend-js/scripts.js') }}"></script>

        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')
<script>

	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('.header').outerHeight();

	$(window).scroll(function(event){
		didScroll = true;
		//console.log('scroll');
	});

	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250);

	function hasScrolled() {
		var st = $(this).scrollTop();

		// Make sure they scroll more than delta
		if(Math.abs(lastScrollTop - st) <= delta)
			return;

		// If they scrolled down and are past the navbar, add class .nav-up.
		// This is necessary so you never see what is "behind" the navbar.
		if (st > lastScrollTop && st > navbarHeight){
			// Scroll Down
			$('.header').removeClass('nav-down').addClass('nav-up');
		} else {
			// Scroll Up
			if(st + $(window).height() < $(document).height()) {
				$('.header').removeClass('nav-up').addClass('nav-down');
			}
		}

		lastScrollTop = st;
	}

  $(document).ready(function(){
    $('.slick-container').slick({
      lazyLoad: 'ondemand',
      autoplay: true,
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });
  });

</script>

        @include('includes.partials.ga')

        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
