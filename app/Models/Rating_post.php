<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating_post extends Model
{
    use HasFactory;

    protected $table = "rating_posts";

    protected $fillable = [
        'rating',
        'user_id',
        'blog_id',
        'created_at',
        'updated_at',
    ];
    
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog','blog_id','id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
