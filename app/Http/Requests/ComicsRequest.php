<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
    public function rules(){
        return [
                'title' => 'required|max:50|min:3',
                'image' => 'required|max:255|min:10',
                'type' => 'required|max:50|min:3',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il campo nome è obbligatorio',
            'title.max' => 'Il campo nome deve avere al massimo :max caratteri',
            'title.min' => 'Il campo nome deve avere al minimo :min caratteri',
            'image.required' => 'Il campo immagine è obbligatorio',
            'image.max' => 'Il campo immagine deve avere al massimo :max caratteri',
            'image.min' => 'Il campo immagine deve avere al minimo :min caratteri',
            'type.required' => 'Il campo genere è obbligatorio',
            'type.max' => 'Il campo genere deve avere al massimo :max caratteri',
            'type.min' => 'Il campo genere deve avere al minimo :min caratteri',
        ];

    }
}
