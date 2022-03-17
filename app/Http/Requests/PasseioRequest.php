<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PasseioRequest extends FormRequest
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
            'local' => 'bail|required|min:3|max:255|unique:passeios,local',
            'price' => 'bail|required|integer',
            'desconto' => 'bail|required|integer',
            'subtitle' => 'bail|required|max:500',
            'descricao' => 'bail|required',
            'fotos' => 'required',
            'fotos.*' => 'bail|required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    /**
     * Substituição dos nomes do campos por nomes personalizados
     */
    public function attributes()
    {
        return [
            'local' => 'do local do passeio',
            'price' => 'do preço do passeio',
            'desconto' => 'de desconto',
            'subtitle' => 'da breve descrição',
            'descricao' => 'da descrição detalhada',
            'fotos.*' => 'das fotos',
        ];
    }
}
