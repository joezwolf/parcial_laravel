<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideojuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'fecha_lanzamiento' => 'required|date',
            'disponible' => 'required|boolean',
            'rating' => 'required|numeric|between:0,5',
            'genero' => 'required|string',
            'plataformas' => 'required|string',
            'category_id' => 'required|exists:categories,id',  
        ];
    }
}
