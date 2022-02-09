<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequestArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'article_name'=>'required|unique:articles,name|min:5|max:50',
            'details'=>'required|min:20|max:255',
            'slug'=>'required|unique:articles,slug|min:5|max:50',
            'categories'=>'required',
            'article_img'=>'required',
            'is_used'=>'required'
        ];
    }

    public function messages(){
        return [
            'article_name.required'=>' name is required *',
            'article_name.unique'=> 'this article already exist *',
            'article_name.min'=> 'name must be more than 5 charaters *',
            'article_name.max'=> 'name must be less than 50 charaters *',

            'details.required'=>'description is required *',
            'details.min'=> 'description must be more than 20 charaters *',
            'details.max'=> 'description must be less than 255 charaters *',

            'slug.required'=>'Brand name is required *',
            'slug.unique'=> 'this Brand already exist *',
            'slug.min'=> 'Brand must be more than 5 charaters *',
            'slug.max'=> 'Brand must be less than 50 charaters *',

            'categories.required'=>'category number is required *',
            'article_img.required'=>'article image is required *',
            'is_used.required'=>'this field isrequired *'
  
              
  
  
          ];
      }
}
