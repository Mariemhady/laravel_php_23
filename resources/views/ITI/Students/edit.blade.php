@extends('Landing.nav')
   
@section('content')
{{-- @dump($data["name"]) --}}
{{-- html --> get post  --}}
<form action="{{route('students.update', $data['id'])}}" method="post">
  @method("put")
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email', $data->email)}}" >
    @error("email")
      <div class="text-danger"> {{$message}} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ old('name', $data->name)}}">
    @error("name")
      <div class="text-danger"> {{$message}} </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="image" value="{{$data['image']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Grade</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="grade" value="{{$data['grade']}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@section("title")
  ITI - Edit Student
@endsection