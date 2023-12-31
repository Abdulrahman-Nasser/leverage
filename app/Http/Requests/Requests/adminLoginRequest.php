<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email cna not be empty',
            'email.email'=>'incorrect Email',
            'password.required' => 'Password can not be empty'
        ];
    }
}
