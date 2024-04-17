<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function store()
    {
        //validate
        $validated = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6)->letters(), 'confirmed'],
        ]);


        $user = User::create($validated);

        Auth::login($user);

        return redirect('/jobs');
    }

    public function create()
    {
        return view('auth.register');
    }
}
