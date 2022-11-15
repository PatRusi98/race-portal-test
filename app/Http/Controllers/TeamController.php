<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models;

class TeamController extends Controller
{
    public function index() {
        $data = Team::get();
        //return $data;
        return view('teams', compact('data'));
    }
}
