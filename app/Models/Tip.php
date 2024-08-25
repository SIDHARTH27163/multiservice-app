<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    protected $table = 'tips';
    protected $fillable = ['tourist_place_id', 'tip'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}