<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;


class PessoaFormRequest extends FormRequest
{
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


            'nome'=>'required|max:100',
            'tipo_documento'=>'max:20',
            'num_doc'=>'max:20',
            'endereco'=>'max:100',
            'telefone'=>'max:20',
            'email'=>'max:50',
        ];
    }
}

