<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaquinariaHistorialRequest extends FormRequest
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
            'id_maquinaria' => 'numeric',
            'fecha' => 'required|date',
            'hinicio' => 'nullable|date',
            'htermino' => 'nullable|date',
            'horometro' => 'required|numeric'
        ];
    }
}
