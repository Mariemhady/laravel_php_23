

@extends("Landing.nav")

@section("footer")
    copyright@ITI
@endsection

@section("title")
    Show ITI Student
@endsection


@section("content")
<div class="card" style="width: 18rem;">
    <img src="{{asset('Images/'.$data['image'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$data["name"]}}</h5>
      <p class="card-text">{{$data["email"]}}</p>
      <p class="card-text">{{$data["grade"]}}</p>

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection