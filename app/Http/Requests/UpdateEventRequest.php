<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'name' => 'required|string|max:75',
            'excerpt' => 'required|string',
            'description' => 'required',
            'facility' => 'required',
            'jadwal' => 'required',
            'price' => 'required|integer',
            'meet' => 'required|integer',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
            'link' => 'required|string',
            'status' => 'required',
            'event_start' => 'required',
            'event_end' => 'required',
            'published_at' => 'required',
            'published_end' => 'required',
            'category_id' => 'required|integer'
        ];
    }
}
