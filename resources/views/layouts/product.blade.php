<!DOCTYPE html>
<html lang="en">

<head lang="en">
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <title>Seosight - Shop</title>

 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/fonts.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/crumina-fonts.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/normalize.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/grid.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/styles.css') }}" />

 <!--Plugins styles-->

 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/jquery.mCustomScrollbar.min.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/swiper.min.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/primary-menu.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-shop/css/magnific-popup.css') }}" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

 <!--Styles for RTL-->

 <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

 <!--External fonts-->

 <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css" />
</head>

<body class=" ">
 <header class="header" id="site-header">
  <div class="container">
   <div class="header-content-wrapper">
    <ul class="nav-add">
     <li class="cart">
      <a href="#" class="js-cart-animate">
       <i class="seoicon-basket"></i>
       <span class="cart-count">{{ Cart::getContent()->count() }}</span>
      </a>

      <div class="cart-popup-wrap">
       <div class="popup-cart">

        <p class="title-cart align-center">${{ Cart::getTotal() }}</p>

        <a href="/cart">
         <div class="btn btn-small btn--dark">
          <span class="text">View Cart</span>
         </div>
        </a>

       </div>
      </div>
     </li>
    </ul>
   </div>
  </div>
 </header>


 @yield('content')


 <!-- Footer -->

 <footer class="footer">
  <div class="sub-footer">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
   </div>
  </div>
 </footer>

 <script src="{{ asset('app-shop/js/jquery-2.1.4.min.js') }}"></script>
 <script src="{{ asset('app-shop/js/crum-mega-menu.js') }}"></script>
 <script src="{{ asset('app-shop/js/swiper.jquery.min.js') }}"></script>
 <script src="{{ asset('app-shop/js/theme-plugins.js') }}"></script>
 <script src="{{ asset('app-shop/js/main.js') }}"></script>
 <script src="{{ asset('app-shop/js/form-actions.js') }}"></script>

 <script src="{{ asset('app-shop/js/velocity.min.js') }}"></script>
 <script src="{{ asset('app-shop/js/ScrollMagic.min.js') }}"></script>
 <script src="{{ asset('app-shop/js/animation.velocity.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <!-- ...end JS Script -->


 <script>
 @if(Session::has('success'))

 toastr.success('{!! session('
  success ') !!}')

 @endif

 @if(Session::has('info'))

 toastr.info('{!! session('
  info ') !!}')

 @endif
 </script>

</body>


</html>