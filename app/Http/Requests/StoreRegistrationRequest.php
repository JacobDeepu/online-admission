<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:8',
            'date_of_birth' => 'required',
            'date_of_birth_word' => 'required|max:255',
            'uid' => 'required|numeric|digits:12',
            'religion' => 'required|string|max:255',
            'caste' => 'required|string|max:255',
            'social_category' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'mother_tongue' => 'required|string|max:255',
            'primary_number' => 'required|numeric|digits:10',
            'secondary_number' => 'nullable|numeric|digits:10',
            'house_name' => 'required|string|max:255',
            'road' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'post_office' => 'required|string|max:255',
            'pin_code' => 'required|numeric|digits:6',
            'permanent_house_name' => 'required|string|max:255',
            'permanent_road' => 'required|string|max:255',
            'permanent_street' => 'required|string|max:255',
            'permanent_area' => 'required|string|max:255',
            'permanent_city' => 'required|string|max:255',
            'permanent_post_office' => 'required|string|max:255',
            'permanent_pin_code' => 'required|numeric|digits:6',
            'father_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_annual_income' => 'required|string|max:255',
            'father_office_address' => 'required|string|max:255',
            'father_office_number' => 'required|numeric|digits:10',
            'father_mobile_number' => 'required|numeric|digits:10',
            'father_email' => 'required|email',
            'mother_name' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_annual_income' => 'nullable|string|max:255',
            'mother_office_address' => 'nullable|string|max:255',
            'mother_office_number'=> 'nullable|numeric|digits:10',
            'mother_mobile_number'=> 'required|numeric|digits:10',
            'mother_email'=> 'nullable|email'
        ];
    }
}
