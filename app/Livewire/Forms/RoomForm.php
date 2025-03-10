<?php

namespace App\Livewire\Forms;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class RoomForm extends Form
{
    use WithFileUploads;
    public $name;
    public $description;
    public $roomType;
    public $status;
    public $price;
    public $capacity;

    #[Validate('image|max:2048')]
    public $image;

    protected $rules = [
        'name' => 'required',
        'roomType' => 'required',
        'price' => 'required',
        'capacity' => 'required',
        'image' => 'required|image'
    ];

    protected $attributes = [
        'name' => 'nome',
        'roomType' => 'tipo de quarto',
        'price' => 'preço',
        'capacity' => 'capacidade',
        'image' => 'imagem'
    ];

    protected $messages = [
        'required' => 'o campo :attribute é obrigatório.',
        'image' => 'o campo :attribute deve ser uma imagem.'
    ];

    public function save(){

        $this->validate();

        $room = new Room();
        $room->name = $this->name;
        $room->slug = Str::replace(' ', '-', $this->name);
        $room->description = $this->description;
        $room->room_type_id = $this->roomType;
        $room->price = $this->price*100;
        $room->capacity = $this->capacity;
        $room->created_by = Auth::user()->id;
        $room->save();

        $room->images()->create([
            'path' => $this->image->store('rooms', 'public'),
            'created_by' => Auth::user()->id
        ]);

        $this->reset();
    }
}
