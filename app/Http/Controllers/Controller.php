<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $categories = Category::all();
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('home', compact('posts', 'categories'));
    }

    public function posts($id){
        $categories = Category::all();
        $posts = Category::find($id);
        return view('posts', compact('categories', 'posts'));
    }
}
