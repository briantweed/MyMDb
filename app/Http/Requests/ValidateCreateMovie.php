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
            'movie_name' => 'required',
            'movie_my_rating' => 'required|numeric|between:1,10',
            'movie_bio' => 'required',
            'movie_release_date' => 'required|numeric',
            'movie_running_time' => 'required|numeric',
            'movie_certificate_id' => 'required|numeric',
            'movie_format_id' => 'required|numeric',
            'movie_studio_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'movie_name.required' => 'title is required',
            'movie_my_rating.required' => 'rating is required',
            'movie_my_rating.numeric' => 'rating number only',
            'movie_my_rating.between' => 'rating between 1 and 10',
            'movie_bio.required' => 'description is required',
            'movie_release_date.required' => 'release date is required',
            'movie_release_date.numeric' => 'numbers only',
            'movie_running_time.required' => 'running time is required',
            'movie_running_time.numeric' => 'numbers only',
            'movie_certificate_id.required' => 'certificate is required',
            'movie_certificate_id.numeric' => 'numbers only',
            'movie_format_id.required' => 'format is required',
            'movie_format_id.numeric' => 'numbers only',
            'movie_studio_id.required' => 'studio is required',
            'movie_studio_id.numeric' => 'numbers only',
        ];
    }
}
