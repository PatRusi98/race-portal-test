@extends('rp_components.master')
@section('content')
    <div class="container" style="margin-top: 90px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Team</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <form method="post" action="{{url('update')}}">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="team_name">Team Name</label>
                <input type="text" class="form-control" name="name" placeholder="e.g. Mercedes" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="team_short_name">Team Short Name</label>
                <input type="text" class="form-control" name="short" placeholder="e.g. MER" value="{{$data->short}}">
            </div>
            <div class="form-group">
                <label for="team_manager">Team Manager</label>
                <input type="text" class="form-control" name="manager" placeholder="e.g. Toto Wolff" value="{{$data->manager}}">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
        </form>
        <div class="row" style="margin-top: 150px"></div>
    </div>
@endsection
