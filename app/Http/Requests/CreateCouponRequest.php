<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCouponRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'is_voucher' => 'required|boolean',
            'is_flat' => 'required|boolean',
            'value' => 'required|decimal:2|min:0',
            'stock' => 'required|integer|min:0|nullable',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge(['name' => 'MERGED-PREPARE-FOR-VALIDATION']);
    }

    protected function passedValidation()
    {
        $this->replace([]);
    }
}
