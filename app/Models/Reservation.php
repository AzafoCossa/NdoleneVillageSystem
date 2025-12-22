<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function guest(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function files(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
