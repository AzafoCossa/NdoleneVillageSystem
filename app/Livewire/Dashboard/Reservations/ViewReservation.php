<?php

namespace App\Livewire\Dashboard\Reservations;

use App\Models\Reservation;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
class ViewReservation extends Component
{

    public Reservation $reservation;

    public function mount(Reservation $reservation)
    {
        $this->reservation = $reservation->load('guest', 'room', 'files');
    }

    public function render()
    {
        return view('livewire.dashboard.reservations.view-reservation');
    }
}
