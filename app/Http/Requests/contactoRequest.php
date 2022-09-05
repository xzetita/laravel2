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
        return false;
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
        'telefono'=> 'required|digits_between:7,15|numeric',
        'email' => 'required|email:rfc,dns',
        'mensaje'=> 'max:500'
        ];
    }
}
