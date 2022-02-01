<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public function comment(){
       return $this->hasMany(HotelReview::class);
    }
    public function nutrition(){
        return $this->belongsToMany(Nutrition::class);
    }

}
