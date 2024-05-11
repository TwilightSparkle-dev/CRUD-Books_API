<?php

namespace App\Http\Requests;

use App\Traits\ValidationErrorResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class BookDeleteRequest extends FormRequest
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
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'id' => 'numeric|exists:books,id',
        ];
    }

}
