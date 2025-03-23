<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Users extends Component
{
    #[Layout('components.layouts.dashboard'),
    Title('Manage Users - Ndolene Village')]
    public function render()
    {
        return view('livewire.dashboard.users');
    }
}
