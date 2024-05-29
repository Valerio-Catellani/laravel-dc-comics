<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'series' => 'required|max:255|min:3',
            'thumb' => 'required|max:255',
            'price' => 'required|min:0|numeric',
            'type' => 'required|max:255',
            'publisher' => 'required|max:255',
            'release_date' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'nullable',
            'pages' => 'nullable|min:0|numeric',
            'rating' => 'nullable|decimal:1|min:0|max:5',
            'total_votes' => 'nullable|min:0|numeric',
        ];
    }

    public function messages()
    {
        return [
            'series.required' => 'Il campo :attribute è obbligatorio.',
            'series.max' => 'Il campo :attribute non deve superare i :max caratteri.',
            'series.min' => 'Il campo :attribute deve avere almeno :min caratteri.',

            'thumb.required' => 'Il campo :attribute è obbligatorio.',
            'thumb.max' => 'Il campo :attribute non deve superare i :max caratteri.',

            'price.required' => 'Il campo :attribute è obbligatorio.',
            'price.numeric' => 'Il campo :attribute deve essere un numero.',
            'price.min' => 'Il campo :attribute deve avere un valore positivo.',

            'type.required' => 'Il campo :attribute è obbligatorio.',
            'type.max' => 'Il campo :attribute non deve superare i :max caratteri.',

            'publisher.required' => 'Il campo :attribute è obbligatorio.',
            'publisher.max' => 'Il campo :attribute non deve superare i :max caratteri.',

            'release_date.required' => 'Il campo :attribute è obbligatorio.',
            'release_date.max' => 'Il campo :attribute non deve superare i :max caratteri.',

            'author.required' => 'Il campo :attribute è obbligatorio.',
            'author.max' => 'Il campo :attribute non deve superare i :max caratteri.',

            'pages.numeric' => 'Il campo :attribute deve essere un numero.',
            'pages.min' => 'Il campo :attribute deve avere un valore positivo.',

            'rating.min' => 'Il campo :attribute deve avere un valore decimale compreso tra 0 e 5.',
            'rating.max' => 'Il campo :attribute deve avere un valore decimale compreso tra 0 e 5.',
            'rating.decimal' => 'Il campo :attribute deve avere un valore decimale compreso tra 0 e 5. Ad esempio: 4.5',

            'total_votes.numeric' => 'Il campo :attribute deve essere un numero.',
            'total_votes.min' => 'Il campo :attribute deve avere un valore positivo.',
        ];
    }
}
