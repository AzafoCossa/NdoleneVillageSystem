<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getPriceAttribute($value){
        return $value/100;
    }
}
