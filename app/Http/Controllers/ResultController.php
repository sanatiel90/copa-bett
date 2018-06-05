<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Results;

class ResultController extends Controller
{
     public function index(){
    	$results = Results::all();
    	return view('result.index', ['results' => $results]);
    }

    public function new(){
    	return view('result.new');
    }


    public function store(Request $request){
    	$result = Results::create($request->all());
    	return redirect()->route('results');
    }

}
