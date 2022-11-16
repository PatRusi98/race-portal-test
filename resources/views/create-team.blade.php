@extends('rp_components.master')
@section('content')
    <div class="container" style="margin-top: 90px">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Team</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        <form method="post" action="{{url('save')}}">
            @csrf
            <div class="form-group">
                <label for="team_name">Team Name</label>
                <input type="text" class="form-control" name="name" placeholder="e.g. Mercedes" pattern="[A-Za-z0-9\s]+" title="Letters only" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="team_short_name">Team Short Name</label>
                <input type="text" class="form-control" name="short" placeholder="e.g. MER" pattern="[A-Z0-9]{3}" title="Three letter uppercase short name" value="{{old('short')}}">
                @error('short')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="team_manager">Team Manager</label>
                <input type="text" class="form-control" name="manager" placeholder="e.g. Toto Wolff" pattern="[A-Za-z0-9\s]+" title="Letters only" value="{{old('manager')}}">
                @error('manager')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
        </form>
        <div class="row" style="margin-top: 150px"></div>
    </div>
@endsection
