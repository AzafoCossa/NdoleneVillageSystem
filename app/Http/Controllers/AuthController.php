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

    public function register(Request $request){
        
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password'
        ], [
            'username.required' => 'O campo username é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email informado é inválido',
            'password.required' => 'O campo password é obrigatório',
            'password.confirmed' => 'As senhas não coincidem',
            'password_confirmation.required' => 'O campo confirmar password é obrigatório',
            'password_confirmation.same' => 'As senhas não coincidem'
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => strtolower($validated['email']),
            'password' => bcrypt($validated['password'])
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
