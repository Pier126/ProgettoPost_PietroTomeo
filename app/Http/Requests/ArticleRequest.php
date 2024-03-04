<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles',
            'subtitle' => 'required|min:3',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required',
            'tags' => 'required',
        ];
    }

    public function messages(): array{

        return [
            "title.required" => "Devi inserire un titolo al tuo articolo!",
            "title.unique" => "Il titolo non può essere uguale a quello di un altro articolo!",
            "subtitle.required" => "Devi inserire un sottotitolo al tuo articolo!",
            "subtitle.min" => "Il sottotitolo dev'essere di almeno 3 lettere!",
            "body.required" => "Devi inserire un contenuto nel tuo articolo!",
            "body.min" => "Il contenuto del tuo articolo non può avere meno di 10 lettere!",
            "image.required" => "Devi inserire un'immagine per il tuo articolo!",
            "image.image" => "Devi inserire un file valido come immagine!",
            "category.required" => "Devi inserire una categoria per il tuo articolo!",
            "tags.required" => "Inserisci almeno una tag per il tuo articolo!"
        ];
    }
            
}