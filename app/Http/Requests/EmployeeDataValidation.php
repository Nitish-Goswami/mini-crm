<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeDataValidation extends FormRequest
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
                'first_name' => 'required',
                'last_name' => 'required',
                'company_id' => 'required|exists:companies,id',
               // 'email' => 'required',
                ///'website'=>'required'
            ];
    }
}
