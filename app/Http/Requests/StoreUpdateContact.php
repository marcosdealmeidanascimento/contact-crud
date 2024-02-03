<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContact extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => [
                'required',
                'min:5',
            ],
            'email' => [
                'required',
                'email',
                'unique:contacts,email',
            ],
            'contact' => [
                'required',
                'min:9',
                'max:9',
                'unique:contacts,contact'
            ],
        ];

        return $rules;
    }
}
