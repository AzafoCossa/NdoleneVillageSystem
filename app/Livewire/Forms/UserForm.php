<?php

namespace App\Livewire\Forms;

use App\Mail\AccountCreated;
use App\Mail\ReservationCreated;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public $guest;
    public $email;

    public function saveUser(){
        $password = Str::random(8);
        
        $user = new User();
        $user->username = $this->guest;
        $user->email = $this->email;
        $user->password = Hash::make($password);
        $user->save();

        Mail::to($this->email)->send(new AccountCreated([
            'email' => $this->email,
            'password' => $password,
            'username' => $this->guest,
        ]));

        return $user;
    }
}
