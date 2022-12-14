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
                        'telephone' => 'required',
                        'direction' => 'required',
                        'identy_document' => 'required|unique:clients,identy_document',
                        'email' => 'required|unique:clients,email',
                    ];
                    break;
                case 'PUT':
                    # the ones you need for this case update
                    return [

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
