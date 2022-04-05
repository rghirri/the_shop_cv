<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="shortcut icon" href="style/images/favicon.png">
 <title>Home Page</title>
 <!-- Bootstrap core CSS -->
 <link href="{{ asset('app/style/css/bootstrap.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/settings.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/owl.carousel.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/animsition.min.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/fotorama.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/divas.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/js/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" media="all" />
 <link href="{{ asset('app/style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2') }}" rel="stylesheet"
  type="text/css" />
 <link href="{{ asset('app/style.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/css/color/green.css') }}" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
 <link href="{{ asset('app/style/type/fontello.css') }}" rel="stylesheet">
 <link href="{{ asset('app/style/type/budicons.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
 <!-- products page -->

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
      <script src="style/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>

<body class="full-layout">
 <div class="body-wrapper animsition">
  <div class="navbar default centered">
   <div class="navbar-header">
    <div class="container basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse"
      data-target=".navbar-collapse"><i></i></a>
     <div class="navbar-brand text-center"><a href="{{ route('homepage.index') }}"><img
        src="{{ asset('app/style/images/fs_logo.png') }}" alt="" data-src="{{ asset('app/style/images/fs_logo.png') }}"
        data-ret="{{ asset('app/style/images/fs_logo.png') }}" class="retina" /></a></div>
    </div>
    <!--/.container -->
    <nav class="collapse navbar-collapse text-center">
     <ul class="nav navbar-nav">
      <li class="dropdown"><a href="{{ route('homepage.index') }}" class="dropdown-toggle js-activated">Home</a>
      </li>
      <li class="dropdown"><a href="{{ route('products.index') }}" class="dropdown-toggle js-activated">Products</a>
      </li>
      <li><a href="{{ route('about.index') }}">About Us</a></li>
      <li class="dropdown"><a href="{{ route('contact.index') }}" class="dropdown-toggle js-activated">Contact</a>
      </li>
     </ul>
    </nav>
   </div>
   <!--/.navbar-header -->

  </div>
  <!--/.navbar -->

  @yield('content')




 </div>
 <!-- /.body-wrapper -->
 <script src="{{ asset('app/style/js/jquery.min.js') }}"></script>
 <script src="{{ asset('app/style/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('app/style/js/twitter-bootstrap-hover-dropdown.min.js') }}"></script>
 <script src="{{ asset('app/style/js/retina.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.slickforms.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.animsition.min.js') }}"></script>
 <script src="{{ asset('app/style/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('app/style/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.easytabs.min.js') }}"></script>
 <script src="{{ asset('app/style/js/google-code-prettify/prettify.js') }}"></script>
 <script src="{{ asset('app/style/js/fotorama.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.dcflickr.1.0.js') }}"></script>
 <script src="{{ asset('app/style/js/idangerous.swiper.min.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.fancybox.pack.js') }}"></script>
 <script src="{{ asset('app/style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2') }}"></script>
 <script src="{{ asset('app/style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0') }}"></script>
 <script src="{{ asset('app/style/js/jquery.fitvids.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.themepunch.revolution.min.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.themepunch.tools.min.js') }}"></script>
 <script src="{{ asset('app/style/js/jquery.divas-1.0.min.js') }}"></script>
 <script src="{{ asset('app/style/js/imagesloaded.pkgd.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="{{ asset('app/style/js/scripts.js') }}"></script>
 <!-- products page -->


 <script>
 @if(Session::has('success'))

 toastr.success('{{ Session::get('
  success ') }}')

 @endif
 @if(Session::has('info'))

 toastr.info('{{ Session::get('
  info ') }}')

 @endif
 </script>


</body>

</html>