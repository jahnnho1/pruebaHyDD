<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoriaRequest extends FormRequest
{
    
        public function authorize()
    {
        return true;
    }
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
     * 
     */
    public function rules()
    {
        return [
            'categoriaNombre' => ['required','max:30'],
            'categoriaDescripcion' => ['required','max:500'],
        ];
    }
    
     public function messages()
    {
        return [
           'categoriaNombre.required' => 'Por favor, escribe el nombre de la categoria.',
           'categoriaDescripcion.required' => 'Por favor, escribe la descripción de la categoria.',
        ];
    }  
    
    
    
}
