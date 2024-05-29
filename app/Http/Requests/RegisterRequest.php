<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'users_username' => 'required|string|min:4',
            'users_email' => 'required|email|unique:cake_shop_users_registrations',
            'users_password' => 'required|min:2',
            'users_address' => 'required|string|min:6',
            'users_mobile' => 'required|min:6',
        ];
    }
}
