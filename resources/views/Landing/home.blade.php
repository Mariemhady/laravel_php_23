@extends('Landing.nav')

@section("title")
    Home Page
@endsection

@section('content')
    <h1  class="text-danger"> hello from views  </h1> 
    <h1> 
        {{$name}}
    </h1>
    <h1> {{$email}} </h1>
@endsection
    
