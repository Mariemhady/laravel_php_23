@extends('Landing.nav')
   
@section('content')

<a class="btn btn-primary" href="{{route('tracks.create')}}" > Create Track </a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

    @foreach ($data as $track)
        <tr>
            <td>
                {{$track['id']}}
            </td>
            <td>
                {{$track['name']}}
            </td>

            <td>
               
        <a class="btn btn-warning" 
    href="{{route('tracks.show', $track)}}"> Show </a>
            </td>
            <td>
                <form method="post" action={{route('tracks.destroy', $track->id )}}> 
                    @method("delete")
                    @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </td> 

            <td>
                <a class="btn btn-info" 
    href="{{route('tracks.edit',$track )}}"> Edit </a>
            </td>
        </tr>
    @endforeach

</table>
@endsection


@section("title")
  ITI - Tracks Page
@endsection