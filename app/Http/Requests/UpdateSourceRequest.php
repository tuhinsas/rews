<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateSourceRequest extends Request
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
            'url'  => ['required','url','unique:sources,id,'.$this->get('id')],
            'autograb' => ['boolean'],
            'status'    => ['in:published,hidden']
        ];
    }
}
