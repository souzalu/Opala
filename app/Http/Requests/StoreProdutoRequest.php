<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
        'nome' => 'required',
    ];
}

public function messages()
{
    return [

    'nome.required' => 'O campo nome é obrigatório.',
    // 'valor_unitario.required' => 'O campo Valor é obrigatório.',
    // 'estoque.required' => 'O campo Estoque é obrigatório.',
    // 'avaliacaoProduto.required' => 'O campo Avaliação é importante.',
    // 'descricaoProduto.required' => 'O campo Descrição é importante.',
    ];
}
}
