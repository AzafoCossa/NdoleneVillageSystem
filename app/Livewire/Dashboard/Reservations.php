<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\ReservationForm;
use App\Livewire\Forms\UserForm;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Reservations extends Component
{

   public ReservationForm $reservationForm;
   public UserForm $userForm;

    public $reservations = [];
    public $calendarReservations = [];
    public $showReservationForm = false;
    public $rooms = [];

    #[Layout('components.layouts.dashboard'),
    Title('Reservations - Dashboard')]
    public function render()
    {
        $this->rooms = Room::all();
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

    public function addReservation(){
        $user = $this->userForm->saveUser();

        $this->reservationForm->save($user);
        $this->showReservationForm = false;
    }

    #[On('showReservationDetails')]
    public function showReservation($reservationId)
    {
        return redirect()->route('dashboard.reservation', ['reservation' => $reservationId]);
    }

    #[On('showReservationForm')]
    public function displayReservationForm(){
        $this->showReservationForm = true;
    }
}
