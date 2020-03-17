<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCantidadCompra extends FormRequest
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
            'cantidad_producto' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nombre_categoria.required' => 'Se necesita saber la cantidad de producto que desea comprar',
            'nombre_categoria.numeric' => 'Por favor ingrese una cantidad numerica',
        ];
    }
}
