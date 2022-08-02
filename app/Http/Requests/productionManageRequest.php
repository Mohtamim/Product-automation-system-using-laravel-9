<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productionManageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'entryDate'=>'required|date|regex:/^[\pL\s\-]+$/u',
            'productionNo'=>'required|numeric',
            'expiryDate'=>'required|date',
            'selectProductName'=>'required|string',
            'uniteType'=>'required|string',
            'productionQuantity'=>'required|numeric',
            'selectedMaterials'=>'required|string',

        ];
    }
    public function messages()
    {
        return [
            'entryDate.required' => 'Please Fill The Date Field',
            'productionNo.required' => 'Please Enter Production Numbre',
            'expiryDate.required' => 'Please Fill The Date Field',
            'selectProductName.required' => 'Enter Product name',
            'uniteType.required' => 'Enter Unite Type',
            'productionQuantity.required' => 'Enter Production Quantity',
            'selectedMaterials.required' => 'select your materials'
        ];
    }
}
