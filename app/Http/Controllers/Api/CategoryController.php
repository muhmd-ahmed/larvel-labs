<?php

namespace App\Http\Controllers\Api;
use App\Models\Gategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listAllCategories(){
        $Gategories = Gategory::all();
        
        return response()->json($Gategories);
    }


    public function saveCategory(CreateValidationRequest $request){
        $validated = $request->validated(); 
    
        $category_info=new Gategory;
        $category_info->name=$request->category_name;
        
        $file=$request->file('category_img');
        $category_info->category_image=$file;
        $category_info->addMedia($file)->toMediaCollection();
        $category_info->save();
        return response()->json($category_info);
    }
   
    public function update(CreateValidationRequest $request,$category){
        $validated = $request->validated(); 
        $field=$request->all();
        $category=Gategory::find($category);
        $category->name=$field['category_name'];
        $category->save();
        return response()->json($category);
        
    }
    public function showCategory($category){
        $category=Gategory::find($category);
        return response()->json($category);
    }
    public function deleteCategory($category){
        $category=Gategory::find($category);
        $category->delete();
        return response()->json($category);
    }
}
