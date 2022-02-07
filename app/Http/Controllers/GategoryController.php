<?php

namespace App\Http\Controllers;
use App\Models\Gategory;
use Illuminate\Http\Request;


class GategoryController extends Controller
{
    public function listAllCategories(){
        $Gategories = Gategory::all();
        return view('CategoryList',['categories'=>$Gategories]);
    }

    public function createCategory(){
        return view('createCategory');
    }
    public function saveCategory(Request $request){
        $category_info=new Gategory;
        $category_info->name=$request->category_name;
        $category_info->category_image=$request->category_img;
        $category_info->save();
        return redirect('/categories');
    }
    public function ShowEditInfo($category){
        $Gategories = Gategory::all();
        $category=Gategory::find($category);
        return view('editCategory',compact('category','Gategories'));
    }
    public function update(Request $request,$category){
        $field=$request->all();
        $category=Gategory::find($category);
        $category->name=$field['category_name'];
        $category->save();
        return redirect('/categories');
    }
    public function showCategory($category){
        
        $category=Gategory::find($category);
        return view('showCategory',compact('category'));
    }
    public function deleteCategory($category){
        $category=Gategory::find($category);
        $category->delete();
        return redirect('/categories');
    }
}
