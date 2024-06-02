<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExplorePostController extends Controller
{
    Public function index() {
        return view('users.explore');
    }
}
