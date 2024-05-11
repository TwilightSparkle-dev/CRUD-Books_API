<?php

namespace App\Http\Requests;

use App\Traits\ValidationErrorResponseTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookListRequest extends FormRequest
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
            'per_page'          => ['integer', 'min:1', 'max:100'],
            'page'              => ['integer', 'min:1'],
            'sort_column'       => ['string', Rule::in(['title', 'genre', 'author', 'created_at'])],
            'sort_direction'    => ['string', Rule::in(['asc', 'desc'])],
            'search'            => ['string', 'nullable', 'max:50'],
        ];
    }
}
