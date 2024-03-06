<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }


    public function rules(): array
    {
        return [
            'name' => 'required | max: 50',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:8 | confirmed',
        ];
    }

}
