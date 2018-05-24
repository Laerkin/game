@extends('template.index')

@section('content')

    <table class="table table-hover">
        <thead>

        <th> UserName </th>

        <th>points</th>

        <th>placement</th>

        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->user_id}}</td>

                <td>{{$user->score}}</td>

                <td>{{$user->type}}</td>


            </tr>
                @endforeach

        </tbody>



    </table>


@endsection
