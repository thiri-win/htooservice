<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoice extends FormRequest
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
            'date' => 'required',
            'car_make' => 'required',
            'car_no' => 'required',
            'car_model' => 'required',
            'sub_total' => 'required|integer',
            'advanced' => 'required|integer',
            'discount' => 'required|integer',
            'grand_total' => 'required|integer',
        ];
    }
}
