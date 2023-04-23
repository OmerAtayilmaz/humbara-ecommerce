<?php

namespace App\Http\Requests\Storefront;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutPageCartFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
          return [
            'card_number'=>"required",
            'cvc'=>"required",
            'month_year'=>"required",
        ];
    }

    public function messages()
    {
        return [
            'card_number.required' => "Kart numarası giriniz.",
            'cvc.required' => "CVC numaranızı giriniz.",
            'month_year.required' => "Yıl & Ay belirtilmelidir."
        ];
    }
}
