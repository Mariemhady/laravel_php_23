

@extends("Landing.nav")

@section("footer")
    copyright@ITI
@endsection

@section("title")
    Show ITI Track
@endsection


@section("content")
<div class="card" style="width: 18rem;">
  {{-- @dump($data["image"]) --}}
<img src="{{asset('Images/track_images/'.$data["image"])}}" />
    <div class="card-body">
      <h5 class="card-title">{{$data["name"]}}</h5>
      <p class="card-text">{{$data["description"]}}</p>
      <p class="card-text">Created at: {{$data["created_at"]}}</p>
      <p class="card-text">Updated at:{{$data["updated_at"]}}</p>
      <p class="card-text">Students in this Track:</p>
      <ul>
        @foreach ($data->students as $std)
            <li><a href="{{route('students.show', $std->id)}}">{{$std->name}} </a>  </li>            
        @endforeach
      </ul>


      <a href="#" class="btn btn-primary">Go somewhere</a>

    </div>
  </div>

@endsection