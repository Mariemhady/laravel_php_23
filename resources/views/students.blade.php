    @extends('nav')
   
    @section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Show User</th>
        </tr>
        {{-- @dump($students) --}}

        @foreach ($students as $std)
            <tr>
                <td>
                    {{$std['id']}}
                </td>
                <td>
                    {{$std['name']}}
                </td>

                <td>
                   <a class="btn btn-warning" 
                   href="/iti/students/{{$std['id']}}"> Show </a>
                </td>
            </tr>
        @endforeach

    </table>
    @endsection


    @section("title")
        Students Page
    @endsection