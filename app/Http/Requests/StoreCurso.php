<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool /* Se utiliza para comprobar los permisos o autorización de un usuario */
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array  /* cuando el método anterior devuelve un true, pasa a comprobar las reglas de validación que introduzcamos en este método */
    {
        return [
            'name'=>'required|min:3',
            'slug'=>'required|unique:cursos',
            'descripcion'=>'required',
            'categoria'=>'required',
        ];
    }

    public function messages(): array 
    {
        return [
            'descripcion.required' => 'La descripción es obligarotia.',
        ];
    }

    public function attributes(): array
    {
        return[
            'name' => 'nombre del curso',
        ];
    }

    
}
