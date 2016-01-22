<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCategoryRequest extends Request
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
            'title' => ['required','alpha_num','max:255'],
            'description' => ['string','max:255'],
            'icon' => ['alpha_dash','max:64']
        ];
    }
}
