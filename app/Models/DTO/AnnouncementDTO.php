<?php

namespace App\Models\DTO;

use Carbon\Carbon;
use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;
use App\Interfaces\DTO\ModelDtoInterface;
use Spatie\LaravelData\Attributes\MapOutputName;

class AnnouncementDTO extends Data implements ModelDtoInterface
{
    public ?string $id;

    #[MapOutputName('user_id')]
    public ?string $userId;

    public string $title;

    public ?string $description;

    #[MapOutputName('category_id')]
    public string $categoryId;

    #[MapOutputName('province_id')]
    public string $provinceId;

    public ?string $city;

    #[MapOutputName('activity_start')]
    public Carbon $activityStart;

    public int $duration;

    public ?Collection $tags;
}