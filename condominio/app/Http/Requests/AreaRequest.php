<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'local' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [

            'condominio_id.required' => 'Campo Condominio é obrigatório',
            'unidade_id.required' => 'Campo Unidade é obrigatório',
            'local.required' => 'Campo Local é obrigatório',
            'local.max' => 'Campo nome aceita até 255 caracteres',
        ];
    }
}
