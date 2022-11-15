<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::get();
        //return $data;
        return view('teams', compact('data'));
    }

    public function create()
    {
        return view('create-team');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short' => 'required',
            'manager' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->short = $request->short;
        $team->manager = $request->manager;
        $team->save();

        return redirect()->back()->with('success', 'Team created successfully');
    }

    public function edit($id)
    {
        $data = Team::where('id', '=', $id)->first();
        return view('edit-team', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short' => 'required',
            'manager' => 'required'
        ]);

        Team::where('id', '=', $request->id)->update([
            'name'      =>$request->name,
            'short'     =>$request->short,
            'manager'   =>$request->manager
        ]);

        return redirect()->back()->with('success', 'Team edited successfully');
    }

    public function delete($id)
    {
        Team::where('id', '=', $id)->delete();

        return redirect()->back();
    }
}
