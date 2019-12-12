<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'username'=>'required|unique:users,username',
            'name'=>'required',
            'address'=>'required',
            'Emailaddress'=>'required',
            'contract'=>'required',
            'password'=>'required|max:8|min:4'
        ];
    }
    public function messages(){

        return [
            'username.required'=>'this field is required!!!',
            'password.required'=>'passward field cant left empty!',
            'contract.required'=>'Contract field cant left empty!',
            'name.required'=>'name field cant left empty!',
            'Emailaddress.required'=>'Email field cant left empty!',
            'password.max'=>':attribute Opps!!!'
        ];
    }
}
