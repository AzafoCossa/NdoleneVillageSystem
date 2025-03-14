<?php

namespace App\Livewire\Rooms;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Livewire\Component;

class Availability extends Component
{
    public $canBook = false;
    public $checkin = null;
    public $checkout = null;

    public Room $room;

    public function mount(Room $room){
        $this->room = $room;
    }
    public function render()
    {
        return view('livewire.rooms.availability');
    }

    public function checkAvailability(){

        if($this->isRoomAvailable()){
            $this->dispatch('availability-message', message: 'Room is available', type: 'success');
        }else{
            $this->dispatch('availability-message', message: 'Room is not available', type: 'error');
        }
    }

    public function bookRoom(){

        if($this->isRoomAvailable()){
            $checkinData = [
                'checkin' => str($this->checkin)->replace('/', '-'),
                'checkout' => str($this->checkout)->replace('/', '-'),
            ];

            Session()->put('checkinData', $checkinData);

            return redirect()->route('book.room', ['room' => $this->room->slug]);
        }
    }

    private function isRoomAvailable(){
        $this->validate([
            'checkin' => 'required',
            'checkout' => 'required'
        ]);

        $checkin = Carbon::parse(str($this->checkin)->replace('/', '-'));
        $checkout = Carbon::parse(str($this->checkout)->replace('/', '-'));

        $reservations = Reservation::where('room_id', $this->room->id)
                                    ->where(function($query) use ($checkin, $checkout){
                                        $query->whereBetween('check_in', [$checkin, $checkout])
                                              ->orWhereBetween('check_out', [$checkin, $checkout])
                                              ->orWhere(function($q) use ($checkin, $checkout){
                                                $q->where('check_in', '<=', $checkin)
                                                    ->where('check_out', '>=', $checkout);
                                              });
                                    })->get();

        if($reservations->count() > 0){
            return false;
        }else{
            $this->canBook = true;
            return true;
        }
    }
}
