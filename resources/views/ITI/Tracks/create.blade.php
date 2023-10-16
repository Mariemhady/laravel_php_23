@extends('Landing.nav')
   
@section('content')

  {{-- @if ($errors->any())
    <div class="alert alert-danger" > 
        <ul @foreach ($errors->all() as $error)>
            <li> {{$error}} </li>
        </ul>
        @endforeach
    </div>
  @endif --}}



<form action="{{route('tracks.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{old('name')}}">
    @error("name")
      <div class="text-danger"> {{$message}} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description">
  </div>
  @error("description")
      <div class="text-danger"> {{$message}} </div>
    @enderror

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@section("title")
  ITI - Create Track
@endsection