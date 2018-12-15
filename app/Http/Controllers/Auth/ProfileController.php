<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the user information.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.profile.index')->with([
            'user' => Auth::user(),
        ]);
    }
}
