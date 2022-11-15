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
                <input type="text" class="form-control" id="team_name" name="name" placeholder="e.g. Mercedes">
            </div>
            <div class="form-group">
                <label for="team_short_name">Team Short Name</label>
                <input type="text" class="form-control" id="team_short_name" name="short" placeholder="e.g. MER">
            </div>
            <div class="form-group">
                <label for="team_manager">Team Manager</label>
                <input type="text" class="form-control" id="team_manager" name="manager" placeholder="e.g. Toto Wolff">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
        </form>
        <div class="row" style="margin-top: 150px"></div>
    </div>
@endsection
