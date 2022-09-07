<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        'nombre'=> 'required|alpha',
        'apellido'=> 'required|alpha',
        'telefono'=> 'required|regex:/^\+?[0-9]{7,16}$/',
        'email' => 'required|email:rfc,dns',
        'mensaje'=> 'max:500'
        ];
    }
}
