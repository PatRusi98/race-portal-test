@extends('rp_components.master')

@section('content')
    <button type="button" class="btn btn-success">Add</button>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Team Name</th>
            <th scope="col">Short</th>
            <th scope="col">Manager</th>
            <th scope="col">Action</th>
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
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </tr>
        </tbody>
    </table>
@endsection
