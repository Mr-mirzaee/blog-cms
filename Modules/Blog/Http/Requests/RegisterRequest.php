<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'unique:users|required',
            'password' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
