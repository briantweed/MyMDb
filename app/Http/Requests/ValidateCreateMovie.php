<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateCreateMovie extends Request
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
            'name' => 'required',
            'rating' => 'required|numeric|between:1,10',
            'bio' => 'required',
            'released' => 'required|numeric',
            'running_time' => 'required|numeric',
            'certificate_id' => 'required|numeric',
            'format_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'title is required',
            'rating.required' => 'rating is required',
            'rating.numeric' => 'rating number only',
            'rating.between' => 'rating between 1 and 10',
            'bio.required' => 'description is required',
            'released.required' => 'release date is required',
            'released.numeric' => 'numbers only',
            'running_time.required' => 'running time is required',
            'running_time.numeric' => 'numbers only',
            'certificate_id.required' => 'certificate is required',
            'certificate_id.numeric' => 'numbers only',
            'format_id.required' => 'format is required',
            'format_id.numeric' => 'numbers only'
        ];
    }
}
