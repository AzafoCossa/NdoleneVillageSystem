<?php

namespace App\Livewire\Dashboard;

use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RoomTypes extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required|max:100')]
    public $description = '';

    public $room_types = [];

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        $this->room_types = RoomType::withCount('rooms')->get();

        return view('livewire.dashboard.room-types');
    }

    public function createRoomType(){
        $this->validate();

        $roomType = new RoomType();
        $roomType->name = $this->name;
        $roomType->slug = str($this->name)->replace(' ', '-')->lower();
        $roomType->description = $this->description;
        $roomType->created_by = Auth::user()->id;
        
        if($roomType->save()){
            $this->dispatch('room-message', type: 'success', message: 'O tipo de quarto foi criado com sucesso!');
            $this->name = '';
            $this->description = '';
        }else{
            $this->dispatch('room-message', type: 'error', message: 'não foi possível adicionar o tipo de quarto!');
        }
    }
}
