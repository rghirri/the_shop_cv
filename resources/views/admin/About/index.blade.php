@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('adminAbout.create') }}" class="btn btn-success float-right">Create About Page</a>
</div>

<div class="card card-default">

 <div class="card-header">
  Team Members
 </div>

 <div class="card-body">
  <table class="table">
   <thead>
    <th>
     Image
    </th>
    <th>
     Name
    </th>
    <th>
     Role
    </th>
    <th>
     Description
    </th>
    <th></th>
    <th></th>
   </thead>
   <tbody class="text-center">
    @foreach($abouts as $about)
    <tr>
     <td><img src="{{ asset("/storage/".$about->image) }}" width="120" height="60" alt=""></td>
     <td>
      <p>{{ $about->name }}</p>
     </td>
     <td>
      <p>{{ $about->role }}</p>
     </td>
     <td>
      <p>{!! $about->content !!}</p>
     </td>
    </tr>
    @endforeach
   </tbody>
  </table>


 </div>
</div>



@endsection