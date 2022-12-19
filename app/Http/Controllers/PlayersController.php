<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {

        $player = Player::findOrFail($id);
        $team = Team::findOrFail($player->id);

        return view('players.show', compact('team', 'player'));
    }
}
