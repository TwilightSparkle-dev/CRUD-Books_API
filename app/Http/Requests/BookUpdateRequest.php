<?php

namespace App\Http\Requests;

use App\Traits\ValidationErrorResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'                => 'numeric|exists:books,id',
            'title'             => 'string|unique:books,title|min:3|max:100',
            'publisher'         => 'string|min:3|max:100',
            'author'            => 'string|min:3|max:100',
            'genre'             => 'string|min:3|max:50',
            'date_publication'  => 'date_format:Y-m-d',
            'count_words'       => 'integer|min:1|max:10000000',
            'price'             => 'numeric|min:0|max:100000',
        ];
    }

}
