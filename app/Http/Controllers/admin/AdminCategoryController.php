<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;

class AdminCategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('admin.pages.category.index',compact('categories'));
    }

    public function create(){
        return view('admin.pages.category.create');
    }
    public function store(CreateCategoryRequest $request){

        $data = $request->validated();

        // image logic

        $img = $data['image'];

        $ext = $img->getClientOriginalExtension();

        $image_name = "category-".rand(10000,1000000).".".$ext;

        $img->move(public_path('admin/assets/img/categories'),$image_name);

        $data['image'] = $image_name;
        // ------------------------------------------

        if(Category::create($data)){
            // toastr()->success('');
            return to_route('category.index')->with('success',"Category created successfully");
        }
    }



    public function destroy(Category $category){
        $category->delete();
        return to_route('category.index')->with('danger',"category was deleted successfully");
    }
}
