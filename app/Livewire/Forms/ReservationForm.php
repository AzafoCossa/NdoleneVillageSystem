<?php

namespace App\Livewire\Forms;

use App\Mail\ReservationCreated;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ReservationForm extends Form
{
    public $room;
    public $checkin;
    public $checkout;
    public $paidAmount;

    public function save(User $user){

        $checkinDate = Carbon::parse(str($this->checkin)->replace('/', '-'));
        $checkoutDate = Carbon::parse(str($this->checkout)->replace('/', '-'));

        $room = Room::find($this->room);
        $totalPrice = $room->price * $checkinDate->diffInDays($checkoutDate);

        $reservation = new Reservation();
        $reservation->room_id = $room->id;
        $reservation->check_in = $checkinDate;
        $reservation->check_out = $checkoutDate;
        $reservation->total_price = $totalPrice;
        $reservation->paid_amount = $this->paidAmount;
        $reservation->user_id = $user->id;
        $reservation->created_by = Auth::user()->id;
        $reservation->save();

        Mail::to($user->email)->send(new ReservationCreated([
            'username' => $user->username,
            'email' => $user->email,
        ]));
    }
}
