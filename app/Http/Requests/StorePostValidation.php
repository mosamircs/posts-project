<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostValidation extends FormRequest
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
            'text' =>'required|max:140',
        ];
    }

    /**
     * messages that shown for validations
     */
    public function messages()
    {
        return [
            'text.max'=>"name shouldn't have more than 140 chars",
            'text.required'=>"you should enter your post"
        ];
    }
}
