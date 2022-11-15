@extends('rp_components.master')
@section('content')
    <div class="container" style="margin-top: 90px">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Team</h2>
            </div>
        </div>
        <form method="post" action="{{url('save')}}">
            @csrf
            <div class="form-group">
                <label for="team_name">Team Name</label>
                <input type="text" class="form-control" name="name" placeholder="e.g. Mercedes" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="team_short_name">Team Short Name</label>
                <input type="text" class="form-control" name="short" placeholder="e.g. MER" value="{{old('short')}}">
            </div>
            <div class="form-group">
                <label for="team_manager">Team Manager</label>
                <input type="text" class="form-control" name="manager" placeholder="e.g. Toto Wolff" value="{{old('manager')}}">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
        </form>
        <div class="row" style="margin-top: 150px"></div>
    </div>
@endsection
