<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Models\DTO\AnnouncementFiltersDTO;
use Illuminate\Foundation\Http\FormRequest;

class AnnouncementSerchFiltersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sort_by' => [
                'required',
                'string',
                Rule::in(['asc', 'desc']),
            ],
            'provinces' => [
                'nullable',
                'uuid',
                'exists:provinces,id',
            ],
            'city' => [
                'nullable',
                'string',
                'between:3,64',
            ],
            'date_from' => [
                'nullable',
                'date',
                'after:2023-01-01',
                'before:' . date('Y-m-d', strtotime("+1 days")),
            ],
            'tags' => [
                'nullable',
                'array'
            ],
            'tags.*' => [
                'string',
                'between:3,64',
            ],
        ];
    }

    public function getData(): AnnouncementFiltersDTO
    {
        return AnnouncementFiltersDTO::from([
            'sortBy' => $this->input('sort_by'),
            'provincesId' => $this->input('provinces'),
            'city' => $this->input('city'),
            'dateFrom' => $this->date('date_from'),
            'tags' => collect($this->input('tags', [])),
        ]);
    }
}
