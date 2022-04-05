@extends('layouts.front')

@section('content')

<div class="offset2"></div>
<div class="light-wrapper">
 <div class="container inner">
  <h3 class="section-title">Meet the Team</h3>
  <div class="row team">

   @foreach($abouts as $about)
   <div class="col-sm-4">
    <figure class="icon-overlay" style="margin-top: 20px;">
     <img src="{{ asset('app/style/images/art/team1.jpg') }}" alt="" />
    </figure>
    <div class="post-content text-center">
     <h3 class="post-title">
      {{ $about->name }}
      <span class="meta">{{ $about->role }}</span>
     </h3>
     <p>
      {!! $about->content !!}
     </p>
     <ul class="social">
      <li>
       <a href="#"><i class="icon-s-twitter"></i></a>
      </li>
      <li>
       <a href="#"><i class="icon-s-facebook"></i></a>
      </li>
      <li>
       <a href="#"><i class="icon-s-dribbble"></i></a>
      </li>
      <li>
       <a href="#"><i class="icon-s-pinterest"></i></a>
      </li>
     </ul>
    </div>
   </div>
   @endforeach

  </div>
 </div>
</div>
<!-- /.light-wrapper -->

<div class="parallax parallax1 customers">
 <div class="container inner text-center">
  <h3 class="section-title text-center">
   What Do Our Customers Think
  </h3>
  @foreach($abouts as $about)
  <div class="testimonials owl-carousel thin">
   <div class="item">
    <blockquote>
     <p>
      {!! $about->feedback !!}<small>{{ $about->customerName }}</small>
     </p>
    </blockquote>
   </div>
   <!-- /.item -->
   <div class="item">
    <blockquote>
     <p>
      Cras justo odio, dapibus facilisis in,
      egestas eget quam. Maecenas faucibus mollis
      interdum. Etiam porta sem malesuada magna
      mollis euismod. Cum sociis natoque penatibus
      et magnis dis parturient.<small>Coriss Ambady</small>
     </p>
    </blockquote>
   </div>
   <!-- /.item -->
   <div class="item">
    <blockquote>
     <p>
      Aenean eu leo quam. Pellentesque ornare sem
      lacinia quam venenatis id vestibulum. Donec
      sed odio dui. Sed posuere consectetur est at
      lobortis. Cras justo odio, dapibus ac
      facilisis in, egestas eget.<small>Barclay Widerski</small>
     </p>
    </blockquote>
   </div>
   <!-- /.item -->
   <div class="item">
    <blockquote>
     <p>
      Cras justo odio, dapibus ac facilisis in,
      egestas eget quam. Maecenas faucibus mollis
      interdum. Vivamus sagittis lacus vel augue
      laoreet. Donec id elit non mi porta gravida
      at eget metus.<small>Elsie Spear</small>
     </p>
    </blockquote>
   </div>
   <!-- /.item -->
  </div>
  @endforeach
  <!-- /.testimonials -->
 </div>
 <!-- /.container -->
</div>
<!-- /.parallax -->

<div class="light-wrapper">
 <div class="container inner">
  <div class="row">
   <div class="col-sm-6">
    <h3 class="section-title">Our Skills</h3>

    <p>
     {!! $about->feedback !!}
    </p>

    <div class="divide10"></div>
    <ul class="progress-list">
     @foreach($abouts as $about)
     <li>
      <p>{{ $about->skill }} <em>{{ $about->percent }}</em></p>
      <div class="progress plain">
       <div class="bar" style="width: 90%"></div>
      </div>
     </li>
     @endforeach
    </ul>
    <!-- /.progress-list -->
   </div>
   <div class="col-sm-6">
    <h3 class="section-title">Why Choose Us?</h3>
    <div class="divide5"></div>
    <div class="tabs tabs-top left tab-container">
     @foreach($abouts as $about)
     <ul class="etabs">
      <li class="tab">
       <a href="#tab-one">{{ $about->tabOneTitle }}</a>
      </li>
      <li class="tab">
       <a href="#tab-two">{{ $about->tabTwoTitle }}</a>
      </li>
      <li class="tab">
       <a href="#tab-three">{{ $about->tabThreeTitle }}</a>
      </li>
     </ul>
     <!-- /.etabs -->
     <div class="panel-container">
      <div class="tab-block" id="tab-one">
       <p>
        {!! $about->tabOneContent !!}
       </p>
      </div>
      <!-- /.tab-block -->
      <div class="tab-block" id="tab-two">
       <p>
        {!! $about->tabTwoContent !!}
       </p>
      </div>
      <!-- /.tab-block -->
      <div class="tab-block" id="tab-three">
       <p>
        {!! $about->tabThreeContent !!}
       </p>
      </div>
      <!-- /.tab-block -->
     </div>
     <!-- /.panel-container -->
     @endforeach
    </div>
    <!-- /.tabs -->
   </div>

  </div>
 </div>
</div>

@endsection