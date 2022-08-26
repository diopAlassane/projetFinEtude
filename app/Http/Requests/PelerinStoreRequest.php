<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelerinStoreRequest extends FormRequest
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
            'prenom' => 'required',
            'nom' => 'required',
            'date_nais' => 'required',
            'passeport' => 'nullable',
            'niveau_etude'  => 'nullable',
            'contact'  => 'nullable',
            'email'  => 'nullable',
            'langueParler'  => 'nullable',
            'situation_matrimonaile'  => 'nullable',
            'affinite'  => 'nullable',
            'adresse'  => 'nullable',
            'nom_conjoint'  => 'nullable',
            'contact_conjoint'  => 'nullable',
            'nombre_enfant'  => 'nullable',
            'profession' => 'nullable'
        ];
    }
}
