@extends('Landing.nav')
   
@section('content')

  @if ($errors->any())
    <div class="alert alert-danger" > 
        <ul @foreach ($errors->all() as $error)>
            <li> {{$error}} </li>
        </ul>
        @endforeach
    </div>
  @endif
{{-- @dump($data); --}}


<form action="{{route('students.store')}}" method="post">
  {{-- 419 page expired -- csrf --}}
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
      @error("email")
        <div class="text-danger"> {{$message}} </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{old('name')}}">
    @error("name")
      <div class="text-danger"> {{$message}} </div>
    @enderror
  </div>
  <label for="exampleInputPassword1" class="form-label">Track</label>
    <select class="form-select" aria-label="Default select example" name="track_id">
      <option selected>Open this select menu</option>
      @foreach ($data as $track)
        <option value="{{$track->id}}">{{$track->name}}</option>
      @endforeach
    </select>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="image">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Grade</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="grade">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@section("title")
  ITI - Create Student
@endsection