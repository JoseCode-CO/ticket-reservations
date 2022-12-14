<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ClientRequest extends FormRequest
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
    { {
            switch ($this->method()) {
                    # the ones you need for the insertion of the case
                case 'POST':
                    return [
                        'name' =>  'required',
                        'lastname' =>  'required',
                        'telephone' => 'required|min:10',
                        'direction' => 'required',
                        'identy_document' => 'required|unique:clients,identy_document',
                        'email' => 'required|unique:clients,email',
                    ];
                    break;
                case 'PUT':
                    # the ones you need for this case update
                    return [
                        'name' =>  'required_without:NIT',
                        'telephone' => [
                            'required',
                            Rule::unique('users', 'telephone')->ignore($this->id, 'id'),
                        ],
                        'code_area_id' =>  'required',
                        'identy_document' => [
                            'required_without:NIT',
                            'nullable',
                            Rule::unique('users', 'identy_document')->ignore($this->id, 'id')
                        ],
                        'NIT' =>  [
                            'nullable',
                            Rule::unique('users', 'NIT')->ignore($this->id, 'id')
                        ],
                        'razon_social' =>    'required_without:identy_document',
                        'email' => [
                            'required',
                            Rule::unique('users', 'email')->ignore($this->id, 'id')
                        ],
                        'type_user_id' =>  'required',
                        //   'password' =>  'required', Password::min(8),
                        // 'verify_tc' => 'required',
                        'type_user_id' =>  'required',
                        'code_area_id' =>  'required',
                    ];

                default:
                    return [];
            }
        }
    }

    public function messages()
    {
        return [
            'name.required'   => 'Nombre es requerido',
            'email.required'   => 'El email es requerido',
            'telephone.min'   => 'El telefono requiere minimo 10 numeros',
            'telephone.required'   => 'El telefono es requerido',
            'identy_document.required'   => 'La cedula es requerida',
            'direction.required'   => 'Nombre es requerido',
            'identy_document.unique'   => 'El correo esta registrado',
        ];
    }
}
