@extends('rp_components.master')

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Team Name</th>
            <th scope="col">Short</th>
            <th scope="col">Manager</th>
            <th scope="col">Action</th>>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <tr>
            @foreach($data as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->short}}</td>
                    <td>{{$team->manager}}</td>
                </tr>
            @endforeach
        </tr>
        </tbody>
    </table>
@endsection
