@extends('Landing.nav')
   
@section('content')
<form action="{{route('students.store')}}" method="post">
  {{-- 419 page expired -- csrf --}}
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </div>
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