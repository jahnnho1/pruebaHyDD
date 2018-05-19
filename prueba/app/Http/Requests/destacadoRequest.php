<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class destacadoRequest extends FormRequest
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
            'destacadaDescripcion1' => ['required','max:500'],
            'destacadaDescripcion2' => ['required','max:500'],
            'destacadaDescripcion3' => ['required','max:500'],
        ];
    }
    
   
    
    
}
