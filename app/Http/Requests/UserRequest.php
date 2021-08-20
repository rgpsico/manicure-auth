<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'max:255|nullable',           
            'avatar' => 'nullable|file',
            'Wathasap'=> 'required|max:255',
            'bairro' => 'required|max:255',
            'descricao' => 'required|max:255',
            
        ];
    }
}
