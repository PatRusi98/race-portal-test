@extends('rp_components.master')

@section('content')
    <a href="{{url('create-team')}}" class="btn btn-success">Add</a>
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
            @forelse($data as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->short}}</td>
                    <td>{{$team->manager}}</td>
                    <td><button type="button" class="btn btn-primary" onclick="window.location='{{url("teams/$team->id/edit")}}'">Edit</button><button type="button" class="btn btn-danger" onclick="window.location='{{url("teams/$team->id/edit")}}'">Delete</button></td>
                </tr>
            @empty
                <h1>Nothing to see here</h1>
            @endforelse
        </tr>
        </tbody>
    </table>

    <script>
        function add(){
            location.href='teams/create';
        }
    </script>
@endsection
