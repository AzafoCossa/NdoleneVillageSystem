<?php

namespace App\Livewire\Dashboard;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();

        if($user->role === "client"){
            $this->reservations = Reservation::where('user_id', $user->id)->get();
        }else{
            $this->reservations = Reservation::all();
        }
        
        return view('livewire.dashboard.reservations');
    }
}
