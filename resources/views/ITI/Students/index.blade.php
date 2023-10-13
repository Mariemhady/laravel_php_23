@extends('Landing.nav')
   
@section('content')

<a class="btn btn-primary" href="{{route('students.create')}}"> Create Student </a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th> Grade </th>
        <th> Image </th>
        <th>Show User</th>
        <th>Delete User</th>

    </tr>
    {{-- @dump($students) --}}

    @foreach ($data as $std)
        <tr>
            <td>
                {{$std['id']}}
            </td>
            <td>
                {{$std['name']}}
            </td>
            <td>
                {{$std['email']}}
            </td>
            <td>
                {{$std['grade']}}
            </td>
            <td>
                <img src="{{asset('Images/'.$std['image'])}}" width="50" height="50"/>
            </td>

            <td>
               
               <a class="btn btn-warning" 
    href="{{route('students.show',$std['id'] )}}"> Show </a>
            </td>
            <td>
                <a class="btn btn-danger" 
    href="{{route('students.delete',$std['id'] )}}"> Delete </a>
            </td>

            <td>
                <a class="btn btn-info" 
    href="{{route('students.edit',$std['id'] )}}"> Edit </a>
            </td>
        </tr>
    @endforeach

</table>
@endsection


@section("title")
  ITI - Students Page
@endsection