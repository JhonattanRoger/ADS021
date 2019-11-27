<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeRequest extends FormRequest
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
            'numero_unidade' => 'required|numeric',
            'proprietario' => 'required|max:100',
            'cpf' => 'required|max:11',
            'email' => 'required|max:30',
            'telefone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'condominio_id.required' => 'Campo Condominio é obrigatório',
            'numero_unidade.required' => 'Campo Número da Unidade é obrigatório',
            'numero_unidade.numeric' => "Campo Número da Unidade é numérico",
            'proprietario.required' => 'Campo Proprietário é obrigatório',
            'proprietario.max' => 'Campo Proprietário aceita até 100 caracteres',
            'cpf.required' => 'Campo CPF é obrigatório',
            'cpf.max' => 'Campo CPF aceita até 11 caracteres',
            'email.required' => 'Campo E-mail é obrigatório',
            'email.max' => 'Campo E-mail aceita até 30 caracteres',
            'telefone.required' => 'Campo Proprietário é obrigatório',
            'telefone.numeric' => 'Campo Telefone é númerico',

        ];
    }
}
