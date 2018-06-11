<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class controladorErrores extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'tiempo'=> 'required|numeric',
            'nombre'=> 'required',
            'url'=> 'required|alpha_dash',
            'descripcion_breve'=> 'required|max:80|min:40',
            'descripcion' => 'required|min:100',
            'imagen' => 'required|alpha_dash'
          ], [
            'tiempo.numeric' => 'El campo "tiempo" debe ser un numero. Por favor ingrese nuevamente',
            'tiempo.required' => 'El campo "tiempo" es requerido.',
            'nombre.required' => 'El campo "nombre" es requerido.',
            'url.required' => 'El campo "url" es requerido.',
            'url.alpha_dash' => 'El campo "url" solo debe estar formado por letras, numeros, guiones o guiones bajos.',
            'descripcion.required' => 'El campo "descripcion" es requerido.',
            'descripcion.min' => 'El campo "descripcion" no debe tener menos de 80 caracteres.',
            'descripcion_breve.required' => 'El campo "descripcion breve" es requerido.',
            'descripcion_breve.max' => 'El campo "descripcion breve" no debe tener mas de 80 caracteres.',
            'descripcion_breve.min' => 'El campo "descripcion breve" no debe tener menos de 40 caracteres.',
            'imagen.required' => 'El campo "imagen" es requerido.',
            'imagen.alpha_dash' => 'El campo "imagen" solo debe estar formado por letras, numeros, guiones o guiones bajos.',
            ];
    }
}
