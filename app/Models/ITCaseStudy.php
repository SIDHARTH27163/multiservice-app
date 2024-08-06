<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITCaseStudy extends Model
{
    use HasFactory;
    protected $table = 'casestudies';
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
