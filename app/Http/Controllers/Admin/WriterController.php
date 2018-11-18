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
        $users = User::where('level', '!=', 'admin')->get();
        return view('admin.pages.writer.index', compact('users'));
    }

    public function delete($id){

        $posts = User::find($id)->posts;
        foreach ($posts as $post){
            @unlink('images/' . $post->photo);
        }

        User::destroy($id);

        return back()->with([
            'message' => 'Successfully deleted Category'
        ]);
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $status = ($request->value == 'on') ? 'writer' : 'user';
        User::find($id)->update(['level' => $status ]);
    }
}
