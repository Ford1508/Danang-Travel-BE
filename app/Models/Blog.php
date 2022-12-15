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
        'address',
        'user_id',
        'category_id',
        'created_at',
        'updated_at',
        'user',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    
    public function comment()
    {
        return $this->hasMany('App\Models\Comment','blog_id', 'id');
    }

    public function rating_post()
    {
        return $this->hasMany('App\Models\Rating_post','blog_id', 'id');
    }

    public function is_rating_by_auth($id)
    {
        $raters = array();

        foreach($this->rating_post as $rate):
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
