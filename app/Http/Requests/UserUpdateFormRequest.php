<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class UserUpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'email.required' => 'El :attribute es obligatorio',
            'email.email' => 'El :attribute debe ser un :attribute valido',
            'email.unique' => 'El :attribute ya existe en nuestros registros',
            'price.min' => 'El :attribute debe ser mínimo 0',
            'password.required' => 'Debes ingresar una contraseña',
            'password_confirm.required' => 'Debes confirmar la contraseña',
            'password_confirm.same' => 'Las contraseñas no coinciden',
        ];
    }
}
