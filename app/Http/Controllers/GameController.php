<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Rodada;
use App\Results;
use App\Player;
use App\Game;

class GameController extends Controller
{
    public function index(){
    	$games = Game::all();
    	return view('game.index', ['games' => $games]);
    }

    public function new(){
    	$teams = Team::all();
    	$results = Results::all();
    	$rodadas = Rodada::all();
    	return view('game.new', ['teams' => $teams, 'results' => $results, 'rodadas' => $rodadas ]);
    }


    public function store(Request $request){
    	$game = Game::create($request->all());
    	return redirect()->route('games');
    }

    public function edit(Request $request){
    	$game = Game::find($request->id);
    	$teams = Team::all();
    	$results = Results::all();
    	$rodadas = Rodada::all();
    	return view('game.edit', ['game' => $game, 'teams' => $teams, 'results' => $results, 'rodadas' => $rodadas ]);
    
    }

    public function editBest(Request $request){
    	$game = Game::find($request->id);
    	$teams = Team::all();
    	$results = Results::all();
    	$rodadas = Rodada::all();
    	$players = Player::whereIn('team_id', [$game->id_team_home, $game->id_team_visit])->orderBy('team_id')->orderBy('name')->get(); 
    	return view('game.edit_best', ['game' => $game, 'teams' => $teams, 'results' => $results, 'rodadas' => $rodadas   		,'players' => $players ]);
    
        }

    public function update(Request $request){
    	$game = Game::find($request->id);
    	//falta validacoes, como verificar se time casa está igual time fora
    	$game->update($request->all());
    	return redirect()->route('games');
    }

     public function delete(Request $request){
    	$game = Game::find($request->id);
    	//falta validacoes, como verificar se time casa está igual time fora
    	$game->delete();
    	return redirect()->route('games');
    }
}
