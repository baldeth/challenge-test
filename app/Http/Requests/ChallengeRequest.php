<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChallengeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['string', 'max:255'],
            'slug' => ['string', 'max:255'],
            'image' => ['image:jpg,jpeg,png,bmp', 'max:255', 'image'],
            'level' => ['string', 'max:255'],
            'description' => ['string'],
            'category_id' => ['integer', 'max:255', 'exists:categories,id'],
            'user_id' => ['integer', 'max:255', 'exists:users,id'],
        ];
    }
}
