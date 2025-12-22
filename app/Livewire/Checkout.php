<?php

namespace App\Livewire;

use App\Models\Reservation;
use App\Models\Room;
use Brick\Math\RoundingMode;
use Brick\Money\Money;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Checkout extends Component
{

    use WithFileUploads;
    
    public $room;
    public $totalPrice;
    public $priceUSD;
    public $checkin;
    public $checkout;
    public $transferFile;

    public function mount(Room $room){
        $checkinData = collect(session('checkinData'))->map(function($data){
            return Carbon::parse($data);
        });

        $this->checkin = $checkinData['checkin'];
        $this->checkout = $checkinData['checkout'];
        $this->totalPrice = $room->price * $checkinData['checkin']->diffInDays($checkinData['checkout']);
        $this->priceUSD = Money::of($this->totalPrice, 'MZN')->dividedBy(64, RoundingMode::UP)->getAmount()->toFloat();
        $this->room = $room;
    }
    
    public function render()
    {

        return view('livewire.checkout');
    }

    public function bookRoom(){
        $this->validate([
            'room' => 'required',
            'transferFile' => 'required',
            'checkout' => 'required|date|after:checkin',
        ]);

        $reservation = new Reservation();
        $reservation->room_id = $this->room->id;
        $reservation->total_price = $this->totalPrice * 100;
        $reservation->user_id = Auth::user()->id;
        $reservation->check_in = $this->checkin;
        $reservation->check_out = $this->checkout;
        $reservation->created_by = Auth::user()->id;
        $reservation->save();

        $reservation->files()->create([
            'path' => $this->transferFile->store('reservation', 'public'),
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard.index');
    }
}
