<?php

namespace App\Http\Requests\Activity;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'dificultad' => 'required',
            'lugar' => 'required',
            'images' => 'required|image',
            'inicio' => 'date_format:H:i',
            'fin' => 'date_format:H:i|after:inicio'
        ];
    }
}
