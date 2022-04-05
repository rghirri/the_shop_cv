@extends('layouts.app')

@section('content')

<div class="card card-default">

 <div class="card-header">
  <h3>Create New Team Member</h3>
 </div>
 <div class="card-body">

  <form action="{{ route('adminAbout.store') }}" method="POST" enctype="multipart/form-data">
   @csrf

   <div class=" form-group mt-2">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image" id="image">
   </div>


   <div class="form-group mt-2">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="">
   </div>

   <div class="form-group mt-2">
    <label for="role">Role</label>
    <input type="text" class="form-control" name="role" id="role" value="">
   </div>

   <div class="form-group mt-2">
    <label for="content">Description</label>
    <input id="content" type="hidden" name="content" value="">
    <trix-editor input="content"></trix-editor>
   </div>

   </hr>

   <div class="card-header">
    <h3>Add Customer Feedback</h3>
   </div>

   <div class="form-group mt-2">
    <label for="feedback">Feedback</label>
    <input id="feedback" type="hidden" name="feedback" value="">
    <trix-editor input="feedback"></trix-editor>
   </div>

   <div class="form-group mt-2">
    <label for="customer_name">Customer Name</label>
    <input type="text" class="form-control" name="customer_name" id="customer_name" value="">
   </div>

   </hr>

   <div class="card-header">
    <h3>Our Skills</h3>
   </div>

   <div class="form-group mt-2">
    <label for="intro">Intro</label>
    <input id="intro" type="hidden" name="intro" value="">
    <trix-editor input="intro"></trix-editor>
   </div>

   <div class="form-group mt-2">
    <label for="skill">The Skill</label>
    <input type="text" class="form-control" name="skill" id="skill" value="">
   </div>

   <div class="form-group mt-2">
    <label for="percent">Percent</label>
    <input type="text" class="form-control" name="percent" id="percent" value="">
   </div>

   </hr>

   <div class="card-header">
    <h3>Why Choose Us</h3>
   </div>

   <div class="form-group mt-2">
    <label for="tab_one">Tab One</label>
    <input type="text" class="form-control" name="tab_one" id="tab_one" value="">
   </div>

   <div class="form-group mt-2">
    <label for="tab_one_content">Tab One Content</label>
    <input id="tab_one_content" type="hidden" name="tab_one_content" value="">
    <trix-editor input="tab_one_content"></trix-editor>
   </div>

   <div class="form-group mt-2">
    <label for="tab_two">Tab Two</label>
    <input type="text" class="form-control" name="tab_two" id="tab_two" value="">
   </div>

   <div class="form-group mt-2">
    <label for="tab_two_content">Tab Two Content</label>
    <input id="tab_two_content" type="hidden" name="tab_two_content" value="">
    <trix-editor input="tab_two_content"></trix-editor>
   </div>


   <div class="form-group mt-2">
    <label for="tab_three">Tab Three</label>
    <input type="text" class="form-control" name="tab_three" id="tab_three" value="">
   </div>

   <div class="form-group mt-2">
    <label for="tab_three_content">Tab Three Content</label>
    <input id="tab_three_content" type="hidden" name="tab_three_content" value="">
    <trix-editor input="tab_three_content"></trix-editor>
   </div>


   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     Create Team Member
    </button>
   </div>

  </form>
 </div>

</div>


@endsection


@section('scripts')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
flatpickr('#published_at', {

 enableTime: true

})

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
 $('.tags-selector').select2();
})
</script>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection