<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssociadosRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'company' => 'required',
            'rg' => 'required',
            'cpf' => 'required|int',
            'marital_status' => 'required',
            'cep' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ];
    }

    // Retorna as mensagens do erro
    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo e-mail é obrigatório',
            'phone.required' => 'O campo telefone é obrigatório',
            'rg.required' => 'O campo de rg é obrigatório',
            'cpf.required' => 'O campo de cpf é obrigatório',
            'marital_status.required' => 'O campo estado civil é obrigatório',
            'cep.required' => 'O campo de cep é obrigatório',
            'city' => 'O campo de cidade é obrigatório',
            'state' => 'O campo de estado é obrigatório',
            'country' => 'O campo de Pais é obrigatório',
            'number' => 'O campo número é obrigatório',
            'comprany' => 'O campo de empresa é obrigatório',
            'birthday' => 'O campo de data de aniversário é obrigatório'
        ];
    }


  /*  public function all($keys = null)
    {
        $this->validateFieldsCpf(parent::all());

        return $this->validateFieldsCpf(parent::all());
    }

    public function validateFieldsCpf(array $cpf)
    {
        $cpf['cpf'] = str_replace(['.', '-'], '', $this->request->all()['cpf']);

        return $cpf;
    } */

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['birthday'] = $this->convertStringToDate($value);
    }

    private function convertStringToDate(string $param)
    {
        // Na verificação abaixo estou convertendo de vario para nulo
        if (empty($param)) {
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-'. $month . '-' . $day))->format('Y-m-d');
    }

}
