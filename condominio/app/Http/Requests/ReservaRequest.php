<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
            'condominio_id' => 'required',
            'unidade_id' => 'required',
            'area_id' => 'required',
            'data' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'condominio_id.required' => 'Campo Condominio é obrigatório',
            'unidade_id.required' => 'Campo Unidade é obrigatório',
            'area_id.required' => 'Campo Área é obrigatório',
            'data.required' => 'Campo Data é obrigatório',
            'data.numeric' => "Campo Data é numérico",

        ];
    }
}
