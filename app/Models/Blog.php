<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'rating',
        'image',
        'user_id',
        'location_id',
        'created_at',
        'updated_at',
    ];
}
