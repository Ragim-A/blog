<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WriterController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('admin.pages.writer.index', compact('users'));
    }

    public function delete($id){

        $posts = User::find($id)->posts;
        foreach ($posts as $post){
            @unlink('images/' . $post->photo);
        }

        Post::where('user_id',$id)->delete();
        User::destroy($id);

        return back()->with([
            'message' => 'Successfully deleted Category'
        ]);
    }
}
