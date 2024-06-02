<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeePostController extends Controller
{
    public function seepost()
    {
        return view('users.seepost');
    }
}
