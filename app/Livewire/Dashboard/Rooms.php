<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\RoomForm;
use App\Models\Room;
use App\Models\RoomType;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class Rooms extends Component
{
    use WithFileUploads;
    public $showRoomForm = false;
    public RoomForm $roomForm;
    public $rooms = [];
    public $room_types = [];

    #[Title('Dashboard | Rooms - Ndolene Village')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        $this->rooms = Room::with('type')->get();
        $this->room_types = RoomType::all();
        
        return view('livewire.dashboard.rooms');
    }

    public function saveRoom(){
        if(!$this->roomForm->save()){
            $this->showRoomForm = true;
        }

        $this->showRoomForm = false;
    }

    public function cancelRoom(){
        $this->roomForm->reset();
        $this->showRoomForm = false;
    }
}
