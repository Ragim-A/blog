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
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('home', compact('posts'));
    }

    public function posts($id){
        $posts = Category::find($id);
        return view('posts', compact( 'posts'));
    }

    public function about($slug){
        $post =  Post::where('slug', 'LIKE', "%$slug%")->first();
        return view('about-post', compact('post'));
    }

    public function search(Request $request){
        $search = $request->search;
        $posts = Post::where('name', 'LIKE', "%$search%")
                        ->orWhere('content', 'LIKE', "%$search%")
                        ->get();

        return view('search', compact('posts'));
    }
}
