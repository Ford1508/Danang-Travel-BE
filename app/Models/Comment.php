<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
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

    public function rating_comment()
    {
        return $this->hasMany('App\Models\Rating_comment','comment_id', 'id');
    }

    public function is_rating_by_auth($id)
    {
        $raters = array();

        foreach($this->rating_comment as $rate):
            array_push($raters, $rate->user_id);
        endforeach;

        if(in_array($id, $raters)){
            return true;
        }
        else
        {
            return false;
        }
    }
}
