<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreDebtorMaster extends FormRequest
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
            'debtorno' => 'required|max:10|min:10',
            'name' => 'required|max:40',
            'address1' => 'required|max:40',
            'address2' => 'required|max:40',
            'address3' => 'required|max:40',
            'address4' => 'required|max:50',
            'address5' => 'required|max:20',
            'address6' => 'required|max:15',
            'taxref' => 'required|max:20'
            // 'salesmancode' => 'required|max:3|min:3'
        ];
    }

    public function messages()
    {
        return [
            'debtorno.required' => 'NO. DEBTOR IS REQUIRED',
            'debtorno.max' => 'NO. DEBTOR IS HIGHER OF 10',
            'debtorno.min' => 'NO. DEBTOR IS LESS OF 10',
            'name.required' => 'NAME IS REQUIRED',
            'name.max' => 'NAME IS HIGHER OF 40',
            'address1.required' => 'ADDRESS 1 IS REQUIRED',
            'address1.max' => 'ADDRESS 1 IS HIGHER OF 40',
            'address2.required' => 'ADDRESS 2 IS REQUIRED',
            'address2.max' => 'ADDRESS 2 IS HIGHER OF 40',
            'address3.required' => 'ADDRESS 3 IS REQUIRED',
            'address3.max' => 'ADDRESS 3 IS HIGHER OF 40',
            'address4.required' => 'ADDRESS 4 IS REQUIRED',
            'address4.max' => 'ADDRESS 4 IS HIGHER OF 50',
            'address5.required' => 'ADDRESS 5 IS REQUIRED',
            'address5.max' => 'ADDRESS 5 IS HIGHER OF 20',
            'address6.required' => 'ADDRESS 6 IS REQUIRED',
            'address6.max' => 'ADDRESS 6 IS HIGHER OF 15',
            'taxref.required' => 'TAXREF IS REQUIRED',
            'taxref.max' => 'TAXREF IS HIGHER OF 20'
            // 'salesmancode.required' => 'SALESMANCODE IS REQUIRED',
            // 'salesmancode.max' => 'SALESMANCODE IS HIGHER OR LESS OF 3'
        ];
    }
      
}
