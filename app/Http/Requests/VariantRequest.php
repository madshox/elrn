<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariantRequest extends FormRequest
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
            'image' => 'required|image',
            'text.ru' => 'required',
            'text.en' => 'required',
            'text.uz' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательна для заполнения',
            'min' => 'Поле :attribute должна иметь минимум 3 символа',
            'image' => 'Поддерживаются файлы типа jpg, jpeg, png, bmp, gif, svg, или webp',
        ];
    }
}
