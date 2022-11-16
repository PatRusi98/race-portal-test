@extends('rp_components.master')

@section('content')
    <div style="margin-top: 20px"></div>
    <a href="{{url('create-team')}}" class="btn btn-success" style="margin-left: 20px">Add</a>
    @if(Session::has('success'))
        <div class=" row alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div style="margin-top: 20px"></div>
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
                    <td>
                        <a href="{{url('edit-team/'.$team->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('delete/'.$team->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <h1>Nothing to see here</h1>
            @endforelse
        </tr>
        </tbody>
    </table>
@endsection
