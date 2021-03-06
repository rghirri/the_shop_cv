<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>


 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 @yield('css')

</head>

<body>
 <div id="app">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
   <div class="container">
    <a class="navbar-brand" href="{{ route('homepage.index') }}">
     <img src="{{ asset('app/style/images/fs_logo.png') }}" alt="logo" class="img-fluid" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <!-- Left Side Of Navbar -->
     <ul class="navbar-nav me-auto">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Home
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="{{ route('slider.index') }}">Slider</a></li>
        <li><a class="dropdown-item" href="{{ route('services.index') }}">Services</a></li>
        <li><a class="dropdown-item" href="{{ route('grid.index') }}">Product Grid</a></li>
       </ul>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Products
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li class="nav-item"><a class="nav-link active" href="{{ route('admin-product.index') }}">All Products</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin-product.create') }}">Add New Products</a></li>
       </ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="{{ route('adminAbout.index') }}">About</a></li>
     </ul>

     <!-- Right Side Of Navbar -->
     <ul class="navbar-nav ms-auto">
      <!-- Authentication Links -->
      @guest
      @if (Route::has('login'))
      <li class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif

      @if (Route::has('register'))
      <li class="nav-item">
       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
       </a>

       <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
        </form>
       </div>
      </li>
      @endguest
     </ul>
    </div>
   </div>
  </nav>

  <main class="py-4">
   <div class="container">
    @yield('content')
   </div>
  </main>
 </div>

 <!-- Scripts -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>

 @yield('scripts')



</body>

</html>