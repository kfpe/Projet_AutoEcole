<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'nom' => 'required|string|max:60',
            'prenom' => 'required|string|max:60',
            'sexe' => 'required|string|max:15|in:masculin,féminin',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'required|string|max:20',
            'mot_de_passe' => 'required|string|min:8',
            'role' => 'required|string|in:admin,user,agent',
            'agence_id' => 'required|exists:agences,id'
        ];
    }
}



