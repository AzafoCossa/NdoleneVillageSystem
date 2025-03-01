<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email informado é inválido',
            'password.required' => 'O campo password é obrigatório'
        ]);

        if (!auth()->attempt($validated, $request->remember_me)) {
            return redirect()->back()->withInput()->withErrors([
                'email' => 'O email ou password estão incorretos',
            ]);
        }

        return redirect()->route('dashboard');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
