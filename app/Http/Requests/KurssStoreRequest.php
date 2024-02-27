<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KurssStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nosaukums' => 'required|string|max:255',
            'paskaidrojums' => 'required|string',
            'banera_adrese' => 'required|url',
            'cilveku_skaits' => 'required|integer|min:1',
        ];
    }
}
