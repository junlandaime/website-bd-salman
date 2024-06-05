<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->hasAnyRole(['superadmin', 'admin', 'kapro']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:75',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
            'status' => 'required',
            'published_at' => 'required',
            'category_id' => 'required|integer'
        ];
    }
}
