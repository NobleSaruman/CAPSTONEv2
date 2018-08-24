<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id', 'title', 'description', 'user_id', 'active'
    ];

    public function category()
    {
        $this->belongsTo('App\Models\Category');
    }
    public function files()
    {
        return $this->belongsToMany('App\Models\File', 'post_file', 'post_id', 'file_id')->withTimestamps();
    }

}
