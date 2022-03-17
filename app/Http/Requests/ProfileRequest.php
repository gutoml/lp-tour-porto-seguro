<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|min:3|max:255',
            'password' => 'nullable|string|min:3|max:255',
            'email' => 'bail|required|email:rfc,dns|min:3|max:255|unique:users,email',
        ];
    }

    /**
     * Substituição dos nomes do campos por nomes personalizados
     */
    public function attributes()
    {
        return [
            'name' => 'do nome',
            'password' => 'da senha',
            'email' => 'do e-mail',
        ];
    }
}
