<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
            'name'=>'required',
            'vendor'=>'required',
            'type'=>'required',
            'category'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            
        ];
    }
    public function messages(){

        return [
            'name.required'=>'this field is required!!!',
            'vendor.required'=>'vendor field cant left empty!',
            'type.required'=>'Type field cant left empty!',
            'category.required'=>'catagory field cant left empty!',
            'quantity.required'=>'quantity field cant left empty!',
            'price.required'=>'quantity field cant left empty!',
        ];
    }
}
