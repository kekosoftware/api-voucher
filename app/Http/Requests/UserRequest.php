<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50'
        ];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function messages() : array
    {
        return [
            'name.required'     => '(*) Por favor, el nombre es un campo requerido',
            'name.string'       => '(*) Por favor, el nombre debe ser un string',
            'email.required'    => '(*) Por favor, el email es un campo requerido',
            'email.email'       => '(*) Por favor, debe ser un email válido',
            'email.unique'      => '(*) Por favor, el email ingresado ya existe',
            'password.required' => '(*) Por favor, el password es un campo requerido',
            'password.string'   => '(*) Por favor, el password debe ser un string',
            'password.min'      => '(*) Por favor, el password debe tener un mínimo de 6  caracteres',
            'password.max'      => '(*) Por favor, el password debe tener un máximo de 50  caracteres',
        ];
    }
}
