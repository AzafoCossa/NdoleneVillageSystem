<?php

namespace App\Livewire;

use App\Models\Room;
use Brick\Math\RoundingMode;
use Brick\Money\Money;
use Carbon\Carbon;
use Livewire\Component;

class Checkout extends Component
{
    public $room;
    public $totalPrice;
    public $priceUSD;
    public $checkin;
    public $checkout;

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
}
