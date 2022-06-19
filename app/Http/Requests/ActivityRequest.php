<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'content' => 'required|string|min:10',
            'position' => 'required|string|min:5',
            'moment' => 'required|string|min:2',
            'price' => 'required|string|min:1',
            'nbpeople' => 'required|string',
            'time' => 'required|string',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'le titre est obligatoire',
            'name.min' => 'le titre doit faire minimum 2 caractères',

            'content.required' => 'le contenu est obligatoire',
            'content.min' => 'le contenu doit faire minimum 2 caractères',

            'position.required' => 'l\'adresse est obligatoire',
            'position.min' => 'l\'adresse doit faire minimum 2 caractères',

            'moment.required' => 'le moment est obligatoire',
            'moment.min' => 'le moment doit faire minimum 2 caractères',

            'price.required' => 'le prix est obligatoire',
            'price.min' => 'le prix doit faire minimum 2 caractères',

            'nbpeople.required' => 'le nombre de personne est obligatoire',
            'nbpeople.min' => 'le nombre de personne doit faire minimum 2 caractères',

            'time.required' => 'la durée est obligatoire',
            'time.min' => 'la durée doit faire minimum 2 caractères',

            'image.required' => 'l\image est obligatoire',
        ];
    }
}
