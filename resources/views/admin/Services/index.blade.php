@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('services.create') }}" class="btn btn-success float-right">Add Services</a>
</div>

<div class="card card-default">

 <div class="card-header">
  Services Provided
 </div>

 <div class="card-body">
  <table class="table">
   <thead>
    <th>
     Our Service
    </th>
    <th></th>
    <th></th>
   </thead>
   <tbody class="text-center">
    @foreach($services as $service)
    <tr>

     <td>
      <h3>{{ $service->title }}</h3>
      <div class="container">
       <div class="row">
        <div class="col-6 offset-3">
         <p>{!! $service->content !!}</p>
        </div>
       </div>
      </div>
     </td>

    </tr>
    @endforeach
   </tbody>
  </table>


 </div>
</div>



@endsection