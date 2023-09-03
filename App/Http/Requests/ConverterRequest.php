<?php

namespace Conv\App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class ConverterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'number' => 'required',
            'security' => 'present|max:0'
        ];

    }

    public function messages()
    {
        return [
            'number.required' => 'Number is required',
            'security' => 'Field above must stay empty'
        ];
    }
}
