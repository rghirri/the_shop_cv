@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <div class="container">
  <div class="row">
   <div class="col-md-2">
    <a href="{{ route('grid.create') }}" class="btn btn-success float-right">Add Grid Image</a>
   </div>
   <div class="col-md-2">
    <div class="d-fles justify-content-end mb-2">
     <a href="{{ route('trashed-grid.index') }}" class="btn btn-success float-right">
      Trashed Grid Image
     </a>
    </div>
   </div>
  </div>

  <div class="card card-default">

   <div class="card-header">
    Images of Home Grid
   </div>

   <div class="card-body">

    @if($grids->count() > 0)

    <table class="table">
     <thead>
      <th>
       Image
      </th>
      <th>
       Title
      </th>
      <th></th>
      <th></th>
     </thead>
     <tbody>
      @foreach($grids as $grid)
      <tr>
       <td><img src="{{ asset("/storage/".$grid->image) }}" width="120" height="60" alt=""></td>
       <td>{{ $grid->category }}</td>
       @if($grid->trashed())
       <td>
        <form action="{{ route('restore-grid', $grid->id) }}" method="POST">
         @csrf
         @method('PUT')
         <button type="submit" class="btn btn-info btn-sm text-white">Restore</button>
        </form>
       </td>
       @else
       <td>
        <a href="{{ route('grid.edit', $grid->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
       </td>
       @endif
       <td>
        <form action="{{ route('grid.destroy', $grid->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger btn-sm">
          {{ $grid->trashed() ? 'Delete' : 'Trashed' }}
         </button>
        </form>
       </td>

      </tr>
      @endforeach
     </tbody>
    </table>
    @else

    <h3 class="text-center">No Images Yet</h3>

    @endif

   </div>
  </div>



  @endsection