<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|min:2',
            'phone' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательна для заполнения',
            'name.min' => 'Имя не может быть короче :min символа',
            'phone.min' => 'Номер телефона не может быть короче :min символов'
        ];
    }
}
