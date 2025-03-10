<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\RoomForm;
use App\Models\Room;
use App\Models\RoomType;
use Livewire\Component;
use Livewire\WithFileUploads;

class Rooms extends Component
{
    use WithFileUploads;
    public $showRoomForm = false;
    public RoomForm $roomForm;
    public $rooms = [];
    public $room_types = [];

    public function render()
    {
        $this->rooms = Room::all();
        $this->room_types = RoomType::all();
        
        return view('livewire.dashboard.rooms');
    }

    public function saveRoom(){
        if(!$this->roomForm->save()){
            $this->showRoomForm = true;
        }

        $this->showRoomForm = false;
    }
}
