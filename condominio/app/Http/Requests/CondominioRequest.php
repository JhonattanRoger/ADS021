<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'cnpj' => 'required|numeric',
            'endereco' => 'required|max:100',
            'cep' => 'required|numeric',
            'bairro' => 'required|max:30',
            'cidade' => 'required|max:30',
            'uf' => 'required|max:2',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome é obrigatório',
            'nome.max' => 'Campo nome aceita até 100 caracteres',
            'cnpj.required' => 'Campo CNPJ é obrigatório',
            'cnpj.numeric' => "Campo CNPJ é numérico",
            'endereco.required' => 'Campo Endereço é obrigatório',
            'endereco.max' => 'Campo nome aceita até 100 caracteres',
            'cep.required' => 'Campo CEP é obrigatório',
            'cep.numeric' => "Campo CEP é numérico",
            'bairro.required' => 'Campo Bairro é obrigatório',
            'bairro.max' => 'Campo nome aceita até 30 caracteres',
            'cidade.required' => 'Campo Cidade é obrigatório',
            'cidade.max' => 'Campo nome aceita até 30 caracteres',
            'uf.required' => 'Campo UF é obrigatório',
            'uf.max' => 'Campo nome aceita até 2 caracteres',

        ];
    }
}
