<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Secretaría de Igualdad de Género</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="favicon.ico">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
        
        <!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/offcanvas.css') }}">
		
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets//vendor/typedjs/typed.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
		
		<link rel="stylesheet" href="{{ asset('assets/css/unify-core.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/unify-components.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/unify-globals.css') }}">
		
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    

    </head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>

    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/vendor/typedjs/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.popup.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
      $(document).on('ready', function () {

        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
    
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
    
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });
    
        $.HSCore.components.HSPopup.init('.js-fancybox');
    
        $.HSCore.components.HSCarousel.init('.js-carousel');	    
    
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });
    </script>


</body>
</html>
