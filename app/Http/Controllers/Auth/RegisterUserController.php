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
        $validate = $request->validate([
            'username' => 'required|string|max:255|alpha_dash',
            'email' =>    'required|unique:users,email|max:255',
            'password' => 'required|string|confirmed|max:255|alpha_dash',
        ]);

        $user = User::create($validate);

        return redirect()->route('register');
    }
}
