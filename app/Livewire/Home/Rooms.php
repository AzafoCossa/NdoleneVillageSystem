<?php

namespace App\Livewire\Home;

use App\Models\Room;
use Livewire\Component;

class Rooms extends Component
{
    public $rooms = [];

    public function render()
    {
        $this->rooms = Room::with('type', 'images')->get();
        
        return view('livewire.home.rooms');
    }
}
