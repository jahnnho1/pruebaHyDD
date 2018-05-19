<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productoRequest extends FormRequest
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
            'productoNombre' => ['required','max:40'],
            'productoCodigo' => ['required','max:40'],
            'productoDescripcion' => ['required','max:500'],
            'productoCategoria' => ['required'],
            'productoImagen' => ['required'],
        ];
    }
    
     public function messages()
    {
        return [
           'productoNombre.required' => 'Por favor, escribe el nombre del producto.'
        ];
    }   
    
    
}
