<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function index() {

    $games = Game::latest()->get();      

    return view('games.index', [
      'games' => $games,
    ]);
  }

  public function show($id) {
    
    $game = Game::findOrFail($id);

    return view('games.show', ['game' => $game]);
  }

  public function create() {
    return view('games.create');
  }

  public function store() {

    $game = new Game();

    $game->name = request('name');
    $game->platform = request('platform');
    $game->rating = request('rating');
    $game->addons = request('addons');

    $game->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');

  }

  public function destroy($id) {

    $game = Game::findOrFail($id);
    $game->delete();

    return redirect('/games');

  }

}
