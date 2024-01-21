<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RegisterUserController extends Controller
{
    public function register(Request $request,): RedirectResponse
    {
        $validate = $request->validate([]);

        $user = User::create($validate);

        return redirect()->route('register')->with('toast_success', 'Successfully registered');
    }
}
