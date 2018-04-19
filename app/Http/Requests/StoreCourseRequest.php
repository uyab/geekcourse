<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
        $this->merge(['category_id' => 1, 'author_id' => auth()->user()->getKey()]);

        return [
            'title'       => 'required',
            'description' => 'required',
            'price'       => 'numeric',
        ];
    }
}
