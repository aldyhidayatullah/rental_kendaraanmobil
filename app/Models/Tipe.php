<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    
    public function cars(){
        return $this->HasMany(Cars::class, 'tipe_id', 'id');
    }
}
