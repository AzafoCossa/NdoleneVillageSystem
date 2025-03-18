<?php

namespace App\Livewire\Dashboard;

use App\Models\Reservation;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Reservations extends Component
{
    public $reservations = [];
    
    #[Layout('components.layouts.dashboard'),
    Title('Reservations - Dashboard')]
    public function render()
    {
        $this->reservations = Reservation::all();
        
        return view('livewire.dashboard.reservations');
    }
}
