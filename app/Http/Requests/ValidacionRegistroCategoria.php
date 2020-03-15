<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRegistroCategoria extends FormRequest
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
            'nombre_categoria' => 'required|unique:categorias|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'nombre_categoria.required' => 'El nombre de la categoria no puede estar vacío',
            'nombre_categoria.unique' => 'Ya existe una categoria con ese nombre',
        ];
    }
}
