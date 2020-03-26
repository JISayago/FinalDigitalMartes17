<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRegistroMarca extends FormRequest
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
            'nombre_marca' => 'required|unique:marcas|string|max:50',
        ];
    }
    public function messages()
    {
        return[
        'nombre_marca.required' => 'El nombre de la marca no puede estar vacío',
     ];
    }
}
