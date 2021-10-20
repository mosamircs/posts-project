<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCommentValidation extends FormRequest
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
            'text'=>'required|max:200',
        ];
    }

    /**
     *  Get messges on validation that applied on the request
     * @return array
     */
    public function messages()
    {
        return [
            'text.max'=>"your comment shouldn't have more than 200 char",
            'text.required'=>"your should enter Comment",
        ];
    }
}
