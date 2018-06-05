<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index(){
    	return view('team.new');
    }

    public function store(Request $request){
    	Team::create($request->all());
    	return redirect('/admin');
    }
}
