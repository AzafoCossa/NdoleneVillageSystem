<?php

namespace App\Livewire\Dashboard;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Reservations extends Component
{
    public $reservations = [];
    public $calendarReservations = [];

    #[Layout('components.layouts.dashboard'),
    Title('Reservations - Dashboard')]
    public function render()
    {
        $user = Auth::user();

        if($user->role === "client"){
            $this->reservations = Reservation::with('guest', 'room')->where('user_id', $user->id)->get();
        }else{
            $this->reservations = Reservation::with('guest', 'room')->get();

            $this->calendarReservations = Reservation::with('room')->get()->map(function($reservation){
                return [
                    'id' => $reservation->id,
                    'title' => $reservation->room->name,
                    'start' => $reservation->check_in,
                    'end' => $reservation->check_out,
                ];
            })->toJson();
        }
        
        return view('livewire.dashboard.reservations');
    }

    #[On('showReservationDetails')]
    public function showReservation($reservationId)
    {
        return redirect()->route('dashboard.reservation', ['reservation' => $reservationId]);
    }
}
