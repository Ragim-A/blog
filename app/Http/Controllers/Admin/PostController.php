<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\PostValidation;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('admin.pages.post.index', compact('posts'));
    }

    public function create(){
        $categoriesName = Category::all();
        return  view('admin.pages.post.create', compact('categoriesName'));
    }

    public function store(PostValidation $request){

        /**
         *  Add Post to Post Table
         */

        $values = $request->all();

        if ($request->hasFile('img_url')){
            $image =  $request->file('img_url');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
            $values['photo'] = $filename;
        }

        $values['slug'] = str_replace(' ', '-', $request->name);
        $values['user_id'] = Auth::user()->id; 

        $post = Post::create($values);


        /**
         * Add Categories  to pivot Table
         *
         */
        foreach ($values['category'] as $category){

            CategoryPost::create([
                'category_id' => $category,
                'post_id'=> $post->id
            ]);

        }

        return back()->with([
            'message' => 'Successfully Added Post'
        ]);
    }

    public function  edit($id){

        $post  = Post::find($id);
        $categoriesName = Category::all();
        return view('admin.pages.post.edit', compact('post','categoriesName'));
    }

    public function update(Request $request, $id){

        /**
         *
         * Update Post Table
         *
         */
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required|min:5',
            'content' => 'required|min:20',
            'img_url' => 'image'
        ]);

        $post = Post::find($id);
        $values = $request->all();

        if ($request->hasFile('img_url')){

            @unlink('images/' . $post->photo);

            $image = $request->file('img_url');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
            $values['photo'] = $filename;
        }

        $values['slug'] = str_replace(' ', '-', $values['name']);

        $post->update($values);


        /**
         *
         * Update CategoryPost Table
         *
         */

         CategoryPost::where('post_id', $id)->delete();

         foreach ($values['category'] as $value){
             CategoryPost::create([
                'category_id' => $value,
                'post_id' => $id
             ]);
         }

        return back()->with([
            'message' => 'Successfully updated Post'
        ]);
    }

    public function delete($id){

        $post = Post::find($id);
        @unlink('images/' . $post->photo);
        $post->forceDelete();

        return back()->with([
            'message' => 'Successfully deleted Category'
        ]);
    }

    public function softdelete($id){

        Post::find($id)->delete();

        return back()->with([
            'message' => 'Successfully deleted Category'
        ]);
    }
}
