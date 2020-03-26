<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRegistroProducto extends FormRequest
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
            'nombre_producto' => 'required|string|max:150',
            'detalle_producto' => 'required|string|max:150',
            'precio_producto' => 'required|regex:/^\d{1,7}(?:\.\d\d\d)*(?:,\d{0,2})?$/',
            'codigo_producto' => 'required|unique:productos',
            'stock' => 'required|numeric',
            'img_producto'=>'required|image|mimes:jpeg,png,jpg',
        ];
    }
    public function messages()
    {
        return[
            'nombre_producto.required' => 'El nombre del producto no puede estar vacío',
            'detalle_producto.required' => 'Este campo no puede estar vacío',
            'precio_producto.required' => 'Este campo no puede estar vacío',
            'precio_producto.regex' => 'Formato incorrecto, por favor use numeros decimales',
            'codigo_producto.required' => 'Este campo no puede estar vacío',
            'codigo.unique' => 'Ya existe un producto con ese nombre',
            'stock.required' => 'Este campo no puede estar vacío',
            'stock.numeric' => 'Este campo debe ser numérico',
            'img_producto.required' => 'Debe seleccionar una imagen para el producto',
            'img_producto.image' => 'El archivo seleccionado no es una imagen',
            'img_producto.mimes' => 'El archivo debe ser JPG,JPEG o PNG',
        ];
    }
}
