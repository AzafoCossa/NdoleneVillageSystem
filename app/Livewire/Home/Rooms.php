<?php

namespace App\Livewire\Home;

use App\Models\Room;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Rooms extends Component
{
    public $rooms = [];

    public function render()
    {
        $this->rooms = Cache::get('all-rooms');
        
        if($this->rooms){
            return view('livewire.home.rooms');
        }

        $this->rooms = Room::with('type', 'images')->get();
        Cache::add('all-rooms', $this->rooms);
        
        return view('livewire.home.rooms');
    }
}
