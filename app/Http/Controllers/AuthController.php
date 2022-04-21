<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt(request()->only('email','password'))) {
            throw ValidationException::withMessages([
                'invalid' => ['Email dan password tidak sesuai']
            ]);
        }
        return response()->json([
            'message' => 'berhasil login'
        ]);
    }
}
