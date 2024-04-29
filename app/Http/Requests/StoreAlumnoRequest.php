<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // cambiamos a true para autorizar
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // aqui ponemos las reglas de validacion
            "nombre"=>"string|required|min:1|max:50",
            "email"=>"email|required|unique:alumnos",
            "edad"=>"integer|between:10,60|required"
        ];
    }
}
