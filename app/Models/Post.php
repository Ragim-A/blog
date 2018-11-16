<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'photo', 'content', 'slug', 'user_id'
    ];

    public function category(){
        return $this->belongsToMany('App\Models\Category', 'category_posts');
    }
}
