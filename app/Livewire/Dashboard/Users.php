<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Users extends Component
{
    public $users = [];
    public $selectedUser = null;
    public $showUserForm = false;

    #[Layout('components.layouts.dashboard'),
    Title('Manage Users - Ndolene Village')]
    public function render()
    {
        $this->users = User::where('id', '!=', auth()->id())->get();

        return view('livewire.dashboard.users');
    }

    public function viewUser(User $user){
        $this->selectedUser = $user;
    }
}
