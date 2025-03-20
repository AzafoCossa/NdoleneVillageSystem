<?php

namespace App\Livewire\Rooms;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class Availability extends Component
{
    #[Url(as: 'room', keep: true)]
    public $search = '';
    public $canBook = false;
    public $checkin = null;
    public $checkout = null;

    public $clickedRoom = null;
    public $rooms = [];

    public function mount(){
        if($this->search == ''){
            session()->forget('room');
            $this->rooms = Room::with('images', 'type')->get();
        }else{
            $this->clickedRoom = Room::where('slug', 'like', "%$this->search%")
                                ->orWhere('name', 'like', "%$this->search%")->first();
            session()->put('room', $this->clickedRoom);
            $this->rooms[] = $this->clickedRoom;
        }

    }
    #[Title('Verificar disponibilidade do quarto - Ndolene Village')]
    public function render(){
        return view('livewire.rooms.availability');
    }

    public function checkAvailability(){
        $r = session()->get('room');

        if($this->isRoomAvailable($r)){
            $this->dispatch('availability-message', message: 'O quarto está disponível', type: 'success');
        }else{
            $this->dispatch('availability-message', message: 'O quarto não está disponível', type: 'error');
        }
    }

    private function isRoomAvailable($room = null){
        $this->validate([
            'checkin' => 'required',
            'checkout' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório',
            'date' => 'O campo :attribute deve ser uma data válida',
            'after' => 'A data de checkout deve ser depois da data de checkin',
        ]);

        $reservations = [];

        $checkin = Carbon::parse(str($this->checkin)->replace('/', '-'));
        $checkout = Carbon::parse(str($this->checkout)->replace('/', '-'));

        if($room){
            $reservations = Reservation::where('room_id', $room->id)
                                        ->where(function($query) use ($checkin, $checkout){
                                            $query->whereBetween('check_in', [$checkin, $checkout])
                                                ->orWhereBetween('check_out', [$checkin, $checkout])
                                                ->orWhere(function($q) use ($checkin, $checkout){
                                                    $q->where('check_in', '<=', $checkin)
                                                        ->where('check_out', '>=', $checkout);
                                                });
                                        })->get();
        }else{
            $reservations = Reservation::where(function($query) use ($checkin, $checkout){
                $query->whereBetween('check_in', [$checkin, $checkout])
                    ->orWhereBetween('check_out', [$checkin, $checkout])
                    ->orWhere(function($q) use ($checkin, $checkout){
                        $q->where('check_in', '<=', $checkin)
                            ->where('check_out', '>=', $checkout);
                    });
            })->get();
            
            session()->forget('room');
        }
        

        if($reservations->count() > 0){
            $this->search = '';
            $this->rooms = Room::whereNotIn('id', $reservations->pluck('room_id'))->get();
            $this->canBook = false;
            return false;
        }else{
            $this->canBook = true;
            return true;
        }
    }

    public function bookRoom(Room $room){
        if($this->isRoomAvailable($room)){
            $checkinData = [
                'checkin' => str($this->checkin)->replace('/', '-'),
                'checkout' => str($this->checkout)->replace('/', '-'),
            ];

            Session()->put('checkinData', $checkinData);

            return redirect()->route('book.room', ['room' => $room->slug]);
        }
    }
}
