@extends('template.index')

@section('content')

    <table class="table table-hover">
        <thead>

        <th> UserName </th>

        <th>points</th>

        <th>placement</th>

        </thead>

        <tbody>
            @foreach($stats as $stat)
            <tr>
                <td>{{$stat->users_id}}</td>

                <td>{{$stat->score}}</td>

                <td>{{$stat->type}}</td>


            </tr>
                @endforeach

        </tbody>



    </table>


@endsection
