

@extends("Landing.nav")

@section("footer")
    copyright@ITI
@endsection

@section("title")
    Show Student
@endsection


@section("content")
<div class="card" style="width: 18rem;">
    <img src="{{asset('Images/'.$std['img'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$std["name"]}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection