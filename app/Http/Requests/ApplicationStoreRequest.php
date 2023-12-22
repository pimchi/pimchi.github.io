<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'car_number' => ['required', 'string', 'min:8'],
            'description' => ['required', 'string', 'min:15'],
        ];
    }

    public function attributes(): array
    {
        return [
            'car_number' => 'номер автомобиля',
            'description' => 'описание нарушения'
        ];
    }
}
