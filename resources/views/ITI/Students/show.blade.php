

@extends("Landing.nav")

@section("footer")
    copyright@ITI
@endsection

@section("title")
    Show ITI Student
@endsection

{{-- @dump($data->track); --}}
@section("content")
<div class="card" style="width: 18rem;">
    <img src="{{asset('Images/'.$data['image'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Name: {{$data["name"]}}</h5>
      <p class="card-text">Email: {{$data["email"]}}</p>
      <p class="card-text">Grade: {{$data["grade"]}}</p>
      <p class="card-text">Created at: {{$data["created_at"]}}</p>
      <p class="card-text">Updated at:{{$data["updated_at"]}}</p>
      <p class="card-text">Track:<a href="{{route('tracks.show', $data->track->id)}}">  {{$data->track->name}} </a> </p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection