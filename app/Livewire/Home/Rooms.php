<?php

namespace App\Livewire\Home;

use App\Models\Room;
use Livewire\Component;

class Rooms extends Component
{
    public $rooms = [];

    public function render()
    {
        $this->rooms = Room::with('type')->get();
        
        return view('livewire.home.rooms');
    }
}
