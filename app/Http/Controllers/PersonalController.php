<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeamUser;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPersonal()
    {
        return view('profile', [
            'team' => \Auth::user()->team->first(),
            'users' => \Auth::user()->team->first()->users,
            'externalUsers' => \Auth::user()->team->first()->externalUsers,
        ]);
    }
}
