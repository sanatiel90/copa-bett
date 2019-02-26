<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Bet;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::limit(4)->get(); 
        $bets = Bet::where('user_id', Auth::user()->id)->limit(4)->get();

        return view('home', ['games' => $games, 'bets' => $bets ]);
    }
}
