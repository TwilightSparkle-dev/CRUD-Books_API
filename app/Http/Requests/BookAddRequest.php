<?php

namespace App\Http\Requests;

use App\Traits\ValidationErrorResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class BookAddRequest extends FormRequest
{
    use ValidationErrorResponseTrait;
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
            'title'             => 'required|string|unique:books,title|min:3|max:100',
            'publisher'         => 'required|string|min:3|max:100',
            'author'            => 'required|string|min:3|max:100',
            'genre'             => 'required|string|min:3|max:50',
            'date_publication'  => 'required|date_format:Y-m-d',
            'count_words'       => 'required|integer|min:1|max:10000000',
            'price'             => 'required|numeric|min:0|max:100000',
        ];
    }
}
