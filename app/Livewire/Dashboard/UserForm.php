<?php

namespace App\Livewire\Dashboard;

use App\Mail\Account\Created;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class UserForm extends Component
{
    public $email;
    public $username;
    public $role = 'receptionist';

    public function render()
    {
        return view('livewire.dashboard.user-form');
    }

    public function saveUser()
    {
        $this->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string',
        ]);

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->role = $this->role;
        $password = Str::random(8);
        $user->password = Hash::make($password);
        
        $user->save();

        Mail::to($user->email)->send(
            new Created([
                'username' => $user->username,
                'email' => $user->email,
                'password' => $password
            ])
        );

        return redirect()->route('dashboard.users');
    }
}
