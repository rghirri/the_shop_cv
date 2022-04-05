@extends('layouts.front')

@section('content')

<div class="offset2"></div>

<div class="light-wrapper">
 <div class="container inner tp40 bp0">
  <div class="tp-banner-container">
   <div class="tp-banner">
    <ul>
     @foreach($sliders as $slider)
     <li data-transition="fade" data-delay="9000" data-saveperformance="on" data-title="Ken Burns Slide"> <img
       src="{{ $slider->slider }}" alt="" data-lazyload="{{ asset("/storage/".$slider->slider) }}"
       data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut"
       data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
      <div class="caption sfr title light-layer" data-x="745" data-y="400" data-speed="700" data-start="2300"
       data-easing="Sine.easeOut">Fashion Studio</div>
      <div class="caption sfr lead light-layer" data-x="745" data-y="454" data-speed="700" data-start="2800"
       data-easing="Sine.easeOut">The Latest Fashion You Can Find</div>
     </li>
     @endforeach
    </ul>
    <div class="tp-bannertimer tp-bottom"></div>
   </div>
  </div>
 </div>
</div>


<div class="light-wrapper">
 <div class="divide70"></div>
 <h3 class="section-title text-center">Check Out Our Latest Products</h3>
 <div class="text-center"> <a href="{{ route('products.index') }}" class="btn btn-large fixed-width">More Products</a>
  <a href="{{ route('contact.index') }}" class="btn btn-large btn-maroon fixed-width">Contact Us</a>
 </div>
</div>


<!-- /.light-wrapper -->
<div class="light-wrapper">
 <div class="container inner">

  @foreach($services as $service)
  <div style="margin-bottom:50px;">
   <h1 class="intro text-center">{{ $service->title }}</h1>
   <p class="lead main text-center">{!! $service->content !!}</p>
  </div>
  @endforeach

  <h3 class="section-title pull-left">Our Awesome Collection</h3>
  <div class="portfolio fix-portfolio">
   <div id="filters" class="button-group pull-right">
    <button class="button is-checked" data-filter="*">All</button>
    <button class="button" data-filter=".Watches">Watches</button>
    <button class="button" data-filter=".Jeaulary">Jeaulary</button>
    <button class="button" data-filter=".Shoes">Shoes</button>
    <button class="button" data-filter=".Hats">Hats</button>
   </div>
   <div class="clearfix"></div>
   <div class="isotope items">

    @foreach($grids as $grid)
    <div class="item {{ $grid->category }}">
     <figure><a href="portfolio-post2.html">
       <div class="text-overlay">
        <div class="info"><span>Vestibulum Tellus</span></div>
       </div>
       <img src="{{ asset("/storage/".$grid->image) }}" alt="" />
      </a></figure>
    </div>
    @endforeach
   </div>
  </div>
  <!-- /.portfolio -->
 </div>

 <!-- /.container -->
</div>


<!-- /.light-wrapper -->

@endsection