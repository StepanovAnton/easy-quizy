<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ScheduleController extends Controller
{

    public function index()
    {
        $gamesList = Game::get();
        return view('schedule.index', compact('gamesList'));
    }
}
