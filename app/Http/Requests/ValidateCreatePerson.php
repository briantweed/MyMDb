<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateCreatePerson  extends Request
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
            'person_forename' => 'required',
            'person_surname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'person_forename.required' => 'forename is required',
            'person_surname.required' => 'surname is required',

        ];
    }
}
