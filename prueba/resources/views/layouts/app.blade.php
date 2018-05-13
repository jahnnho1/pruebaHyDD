<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tittle','Hyd Limitada')</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/offcanvas.css')}}">
  
       
        
  
  
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
  
  <link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.css')}}">
  
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css')}}">

  
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{ asset('assets/css/unify-core.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/unify-components.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/unify-globals.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
      
    </head>
    
    
    
    <body class="g-bg-white">
        
        
   

    <div class="content">

      @yield('content')

    </div>
   
        
        
  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/popper.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
  <script src="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
  <script src="{{ asset('assets/vendor/masonry/dist/masonry.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{ asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- JS Unify -->
  

  
  <script src="{{ asset('assets/js/hs.core.js')}}"></script>
  <script src="{{ asset('assets/js/components/hs.header.js')}}"></script>
  <script src="{{ asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
  
  <script src="{{ asset('assets/js/components/hs.scrollbar.js')}}"></script>
  <script src="{{ asset('assets/js/components/hs.dropdown.js')}}"></script>
  
  <script src="{{ asset('assets/js/components/hs.carousel.js')}}"></script>
  <script src="{{ asset('assets/js/components/hs.go-to.js')}}"></script>
  <script src="{{ asset('assets/js/helpers/hs.height-calc.js')}}"></script>
        
        
  <script  src="{{ asset('assets/js/components/hs.tabs.js')}}"></script>
  <script  src="{{ asset('assets/js/components/hs.rating.js')}}"></script>
  <script  src="{{ asset('assets/js/components/hs.count-qty.js')}}"></script>
  
    
  
  
  
  
  
  
  
  
  
  
  
  
   
         <!-- JS Plugins Init. -->
  <script>
    $(document).ready(function () {
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of header's height equal offset
      $.HSCore.helpers.HSHeightCalc.init();

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
      
      
      
      // initialization of rating
      $.HSCore.components.HSRating.init($('.js-rating'), {
        spacing: 4
      });

      // initialization of qty
      $.HSCore.components.HSCountQty.init('.js-quantity');
      
      
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
      
      
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'));

      // initialization of HSScrollBar component
      $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox');
      
      
      
      
    });
    
    
    
    
    
    
      
      // initialization of go to


      // initialization of carousel


      // initialization of HSDropdown component

   


    
  </script>
        
        
        
    </body>
</html>
