<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['model_id', 'model_type', 'image'];

    public function model()
    {
        return $this->morphTo();
    }
}
