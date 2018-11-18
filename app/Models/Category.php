<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [
      'name', 'description', 'slug'
    ];

    public function post(){
        return $this->belongsToMany('App\Models\Post', 'category_posts');
    }

}
