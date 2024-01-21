<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function login(): RedirectResponse
    {
        return redirect()->route('login');
    }
}
