<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rodada;

class RodadaController extends Controller
{
    public function index(){
    	$rodadas = Rodada::all();
    	return view('rodada.index', ['rodadas' => $rodadas]);
    }

    public function new(){
    	return view('rodada.new');
    }


    public function store(Request $request){
    	$rodada = Rodada::create($request->all());
    	return redirect()->route('rodadas');
    }

}
