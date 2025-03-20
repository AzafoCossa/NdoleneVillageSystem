<?php

namespace App\Livewire\Dashboard\Guests;

use App\Models\Guest;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    public $guests = [];

    #[Title('Guests - Dashboard | Ndolene Village')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        $this->guests = Guest::with('country')->get();
        
        return view('livewire.dashboard.guests.index');
    }
}
