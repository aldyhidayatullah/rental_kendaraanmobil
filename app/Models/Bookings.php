<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Car() {
        return $this->belongsTo(Cars::class, 'car_id', 'id');
    }
}
