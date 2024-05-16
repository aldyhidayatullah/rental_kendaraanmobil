<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tipe(){
        return $this->belongsTo(Tipe::class, 'tipe_id', 'id');
    }

    public function booking() {
        return $this->hasMany(Bookings::class, 'car_id', 'id');
    }
}
