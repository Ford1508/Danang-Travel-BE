<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating_comment extends Model
{
    use HasFactory;

    protected $table = "rating_comments";

    protected $fillable = [
        'rating',
        'user_id',
        'comment_id',
        'created_at',
        'updated_at',
    ];

    public function comment()
    {
        return $this->belongsTo('App\Models\Comment','comment_id','id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
