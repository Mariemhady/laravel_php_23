@extends('Landing.nav')
   
@section('content')
{{-- @dump($data["name"]) --}}
{{-- html --> get post  --}}
<form action="{{route('tracks.update', $data['id'])}}" method="post">
  @method("put")
  @csrf

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ old('name', $data->name)}}">
    @error("name")
      <div class="text-danger"> {{$message}} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$data['description']}}">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@section("title")
  ITI - Edit Track
@endsection