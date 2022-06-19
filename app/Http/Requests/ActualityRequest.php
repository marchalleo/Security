<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualityRequest extends FormRequest
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
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'le titre est obligatoire',
            'name.min' => 'le titre doit faire minimum 2 caractères',

            'content.required' => 'le contenu est obligatoire',
            'content.min' => 'le contenu doit faire minimum 10 caractères',

            'image.required' => 'l\'image est obligatoire',
        ];
    }
}
