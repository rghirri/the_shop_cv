@extends('layouts.app')

@section('content')

<div class="card card-default">
 <div class="card-header">
  <h3>
   {{ isset($grid) ? 'Edit Grid' : 'Create Grid' }}
  </h3>
 </div>
 <div class="card-body">
  <form action="{{ isset($grid) ? route('grid.update', $grid->id) : route('grid.store') }}" method="POST"
   enctype="multipart/form-data">
   @csrf

   @if(isset($grid))

   @method('PUT')

   @endif


   <div class="form-group mt-2">
    <label for="category">Grid Category</label>
    <input type="text" class="form-control" name="category" id="category"
     value="{{ isset($grid) ? $grid->category : '' }}">
   </div>


   @if(isset($grid))

   <div class="form-group text-center">
    <img src="{{ asset("/storage/".$grid->image) }}" style="width:50%;" alt="">
   </div>

   @endif

   <div class="form-group mt-2">
    <label for="product_image">Image</label>
    <input type="file" class="form-control" name="product_image" id="product_image">
   </div>

   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     {{ isset($grid) ? 'Update Grid' : 'Create Grid' }}
    </button>
   </div>

  </form>
 </div>

</div>


@endsection