<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            'category_name' => 'required|unique:gategories,name|min:5|max:50',
            'category_img' => 'required',
            



    

        ];
    }
    public function messages(){
      return [
            'category_name.unique'=> 'this Category already exist *',
            'category_name.min'=> 'name must be more than 5 charaters *',
            'category_name.max'=> 'name must be less than 50 charaters *',
            'category_name.required'=> 'name is required *',
            'category_img.required'=>'category image is required *',

            


        ];
    }
}
