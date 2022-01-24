<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreatePeopleRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'id_number' => ['required','numeric','min:13', Rule::unique('peoples')],
            'mobile_number' => ['required', Rule::unique('peoples'), 'min:10'],
            'email' => ['required','email', Rule::unique('peoples')],
            'date_of_birth' => 'required|date',
            'language' => 'required',
            'interests' => 'required',
        ];
    }
}