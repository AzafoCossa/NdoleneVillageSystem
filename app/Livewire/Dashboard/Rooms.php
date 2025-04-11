<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\RoomForm;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Cache;
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

        $this->rooms = Cache::get('all-rooms');
        $this->room_types = RoomType::all();

        if($this->rooms){
            return view('livewire.dashboard.rooms');
        }

        $this->rooms = Room::with('type')->get();
        
        Cache::add('all-rooms', $this->rooms);

        return view('livewire.dashboard.rooms');
    }

    public function saveRoom(){
        if(!$this->roomForm->save()){
            $this->showRoomForm = true;
        }

        cache()->forget('all-rooms');
        $this->showRoomForm = false;
    }

    public function cancelRoom(){
        $this->roomForm->reset();
        $this->showRoomForm = false;
    }
}
