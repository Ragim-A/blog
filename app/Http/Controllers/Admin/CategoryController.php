<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryValidation;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        return view('admin.pages.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.pages.category.create');
    }

    public function store(CategoryValidation $request){

        $values = $request->all();
        $values['slug'] = str_replace(" ","-", $request->name);

        Category::create($values);

        return back()->with([
            'message' => 'successfully add Category',
        ]);
    }

    public function edit($id){

        $category = Category::find($id);
        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(CategoryValidation $request, $id){

        Category::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => str_replace(" ","-", $request->name)
        ]);

        return back()->with([
            'message' => 'successfully add Category',
        ]);
    }

    public function delete($id){

        Category::find($id)->delete();

        return back()->with([
            'message' => 'successfully deleted Category',
        ]);
    }
}
