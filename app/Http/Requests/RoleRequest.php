<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function messages(): array{

        return [
            "role.required" => "Devi inserire il ruolo che vorresti avere!",
            "email.required" => "Inserire il tuo indirizzo email è necessario!",
            "email.email" => "L'email non è stata inserita nel formato corretto!",
            "message" => "Non hai inserito alcun messaggio!"
        ];
    }
}
