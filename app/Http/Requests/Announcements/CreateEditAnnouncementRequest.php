<?php

namespace App\Http\Requests\Announcements;

use App\Models\DTO\AnnouncementDTO;
use Illuminate\Foundation\Http\FormRequest;
use App\Consts\Validations\AnnouncementsValidationConsts;
use Carbon\Carbon;

class CreateEditAnnouncementRequest extends FormRequest
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
            'title' => AnnouncementsValidationConsts::$TITLE,
            'description' => AnnouncementsValidationConsts::$DESCRIPTION,
            'categoryId' => AnnouncementsValidationConsts::$CATEGORY_ID,
            'provinceId' => AnnouncementsValidationConsts::$PROVINCE_ID,
            'city' => AnnouncementsValidationConsts::$CITY,
            'activityStart' => [
                'nullable',
                'date_format:Y-m-d H:i:s',
                'after:' . date('Y-m-d H:i:s'),
            ],
            'duration' => AnnouncementsValidationConsts::$DURATION,
            'tags' => AnnouncementsValidationConsts::$TAGS,
            'tags.*' => AnnouncementsValidationConsts::$TAGS_VALUES,
        ];
    }

    public function getData(): AnnouncementDTO
    {
        $data = $this->safe()->only([
            'title',
            'description',
            'categoryId',
            'provinceId',
            'city',
            'duration',
        ]);

        $data['activityStart'] = $this->date('activityStart', 'Y-m-d H:i:s');
        $data['activityStart'] = !empty($data['activityStart']) ? $data['activityStart'] : Carbon::now();

        $data['tags'] = collect($this->input('tags', []));

        return new AnnouncementDTO($data);
    }
}
