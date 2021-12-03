<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        return view('rese.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'user_name' => ['required', 'string', 'max:191'],
            'user_email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'user_pass' => ['required', Password::min(8)],
        ]);
        $user = User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_pass' => Hash::make($request->user_pass),
            'email_verified_at' => now(),
        ]);

        $user->save();

        return redirect()->route('thanx');
    }

    public function thanx()
    {
        return view('rese.thanx');
    }
}
