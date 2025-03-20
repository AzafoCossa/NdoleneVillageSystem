<?php

namespace App\Livewire\Dashboard\Guests;

use App\Models\Guest;
use Livewire\Component;

class Index extends Component
{
    public $guests = [];

    public function render()
    {
        $this->guests = Guest::with('country')->get();
        
        return view('livewire.dashboard.guests.index');
    }
}
