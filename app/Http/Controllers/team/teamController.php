<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function team(){
        return view('team.team');
    }
}
