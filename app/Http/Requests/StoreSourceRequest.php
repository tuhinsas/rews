<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreSourceRequest extends Request
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
            'name' => ['required','alpha_num'],
            'type' => ['required','alpha_num'],
            'url'  => ['required','unique:sources','url'],
            'autograb' => ['boolean'],
            'status'    => ['in:published,hidden']
        ];
    }
}
