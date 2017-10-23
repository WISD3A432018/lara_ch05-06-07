<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
    public function getIndex(){
        $users = User::get();
        return view("board",[]);
    }
}
