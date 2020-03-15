<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ValidacionRegistros extends FormRequest
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
            'nombre_producto' => 'required|string|max:50',
            'detalle_producto' => 'required|string|max:50',
            'precio_producto' => 'required|numeric|max:50',
            'codigo_producto' => 'required|unique:productos|string|max:50',
            'stock' => 'required|numeric|max:50',
            'img_producto'=>'required|image|mimes:jpeg,png,jpg',
            'nombre_categoria' => 'required|unique:categorias|string|max:50',
            'nombre_marca' => 'required|unique:marca|string|max:50',

        ];
    }

    public function messages()
    {
        return [
            'nombre_producto.required' => 'El nombre del prudcto no puede estar vacío',
            'detalle_producto.required' => 'Este campo no puede estar vacío',
            'precio_producto.required' => 'Este campo no puede estar vacío',
            'precio_producto.numeric' => 'Este campo debe ser numérico',
            'codigo_producto.required' => 'Este campo no puede estar vacío',
            'codigo.unique' => 'Ya existe un producto con ese nombre',
            'stock.required' => 'Este campo no puede estar vacío',
            'stock.numeric' => 'Este campo debe ser numérico',
            'img_producto.required' => 'Debe seleccionar una imagen para el producto',
            'img_producto.image' => 'El archivo seleccionado no es una imagen',
            'img_producto.mime' => 'El archivo debe ser JPG,JPEG o PNG',

            'nombre_categoria.required' => 'El nombre de la categoria no puede estar vacío',
            'nombre_categoria.unique' => 'Ya existe una categoria con ese nombre',
            'nombre_marca.required' => 'El nombre de la marca no puede estar vacío',
            'nombre_marca.unique' => 'Ya existe una marca con ese nombre',

        ];
    }
}
