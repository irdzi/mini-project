<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('users.profile');
    }

    public function edit() {
        return view('users.editmyprofile');
    }
}
