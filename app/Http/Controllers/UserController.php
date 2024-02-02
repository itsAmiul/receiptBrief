<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingDATA = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        $incomingDATA['password'] = password_hash($incomingDATA['password'], PASSWORD_BCRYPT);
        $user = User::create($incomingDATA);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $incomingDATA = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $loginAttempt = auth()->attempt(['email' => $incomingDATA['email'], 'password' => $incomingDATA['password']]);
        if ($loginAttempt) {
            $request->session()->regenerate();
            return redirect('/receipt');
        } else {return redirect('/');}
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
